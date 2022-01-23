<?php
    require_once 'connect.php';
    ini_set('display_errors', 'off');
error_reporting(0);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Фитнес-центр</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<link rel="stylesheet" type="text/css" href="CSS/online.css">
	<meta charset="utf-8">
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
        <div class="modal" v-if="showModal">
            <form name="test" method="post">
			  <p><b>Выберите зал</b><br>
			    <select id="selecttheme">
				    <option value="Mar">Афимолл</option>
				    <option value="Gre">Европейский</option>
				    <option value="Yel">Атриум</option>
				</select>
			  </p>
			  <p><b>Выберите тренера</b><br>
			    <select id="selecttheme">
				    <option value="Mar">Юрьев А.В.</option>
				    <option value="Gre">Соловьев Ю.В.</option>
				    <option value="Yel">Воронцов Г.А.</option>
				    <option value="Yel">Смирнов Д.А.</option>
				    <option value="Yel">Смолов В.В.</option>
				    <option value="Yel">Мишин Г.А.</option>
				    <option value="Yel">Гаджиев Р.Р.</option>
				</select>
			  </p>
			  <p><b>Выберите вид спорта</b><br>
			   <select id="selecttheme">
				    <option value="Mar">Смешанные единоборства</option>
				    <option value="Gre">Йога</option>
				    <option value="Yel">Волейбол</option>
				    <option value="Yel">Баскетбол</option>
				    <option value="Yel">Тренажерный зал</option>
				    <option value="Yel">Плавание</option>
				</select>
			  </p>
			  <p><b>Выберите день недели</b><br>
			   <select id="selecttheme">
				    <option value="Mar">Понедельник</option>
				    <option value="Gre">Вторник</option>
				    <option value="Yel">Среда</option>
				    <option value="Yel">Четверг</option>
				    <option value="Yel">Пятница</option>
				</select>
			  </p>
			  <p><b>Выберите время</b><br>
			   <select id="selecttheme">
				    <option value="Mar">9:00</option>
				    <option value="Gre">10:00</option>
				    <option value="Yel">11:00</option>
				    <option value="Yel">12:00</option>
				    <option value="Yel">13:00</option>
				    <option value="Yel">14:00</option>
				    <option value="Yel">15:00</option>
				    <option value="Yel">16:00</option>
				    <option value="Yel">17:00</option>
				    <option value="Yel">18:00</option>
				</select>
			  </p>
			   <button type="submit" class="btn btn-success">Записаться</button>
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
<script src="JS/index.js"></script>


</html>