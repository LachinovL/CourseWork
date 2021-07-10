<?php
    require_once 'connect.php';
    ini_set('display_errors', 'off');
error_reporting(0);
?>
<html>
    <head>
        <title>
            Личный кабинет
        </title>
        <link rel="stylesheet" href="CSS/personacc.css">
        <link rel="stylesheet" href="CSS/shedule.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/dispmenu.css">
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        
    </head>
    <body>
        <header>
            <nav class="menu">
                <div class = "menu__main">
                    <ul class = "menu__main__table">
                    <li class="logo"><a href="index.php"><img src="img/icon.png"></a></li>
                    <li class="text"><a href="services.html">УСЛУГИ</a></li>
                    <li class="text"><a href="index.php#club">КЛУБЫ</a></li>
                    <li class="text"><a href="shedule.php">РАСПИСАНИЕ</a></li>
                    <li class="text"><a href="coaches.php">ТРЕНЕРЫ</a></li>
                    <li class="text"><a href="contacts.html">КОНТАКТЫ</a></li>
                    <li class="text"><a href="check.php">ЛИЧНЫЙ КАБИНЕТ</a></li>
                    </ul>	
                </div>
                <div class="disp_menu" id="app">
                    <transition name="fade" mode="out-in"> 
                        <i class="material-icons menu" v-if="!show" @click="show = !show" key="menu">menu</i>
                        <i class="material-icons clear" v-else @click="show = !show" key="clear">clear</i>
                    </transition>
                    <transition class="fade">
                        <ul v-if="show">
                            <li v-for="item in items"><a href="services.html">УСЛУГИ</a></li>
                            <li v-for="item in items"><a href="index.php#club">КЛУБЫ</a></li>
                            <li v-for="item in items"><a href="shedule.php">РАСПИСАНИЕ</a></li>
                            <li v-for="item in items"><a href="coaches.php">ТРЕНЕРЫ</a></li>
                            <li v-for="item in items"><a href="contacts.html">КОНТАКТЫ</a></li>
                        </ul>
                    </transition>
                    </div>
            </nav>
        </header>
        <main>
            <div class="shedule">
                <div class="shedule__title">
                    <div class="shedule__title__name">
                        <p>ИНДИВИДУАЛЬНОЕ РАСПИСАНИЕ</p>
                    </div>  
                    <div class = "shedule__title__exit">
                        <a href="exit.php">Выход</a>
                    </div>        
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
                            $user = $_COOKIE['user'];
                            $times = mysqli_query($connect, "SELECT * FROM `time` ");
                            $times = mysqli_fetch_all($times);
                            foreach ($times as $time) {
                            $shedules = mysqli_query($connect, "SELECT * FROM `individ_shedule` WHERE `id_time`=$time[0]
                            AND `id_user`= '$user'");
                            $shedules = mysqli_fetch_all($shedules);
                            foreach($shedules as $shedule) 
                            $weekdays = mysqli_query($connect, "SELECT `name` FROM `weekday` WHERE `id` = $shedule[2] ");
                            $weekdays = mysqli_fetch_all($weekdays);
                            foreach($weekdays as $weekday)
                            $coaches = mysqli_query($connect, "SELECT `name`, `surname` FROM `coaches` WHERE `id` = $shedule[4] ");
                            $coaches = mysqli_fetch_all($coaches);
                            foreach($coaches as $coach)
                            $clubs = mysqli_query($connect, "SELECT `name` FROM `clubs` WHERE `id` = $shedule[5] ");
                            $clubs = mysqli_fetch_all($clubs);
                            foreach($clubs as $club)
                            $sports = mysqli_query($connect, "SELECT `name` FROM `sport` WHERE `id` = $shedule[6] ");
                            $sports = mysqli_fetch_all($sports);
                            foreach($sports as $sport)
                        ?>
                        <tr>
                            <td><?= $time[1] ?></th>
                            <?php 
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
                                <td></td>
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
                                <td></td>
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
                                <td></td>
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
                                <?php
                                    } else { ?>
                                    <td></td>
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
                                <td></td>
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
    <script src="JS/script.js"></script>
</html>