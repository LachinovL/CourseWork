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
        <link rel="stylesheet" type="text/css" href="CSS/newsadm.css">
        <link rel="stylesheet" type="text/css" href="CSS/style.css">
        <link rel="stylesheet" href="CSS/shedule.css">
        <link rel="stylesheet" type="text/css" href="CSS/online.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/dispmenu.css">
    </head>
    <body>
           <div id="app">
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
                <div class="disp_menu">
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
                        <p>Добавление новостей</p>
                    </div>          
                </div>
                <form name="test" method="post" action="input1.php">
                  <p><b>Введите заголовок новости</b><br>
                   <input type="text" size="40">
                  </p>
                  <p><b>Введите путь к картинке</b><br>
                   <input type="text" size="40">
                  </p>
                  <p><b>Введите описание новости</b><br>
                   <textarea name="comment" cols="100" rows="3"></textarea></p>
                 </form>
                   <button type="submit" class="btn btn-success">Отправить</button>
                </form>
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
                        <li><a>Контакты</a></li>
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
</html>