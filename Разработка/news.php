<?php
    require_once 'connect.php';
    ini_set('display_errors', 'off');
error_reporting(0);
?>
<html>

<head>
    <title>
        Фитнес-центр
    </title>
    
    <link rel="stylesheet" href="CSS/news.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS/dispmenu.css">
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
        
        <div class="services">
        	<div class="services__right">
                <div class="fitness-features">
                    <div class="fitness-features__title">
                        
                    </div>
                    <div class="fitness-features__list">
                        <div class="fitness-features__item">
                            <h2>Все о спорте</h2>
                            <div class="fitness-features__item__description">
                                На данной странице мы будем размещать всю информацию о предстоящих событиях в наших фитнес-клубах. Будьте в курсе всех событий вместе с нами! 
                            </div>
                        </div>
                        
                    </div>

                </div>
            </div>
            <div class="services__left">
                <div class="fitness-programs">
                    <div class="fitness-programs__title">
                        Новостная страница спорта
                    </div>
                    <div class="fitness-programs__list">
                        <div class="fitness-programs__item">
                            <div class="fitness-programs__item__img">
                                <img src="img/run.jpg">
                            </div>
                            <div class="fitness-programs__item__title">
                                Марафон
                            </div>
                            <div class="fitness-programs__item__desc">
                            <p>Приглашаем всех клиентов фитнес-центра "Srtong" принять участие в ежегодном марафоне, который пройдет 5 января на стадионе "Москвич" в 09:00 по московскому времени. Количество участников не ограничено, победители нашего марафона получат заслуженные призы. Все, что необходимо иметь при себе, это паспорт и абонемент в зал. </p>
                            </div>
                        </div>
                        <div class="fitness-programs__item">
                            <div class="fitness-programs__item__img">
                                <img src="img/qr.jpg">
                            </div>
                            <div class="fitness-programs__item__title">
                                QR-коды    
                            </div>
                            <div class="fitness-programs__item__desc">
                                <p>
                                   Спешим вам сообщить, что с 25 декабря 2021 года без соответсвующего QR-кода клиенты не смогут посещать фитнес-клубы. Мы даем возможность посетителям заранее предоставить сертефикаты с госуслуг. Информация занесена в базу, она читается с клубных карт и браслетов. Это позволяет экономить время и комфортно проходить в клуб, как это было до введения QR-кодов. Абонементы клиентов, у которых нет QR-кодов о вакцинации, будут "заморожены", то есть временно приостановлены до снятия мер ограничей. Спасибо за понимание! 
                                </p>
                            </div>
                        </div>
                        <div class="fitness-programs__item">
                            <div class="fitness-programs__item__img">
                                <img src="img/fitness.jpg">
                            </div>
                            <div class="fitness-programs__item__title">
                                Первые шаги в фитнесе    
                            </div>
                            <div class="fitness-programs__item__desc">
                                <p>
                                    Фитнес будет безопасным, только если у человека есть полное осознание того, что, во-первых, его тело уникально, а значит, не стоит равняться на других. Во-вторых, оно хоть и очень пластично, но в части адаптации к любым переменам крайне инертно, то есть меняется довольно медленно. Поэтому, прежде чем начать заниматься фитнесом на все сто, человеку необходимо подготовить свое тело к такого рода нагрузкам. Это касается не только силовых и функциональных классов, но и элементарной двигательной активности, ведь с годами эластичность связок и мобильность суставов снижаются.
                                </p>
                            </div>
                        </div>
                        

                    </div>
                </div>
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