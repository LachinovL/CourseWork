<?php
    require_once 'connect.php';
    ini_set('display_errors', 0);
error_reporting(0);
?>

<html>  
    <head>
        <title>
            Расписание
        </title>
        <link rel="stylesheet" href="CSS/shedule.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    </head>
    <body>
        <header>
            <nav class="menu">
                <div class="menu__main">
                    <ul class="menu__main__table">
                    <li class="logo"><a href="index.php"><img src="img/icon.png"></a></li>
                    <li class="text"><a href="services.html">УСЛУГИ</a></li>
                    <li class="text"><a href="index.php#club">КЛУБЫ</a></li>
                    <li class="text"><a href="shedule.php">РАСПИСАНИЕ</a></li>
                    <li class="text"><a href="coaches.php">ТРЕНЕРЫ</a></li>
                    <li class="text"><a href="contacts.html">КОНТАКТЫ</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <div class="shedule" id="app">
                <div class="modal" v-if="showModal">
                    <form action="create.php" method="POST">
                        <input type="text" class="form-control" name="week" id="week" placeholder="Введите id недели"><br>
                        <input type="text" class="form-control" name="time" id="time" placeholder="Введите id времени"> <br>
                        <input type="text" class="form-control" name="coach" id="coach" placeholder="Введите id тренера"> <br>
                        <input type="text" class="form-control" name="club" id="club" placeholder="Введите id зала"> <br>
                        <input type="text" class="form-control" name="sport" id="sport " placeholder="Введите id вида спорта"> <br>
                        <button type="submit" class="btn btn-success">Ввести</button>
                    </form>
                </div>
                <div v-else>
                </div>    
                <div class="modal" v-if="deleteModal"> 
                    <form action="delete.php" method="POST">
                        <input type="text" class="form-control" name="week" id="week" placeholder="Введите id недели"><br>
                        <input type="text" class="form-control" name="time" id="time" placeholder="Введите id времени"> <br>
                        <input type="text" class="form-control" name="coach" id="coach" placeholder="Введите id тренера"> <br>
                        <input type="text" class="form-control" name="club" id="club" placeholder="Введите id зала"> <br>
                        <input type="text" class="form-control" name="sport" id="sport " placeholder="Введите id вида спорта"> <br>
                        <button type="submit" class="btn btn-success">Удалить</button>
                    </form>
                </div>
                <div v-else>
                </div>    
                <div class="modal" v-if="updateModal"> 
    <form action="update.php" method="POST">
        <input type="text" class="form-control" name="week" id="week" placeholder="Введите изменяемый id недели"><br>
        <input type="text" class="form-control" name="time" id="time" placeholder="Введите изменяемый id времени"> <br>
        <input type="text" class="form-control" name="coach" id="coach" placeholder="Введите изменяемый id тренера"> <br>
        <input type="text" class="form-control" name="club" id="club" placeholder="Введите изменяемый id зала"> <br>
        <input type="text" class="form-control" name="sport" id="sport " placeholder="Введите изменяемый id вида спорта"> <br>
        <input type="text" class="form-control" name="week2" id="week2" placeholder="Введите новый id недели"><br>
        <input type="text" class="form-control" name="time2" id="time2" placeholder="Введите новый id времени"> <br>
        <input type="text" class="form-control" name="coach2" id="coach2" placeholder="Введите новый id тренера"> <br>
        <input type="text" class="form-control" name="club2" id="club2" placeholder="Введите новый id зала"> <br>
        <input type="text" class="form-control" name="sport2" id="sport2" placeholder="Введите новый id вида спорта"> <br>
        <button type="submit" class="btn btn-success">Изменить</button>
    </form>
                </div>
                <div v-else>
                </div>    
                <div class="shedule__title">
                    <p>РАСПИСАНИЕ</p>
                    <button @click="open"><img src="img/plus.png"></button>
                    <button @click="opendelete"><img src="img/delete.png"></button>
                    <button @click="openupdate"><img src="img/redact.png"></button>
                </div>
                <div class="shedule__list">
                    
                    <table border="1" width="100%">
                        <tr>
                            <th width="10%">Время</th>
                        <?php 
	                        $weekdays = mysqli_query($connect, "SELECT * FROM `weekday`");
	                        $weekdays = mysqli_fetch_all($weekdays);
	                        foreach($weekdays as $weekday){
                        ?> 
                            <th width="18%"><h2><?= $weekday[1] ?></h2></th>
                            <?php
                                }
                            ?>
                        </tr>     
                        <?php
                            $i = 0;
                            $times = mysqli_query($connect, "SELECT * FROM `time` ");
                            $times = mysqli_fetch_all($times);
                            foreach ($times as $time) {
                            $shedules = mysqli_query($connect, "SELECT * FROM `shedule` WHERE `id_time`=$time[0]");
                            $shedules = mysqli_fetch_all($shedules);
                            foreach($shedules as $shedule) 
                            $weekdays = mysqli_query($connect, "SELECT `name` FROM `weekday` WHERE `id` = $shedule[1] ");
                            $weekdays = mysqli_fetch_all($weekdays);
                            foreach($weekdays as $weekday)
                            $coaches = mysqli_query($connect, "SELECT `name`, `surname` FROM `coaches` WHERE `id` = $shedule[3] ");
                            $coaches = mysqli_fetch_all($coaches);
                            foreach($coaches as $coach)
                            $clubs = mysqli_query($connect, "SELECT `name` FROM `clubs` WHERE `id` = $shedule[4] ");
                            $clubs = mysqli_fetch_all($clubs);
                            foreach($clubs as $club)
                            $sports = mysqli_query($connect, "SELECT `name` FROM `sport` WHERE `id` = $shedule[5] ");
                            $sports = mysqli_fetch_all($sports);
                            foreach($sports as $sport)
                            
                        ?>
                        <tr>
                            <td><?= $time[1] ?></td>
                            <?php 
                                $i++;
                                if (i==5) {
                                    ?> 
                                        <div class="page-break"></div>
                                    <?php
                                }
                                if ($weekday[0]=="Понедельник") {
                            ?>
                            <td> 
                                Зал:  <br>
                            <?= $club[0] ?> <br> <br>
                                Тренер: <br>
                            <?= $coach[0], ' ', $coach[1] ?><br> <br>
                                Вид спорта:<br>
                            <?= $sport[0] ?> <br> <br>
                            </td>
                            <?php
                                } else { ?>
                                <td>
                                </td>
                            <?php
                                }

                            ?>



                            <?php 
                                if ($weekday[0]=="Вторник") {
                            ?>
                            <td> 
                                Зал:  <br>
                            <?= $club[0] ?> <br> <br>
                                Тренер: <br>
                            <?= $coach[0], ' ', $coach[1] ?><br> <br>
                                Вид спорта:<br>
                            <?= $sport[0] ?> <br> <br>
                            
                            
                            
                            </td>
                            <?php
                                } else { ?>
                                <td>
                                </td>
                            <?php
                                }
                            ?>



                            <?php 
                                $sch++;
                                if ($weekday[0]=="Среда") {
                            ?>
                            <td> 
                                Зал:  <br>
                            <?= $club[0] ?> <br> <br>
                                Тренер: <br>
                            <?= $coach[0], ' ', $coach[1] ?><br> <br>
                                Вид спорта:<br>
                            <?= $sport[0] ?> <br> <br>
                            </td>
                            <?php
                                } else { ?>
                                <td>
                                </td>
                            <?php
                                }
                            ?>




                            <?php 
                                $sch++;
                                if ($weekday[0]=="Четверг") {
                            ?>
                            <td> 
                                Зал:  <br>
                            <?= $club[0] ?> <br> <br>
                                Тренер: <br>
                            <?= $coach[0], ' ', $coach[1] ?><br> <br>
                                Вид спорта:<br>
                            <?= $sport[0] ?> <br> <br>
                                </td>
                                <?php
                                    } else { ?>
                                    <td>
                                    </td>
                                <?php
                                    }
                                ?>



                            <?php 
                                $sch++;
                                if ($weekday[0]=="Пятница") {
                            ?>
                            <td> 
                                Зал:  <br>
                            <?= $club[0] ?> <br> <br>
                                Тренер: <br>
                            <?= $coach[0], ' ', $coach[1] ?><br> <br>
                                Вид спорта:<br>
                            <?= $sport[0] ?> <br> <br>
                            </td>
                            <?php
                                } else { ?>
                                <td>
                                </td>
                            <?php
                                }
                            ?>
                        </tr>
                        <?php 
                            }
                        ?>
                        
                    </table>
                    
                </div>  
                
            </div>
            
        </main>
        <footer>
            <div class="row">
                <div class="footer__first-row">
                    <a><img src="img/icon.png"></a>
                    <p>© 2021, фитнес-клуб STRONG. Все права защищены.</p>
                </div>
                <div class="footer__second-row">
                    <ul>
                        <li><a>Услуги</a></li>
                        <li><a>Клубы</a></li>
                        <li><a>Расписание</a></li>
                    </ul>
                </div>
                <div class="footer__third-row">
                    <ul>
                        <li><a>Тренеры</a></li>
                        <li><a>Акции</a></li>
                        <li><a>Контакты</a</li>
                    </ul>
                </div>
                <div class="footer__fourth-row">
                    <a href="https://instagram.com"><img src="img/inst.jpg"></a>
                    <a href="https://vk.com"><img src="img/vk.png"></a>
                    <a href="https://telegram.com"><img src="img/telegram.png"></a>
                    <div>
                        <p>г.Москва, ул. Земляной Вал, 33, м.Курская, ТРЦ "Атриум", 3 этаж</p>
                    </div>
                </div>
            </div>
            
        </footer>
        
    </body>
    <script src="JS/index.js"></script>
</html>