<?php
    require_once 'connect.php';
?>

<html>
    <head>
        <title>
            Тренеры
        </title>
        <link rel="stylesheet" href="CSS/coaches.css">
        <link rel="stylesheet" href="CSS/dispmenu.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        
        
    </head>
    <body>
        <header>
            <nav class="menu">
                <div class = "menu__main">
                    <ul class = "menu__main__table">
                    <li class="logo"><a href="index.php"><img src="img/icon.png"></a></li>
                    <li class="text"><a href="news.php">НОВОСТИ</a></li>
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
            <div class="coaches">
                <div class="coaches__title">
                    <p>Тренеры фитнес-центра STRONG</p>
                </div>
                <div class="coaches__list">
                    <?php
                        $coaches = mysqli_query($connect, "SELECT * FROM `coaches`");
                        $coaches = mysqli_fetch_all($coaches);
                        foreach($coaches as $coach){
                    ?>
                    <div class="coaches__list__item">
                        <div class="coaches__list__item__img">
                            <img src="<?= $coach[4] ?>">
                        </div>
                        <div class="coaches__list__item__name">
                            <?= $coach[2] ?> <?= $coach[1] ?> <?= $coach[3] ?>
                        </div>
                        <div class="coaches__list__item__desc">
                            <p><?= $coach[5] ?></p>
                        </div>
                        <div class="coaches__list__item__inst">
                            <a href="https://instagram.com"><img src="img/inst.png"></a>
                        </div>
                    </div>
                        <?php
                            }
                        ?>
                    
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