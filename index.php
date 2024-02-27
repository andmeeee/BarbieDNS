<!DOCTYPE html>
<html>
	
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>DNS – интернет магазин цифровой и бытовой техники.</title>
	<link rel="stylesheet" type="text/css" href="styles.css" />
	<link rel="shortcut icon" href="img/ico.png" type="image/png">
</head>

<body>

	<table class="header" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td align="center"><img class="logo" src="img\logo.jpg"></td>
			<td class="name" align="center"><H1> DNS – интернет магазин цифровой <br> и бытовой техники.</H1></td>
			<td width="200">
				<table class="registr" align="right">
					<tr>
						<td class="registr1" align="center"><A HREF="vhod.php"> Войти </A></td>
					</tr>
					<tr>
						<td class="registr2" align="center"><A HREF="reg.php"> Регистрация</A></td>
					</tr>
				</table>
			</td>
		</tr>
	</table> 

	<table class="urls" align="center" cellpadding="0">
		<tr>
			<td align="center"><a href="index.php">Главная</a></td>
			<td align="center"><a href="catalog.php">Каталог</a></td>
			<td align="center"><a href="contact.php">Контакты</a></td>
			<td align="center"><a href="service.php">Сервис</a></td>
		</tr>
	</table> 

	<table class="main" align="center" cellspacing="0" cellpadding="0">

		<td class="refs" align="center" cellpadding="15" valign="top">
			<BR><BR><a href="komp.php">Компьютеры</a><BR><BR><hr color="#d6d4d4"><BR>
			<a href="perf.php">Переферия</a><BR><BR><hr color="#d6d4d4"><BR>
			<a href="bit.php">Бытовая техника</a><BR><BR><hr color="#d6d4d4"><BR>
			<a href="another.php">Прочее</a><BR><BR><hr color="#d6d4d4">
		</td>
		<td>
			<table class="content" cellpadding="20" bgcolor="white">
				<td>
					<H2 align="center">DNS – один из лидеров рынка по продаже цифровой и бытовой техники в России</H2>
					<p>
					<?php
					$conn = new PDO("mysql:host=localhost;dbname=DNS", $username="root", $password="");

					$result = $conn->query("SELECT * FROM `items`");

					$products = array();
					while ($productInfo = $result->fetch(PDO::FETCH_ASSOC)) {
						$products[] = $productInfo;
					}

					
					?>
					<div class="container">
						<div class="slider">
							<div class="slider-line">
								<?foreach($products as $product):?>
									<img class="image-in-slider" src =<?=$product['photo']?> width = "300" height = "300">
								<?endforeach?>
							</div>
						</div>
						<div class="navigation">
							<button class="slider-prev">Назад</button>
							<button class="slider-next">Далее</button>
						</div>
					</div>
					<p align="justify"> <b>		DNS (ООО «ДНС Ритейл», англ. CSN Retail LLC)</b> — российская компания, владелец розничной сети, специализирующейся на продаже компьютерной, цифровой и бытовой техники, а также производитель компьютеров, в том числе ноутбуков, планшетов и смартфонов (сборочное производство). 
					<br>	По итогам 2019 года стала 6-й крупнейшей ритейл-компанией в России, в 2021 году — 22-й крупнейшей частной компанией России. В 2021 году сеть насчитывала более 2 тысяч магазинов. Штаб-квартира компании находится во Владивостоке.
					</p>
					<h3> Почему мы?</h3>
					<table class="table1" border="1" cellpadding="20" cellspacing="5">
						<tr>
							<td rowspan=2>1998 открытие 1 магазина</td>
							<td >2006 запуск своего производство</td>
							<td>2007 выход на рынок ДВ</td>
						</tr>
						<tr>
							<td>2009 экспансия на рынок России</td>
							<td>2011 запуск интенет дискаунтера</td>
						</tr>
						<tr>
							<td >2014 открытие магазина в СПБ</td>
							<td colspan="2">2020 крупнейший мазазин в России</td>
						</tr>
					</table>
					<h3>Для кого мы работаем:</h3>
					<ul type="disk">
						<li> Для клиентов
						<li> Наши клиенты – в центре всего, что мы делаем.
						<li> Доверие - главное. Мы строим долгосрочные отношения.
					</ul>
					<ol type="a">
						<li> Для партнёров
						<li> Прозрачность - основа совместного бизнеса.
						<li> Работаем, соблюдая этику бизнеса.
					</ol>
					<ul type="square">
						<li>Для сотрудников
						</li>
						<li> DNS - территория личной и коллективной самореализации.
							<ol type="1">
								<li>Мы - одна команда.
								</li>
								<li>Уважаем мнение и интересы людей.
								</li>
							</ol>
						<li> Ценим свободу, смелость и ответственность.
					</ul>
					<p>Наша цель изменить жизнь людей, сделав простым доступ к огромному количеству качественных и недорогих товаров, предоставляя лучший сервис. Вокруг нас люди, с которыми приятно работать и достигать амбициозных целей, мы стараемся нанимать единомышленников.	
				</td>
			</table>

			<td class="rec" cellpadding="5" valign="top" align="center">
				<BR>
				<BR><a href="search.php">Поиск по каталогу</a><BR><BR>
			<hr><BR><a href="cart.php">Корзина</a><BR><BR>
			<hr><BR><a href="https://www.dns-shop.ru"><img width="190" src="img\zel.jpg"></a><BR><BR>
			<hr><BR><a href="https://raidshadowlegends.com"><img width="190" src="img\raid.jpg"></a><BR><BR>
			<hr><BR><a href="https://www.minecraft.net"><img width="190" src="img\main.jpg"></a>
			</td>
		</table>

	<table class="footer" cellpadding="0" cellspacing="0" align="center">
		<tr>	
			<td align="center"><img class="logo" src="img\logo.jpg"></td>
			<td align="center">
				<h3>Контакты</h3>
				<h3>Тайчер А.Б.</h3>
				<h4>© 2023 — Все права защищены</h4>
			</td>
		</tr>
	</table> 
	<script src="script.js"></script>
</body>

</html>