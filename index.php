<?
	require "db/connection.php";
	$dataOfWork[0] = getFromAttribute($dataOfWork[0], 'logo', 'dataBoutStation');
	$dataOfWork[1] = getFromAttribute($dataOfWork[1], 'WorkDays', 'dataBoutStation');
	$dataOfWork[2] = getFromAttribute($dataOfWork[2], 'phoneNumber', 'dataBoutStation');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Shop</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header>
		<div class="logo">
			<a href="index.php"><? echo '<img src="'.$dataOfWork[0][0].'" width="200px" alt="На главную">'; ?></a>
		</div>
		<div class="search">
			<p>
				<input class="search_string" type="text" name="search_query" placeholder="Поиск по сайту">
				<input class="search_button" type="submit" value="Найти">
			</p>
		</div>
		<nav>
			<div class="left_nav">
				<a href="index.php">Главная</a>
				<a href="conversation.php">Обратная связь</a>
				<a href="favourites.php">Избранное</a>
				<?
					if($_SESSION['logged_user'][2] == "admin")
					{
						echo '<a class="admin" href="admin.php">Админка</a>';
					}
				?>
			</div>
			<div class="right_nav">
				<!-- <a href="admin.php">
						 <img src="'.$dataOfWork[0][0].'" alt="Корзина"><p>Корзина</p>
				</a> -->

				<?
				if(isset($_SESSION['logged_user']))
				{
					echo '<a><img src="img/logo/icons8-мужчина-пользователь-26.png" alt="User"><p>'.$_SESSION['logged_user'][0].'</p></a>';
				}
				else
				{
					echo '<a href="signIn.php"><img src="img/logo/icons8-мужчина-пользователь-26.png" alt="Войти"><p>Вход</p></a>';
				}
				if(isset($_SESSION['logged_user']))
				{
					echo '<a href="logOut.php"><img src="img/logo/exit.png" alt="Exit"><p>Выход</p></a>';
				}
				else
				{
					echo '<a href="signUp.php"><img src="img/logo/icons8-добавить-пользователя-filled-50.png" alt="Регистрация"><p>Регистрация</p></a>';
				}
				?>
				<a href="*"></a>
				<a href="*"></a>
				<a href="*"></a>
			</div>
		</nav>
	</header>
	<article>
		<?
			$arrayOfData[0] = getFromAttribute($arrayOfData[0], 'type', 'Types');
			$arrayOfData[1] = getFromAttribute($arrayOfData[1], 'img', 'Types');
			echo '<div class="list">
							<h4>Категории</h4>';
			foreach($arrayOfData[0] as $value)
			{
				echo '<div class="list_push">
								<a href="index.php?type='.$value.'">'.$value.'</a><br>
							</div>';
			}
			echo '</div>';
		?>
		<div class="content">
			<?
				$arrayOfProduct[0] = getFromAttribute($arrayOfProduct[0], 'title', 'Product');
				$arrayOfProduct[1] = getFromAttribute($arrayOfProduct[1], 'image', 'Product');
				$arrayOfProduct[2] = getFromAttribute($arrayOfProduct[2], 'description', 'Product');
				$arrayOfProduct[3] = getFromAttribute($arrayOfProduct[3], 'price', 'Product');
				$arrayOfProduct[4] = getFromAttribute($arrayOfProduct[4], 'producer', 'Product');
				$arrayOfProduct[5] = getFromAttribute($arrayOfProduct[5], 'type', 'Product');
				$arrayOfProduct[6] = getFromAttribute($arrayOfProduct[6], 'id', 'Product');
				if(isset($_GET['type']))
				{
					for($i = 0; $i < count($arrayOfProduct[0]); $i++)
					{
						if($_GET['type'] == $arrayOfProduct[5][$i])
						{
							showProducts($arrayOfProduct[0][$i], $arrayOfProduct[1][$i], $arrayOfProduct[2][$i], $arrayOfProduct[3][$i], $arrayOfProduct[4][$i],  $arrayOfProduct[6][$i]);
						}
					}
				}
				else if(isset($_GET['id']))
				{
					echo '<div class="window_product">
			            <h2 style="margin: 10px">'.$arrayOfProduct[0][$_GET['id']].'</h2>
			            <div style="display: inline-block;vertical-align: top">
			            	<img style="margin: 10px; display: block" src= "'.$arrayOfProduct[1][$_GET['id']].'" width: "100px" height="100px">
			            	<img style="margin: 10px; display: block" src= "'.$arrayOfProduct[1][$_GET['id']].'" width: "100px" height="100px">
			            </div>
			            <div class="window_categories_text">
			              	<p align="justify" style="margin: 10px">'.$arrayOfProduct[2][$_GET['id']].'</p>
			            
			            	<p align="justify" style="margin: 10px">Цена - '.$arrayOfProduct[3][$_GET['id']].' ; Производство - '.$arrayOfProduct[4][$_GET['id']].'</p>
			            </div>
			            <!--
			            	<div class="like_btn">
			            		<a href="*">В избранное <img width="30px" src="img/logo/like.png"></a>
			           		</div>
			           	-->
			            <form class="like_btn">
						  <button><img src="img/logo/like.png"></button>
						</form>
			          </div>';
				}
				else
				{
					for($i = 0; $i < count($arrayOfData[0]); $i++)
					{
						echo '<div class="window_one">
										<img src="'.$arrayOfData[1][$i].'" alt="'.$arrayOfData[0][$i].'" height="190px" width="190px">
										<a href="index.php?type='.$arrayOfData[0][$i].'" class="price_product">цена XXX Р</a>
									</div>';
					}
				}
				$mysqli->close();
			?>
		</div>
		<div class="banner">
			<img src="img/logo/banner.jpg" alt="Спецпредложение">
		</div>
	</article>
	<footer>
		<div class="info">
			<div class="info_small">
				<h4>Новость</h4>
				<p>Описание новости</p>
			</div>
			<div class="info_small">
				<h4>Новость</h4>
				<p>Описание новости</p>
			</div>
			<div class="info_small">
				<h4>Новость</h4>
				<p>Описание новости</p>
			</div>
			<div class="info_small">
				<h4>Новость</h4>
				<p>Описание новости</p>
			</div>
		</div>
		<div class="creators">
			<h5>2018 - Ишкинин Г.Г. & Тимохин А.М. 15П-2</h5>
			<h6><? echo $dataOfWork[1][0]?></h6>
			<h6>Телефон для связи: <? echo $dataOfWork[2][0]?></h6>
		</div>
	</footer>
</body>
</html>
