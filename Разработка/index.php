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
		<div class="main">
			<div class="main__window" id="app">
			
				<div class = "main__window__left">
					<img src="img/back-4.jpg">
				</div>
				<div class="main__window__right-one">
					<p>Онлайн-запись</p>
					<a href="onlinecheck.php"><img src="img/main_win_right-one.jpg"></a>
				</div>
				<div class="main__window__right-two">
					<p>Единоборства</p>
					<a href="singlecomb.html"><img src="img/boevisk.jpeg"></a> 
				</div>
				<div class="main__window__right-three">
					<p>Тренеры</p>
					<a href="coaches.php"><img src="img/main_win_right-three.jpg"></a>
				</div>
				<div class="main__window__right-four">
					<p>Расписание</p>
					<a href="shedule.php"><img src="img/main_win_right-four.jpg"></a>
				</div>
			</div>
			<div class="main__info">
				<p class="title">Фитнес-центры STRONG</p>
				<p class="information">Сеть фитнес-клубов премиум класса Strong — лидер индустрии в сегментах «люкс» и «премиум». 
					Быть членом клуба Strong — значит, получить доступ к неограниченным возможностям фитнеса премиум класса:
					посещение групповых программ, тренажерного зала, бассейна, SPA-салонов, а также участию в светских и спортивных
					мероприятиях, тренировках на свежем воздухе и даже путешествиях.</p>
				<img src="img/image_info.jpg">
			</div>
			<div class="main__club" id="club">
				<div class="main__club__title">
				<p>НАШИ КЛУБЫ</p>
				</div>
				<div class="main__club-info">
					<div class="main__club__list">
					<?php 
						$clubs = mysqli_query($connect, "SELECT * FROM `clubs`");
						$clubs = mysqli_fetch_all($clubs);
						foreach($clubs as $club){
					?>
					<div class="main__club-info__item">
						<p><?=  $club[1] ?></p>
						<p><?= $club[2] ?></p>
							<p><?= $club[3] ?></p>
						<p><?=  $club[4] ?></p>
					</div>
					<?php
						}
					?>
					</div>
				</div>
			</div>
			<div class="main__foot">
				<p style="top: 35%; left: 25%;">Окунитесь в мир</p>
				<p style="font-weight: bold; top:55%; left:35%;">STRONG</p>
				
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