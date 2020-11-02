<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Sanpaku Eyes</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:300,400,700" />
	<link rel="stylesheet" type="text/css" href="css/fonts.css" />
	<link rel="stylesheet" type="text/css" href="fonts/mont/stylesheet.css" />

	<script type="text/javascript" src="js/jquery.pagepiling.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/jquery.pagepiling.css" />
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/examples.css" />

	<link rel="shortcut icon" href="img/icon.png" type="image/png">

</head>
<body>
	<ul id="menu">
		<li data-menuanchor="page1" class="active"><a href="#page1">Приветствие</a></li>
		<li data-menuanchor="page2"><a href="#page2">Услуги и стоимость</a></li>
		<li data-menuanchor="page3"><a href="#page3">Записаться</a></li>
	</ul>
	<div id="pagepiling">
	    <div class="section" id="section1">
			<div class="block">
				<div class="img1"></div>
				<div class="img2"></div>
				<div class="img3"></div>
				<div class="img4"></div>
				<div class="img5"></div>
				<div class="text">
					<p>Услуги фотографа</p>
					<h2>"Sanpaku Eyes"</h2>
					<p>Фото и видеосъемка</p>
					<p>Моментальное фото</p>
					<p>И другое!</p>
				</div>
			</div>
			<form action="https://www.instagram.com/ph.oto3862/" target="_blank">
				<button id="inst"></button>
			</form>
	    </div>
	    <div class="section" id="section3">
	    	<div class="intro">
				<div class="block">
					<h1>Стоимость услуг фотографа</h1>
					<div class="photosessions">
						<h2 id="photosessionsInfo">Фотосессии</h2>
						<div class="photosessionsOnStreet">
							<h3>Фотосессия на улице - 650 руб/час</h3>
							<p>Заранее договариваемся с вами о месте, времени встречи~ <br/>В зависимости от местоположения цена может увеличиваться~</p>
						</div>
						<div class="photosessionsInStudio">
							<h3>Фотосессия на студии - 2200 руб/час</h3>
							<p>Цена вместе со стоимостью аренды студии, подбор которой осуществляется нами, или-же на ваше усмотрение~<br/>
								В течение суток после фотосессии вы получаете архив с фотографиями~<br/>
								Так-же есть возможность распечатывания фотографий, которые вам понравились, получить вы их сможете — по договоренности~
							</p>
						</div>
					</div>
					<div class="photomasterOnHoliday">
						<h2 id="holidaysInfo">Фотограф на праздники</h2>
						<h3>100 рублей/фото | 1000 рублей/архив</h3>
						<p>Выезд в банкетный зал с оборудованием, фотографирование и мгновенная фотопечать на месте.<br/>
						Возможен выезд в район.</p>
					</div>
				</div>
				<form action="https://www.instagram.com/ph.oto3862/" target="_blank">
					<button id="inst"></button>
				</form>
			</div>
		</div>
	    <div class="section" id="section4">
	    	<div class="intro">
				<h1>Тут вы можете оставить заявку~</h1>
				<div class="block">
					<div class="name-number">
					<script type="text/javascript">
						$(document).ready(function(){
							$("#send").click(function(){
								$.ajax({
									type: 'POST',
									url: 's.php',
									success: function(data){}
								});
							});
						});
					</script>
						<form method="POST" " autocomplete=off >
							<div class="name">
								<p class="text-name">Имя</p>
								<input type="text" name="write-name" id="write-name">
							</div>
							<div class="number">
								<p class="text-number">Номер телефона</p>
								<input type="number" name="write-phone-number" id="write-phone-number">
							</div>
						</form>
					</div>
					<div class="radio-buttons">
						<form method="POST" autocomplete=off>
							<p id="areaText">Район проживания</p>
							<p><input type="radio" name="area" id="area1" value="are1">
								<label for="area1">Центральный</label>
							<input type="radio" name="area" id="area2" value="are2">
								<label for="area2">Ленинский</label>
							<input type="radio" name="area" id="area3" value="are3">
								<label for="area3">Октябрьский</label></p>
							<p><input type="radio" name="area" id="area4" value="are4">
								<label for="area4" style="margin-right:25px;">Кировский</label>
							<input type="radio" name="area" id="area5" value="are5">
								<label for="area5" style="margin-right:5px;">Советский</label>
							<input type="radio" name="area" id="anotherArea" value="areAn">
								<label for="anotherArea">Другое</label></p>
							<button type="button" name="send" id="send">Отправить</button>
						</form>
					</div>

				</div>
				<form action="https://www.instagram.com/ph.oto3862/" target="_blank">
					<button id="inst"></button>
				</form>
			</div>
	    </div>
	</div>
	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>
