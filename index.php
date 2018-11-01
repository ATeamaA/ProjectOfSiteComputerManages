<?
	require "db/connection.php";
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
			<a href="index.php"><img src="img/logo/logo.png" width="200px" alt="На главную"></a>
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
				<a href="*">Контакты</a>
			</div>
			<div class="right_nav">
				<a href="*"><img src="img/logo/icons8-корзина-30.png" alt="Корзина"><p>Корзина</p></a>
				<a href="signIn.php"><img src="img/logo/icons8-мужчина-пользователь-26.png" alt="Войти"><p>Вход</p></a>
				<a href="signUp.php"><img src="img/logo/icons8-добавить-пользователя-filled-50.png" alt="Регистрация"><p>Регистрация</p></a>
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
			echo '<div class="list">\
							<h4>Категории</h4>';
			foreach($arrayOfData[0] as $value)
			{
				echo '<div class="list_push">
								<a href="*">'.$value.'</a><br>
							</div>';
			}
			echo '</div>';
		?>
		<div class="content">
			<?
				for($i = 0; $i < count($arrayOfData[0]); $i++)
				{
					echo '<div class="window_one">
									<img src="'.$arrayOfData[1][$i].'" alt="'.$arrayOfData[0][$i].'" height="250px" width="190px">
								</div>';
				}
			?>
		</div>
		<div class="banner">
			<img src="img/logo/banner.jpg" alt="Спецпредложение">
		</div>
	</article>
	<footer>
		<div class="info">
			<div class="info_one">
				<h4>Новость</h4>
				<p>Описание новости</p>
			</div>
			<div class="info_two">
				<h4>Новость</h4>
				<p>Описание новости</p>
			</div>
			<div class="info_three">
				<h4>Новость</h4>
				<p>Описание новости</p>
			</div>
			<div class="info_four">
				<h4>Новость</h4>
				<p>Описание новости</p>
			</div>
		</div>
		<div class="creators">
			<h5>2018 - Ишкинин Г.Г. & Тимохин А.М. 15П-2</h5>
		</div>
	</footer>
</body>
</html>
