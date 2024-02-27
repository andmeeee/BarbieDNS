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
						<td class="registr1"align="center"><A HREF="vhod.php"> Войти </A></td>
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
			<table align="center" class="content" cellpadding="20" bgcolor="white">
            <td valing="top" width="600px" height="700px">
            <?php
                if (isset($_GET['id'])) {
                    $productId = $_GET['id'];
                    $conn = new PDO("mysql:host=localhost;dbname=DNS", $username="root", $password="");
                    $stmt = $conn->prepare("SELECT * FROM `items` WHERE `id` = :id");
                    $stmt->bindParam(':id', $productId);
                    $stmt->execute();
                    $productDetails = $stmt->fetch(PDO::FETCH_ASSOC); 
            }
            ?>
            <div style="margin-top: -220px">
            <h1 align="center"><?=$productDetails['name']?></h1>
			<div>
				<p class="p2" align="justify">
                <img class="product-image" src=<?=$productDetails['photo']?> width = "250" height = "250"/>
				 <?=$productDetails['contents'];?>
				</p>
			  </div>
              <div style="display: flex; justify-content: space-between;">
              <div>
                <h1 class="b11"><?=$productDetails['price']?> рублей</h1>
        </div><div>
            <br>
                <form method="POST" action="in-cart.php">
                    <input type="hidden" name="name" value="<?=$productDetails['name']?>">
                    <input type="hidden" name="photo" value="<?=$productDetails['photo']?>">
                    <input type="hidden" name="price" value="<?=$productDetails['price']?>">
                    <button type="submit" class="someshit">Добавить в корзину</button>
                </form>
        </div>
            </div>
            </div>
		    </td>
		    </table>

			<td class="rec" cellpadding="5" valign="top" align="center">
				<BR><BR><a href="search.php">Поиск по каталогу</a><BR><BR>
			<hr><BR><a href="cart.php">Корзина</a><BR><BR>

			<hr><BR><a href="https://www.dns-shop.ru"><img width="190" src="img\zel.jpg"></a><BR><BR>
			<hr><BR><a href="https://raidshadowlegends.com"><img width="190" src="img\raid.jpg"></a><BR><BR>
			<hr><BR><a href="https://www.minecraft.net"><img width="190" src="img\main.jpg"></a><BR><BR>
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

</body>

</html>