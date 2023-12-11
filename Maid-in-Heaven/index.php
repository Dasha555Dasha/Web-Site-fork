<?php

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once 'config/connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Maid in Heaven</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Aguafina+Script&family=Alegreya:ital@0;1&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<header id="header" class="header">
		<div style="height: 35px; background-color: #3B2317;"></div>
		<div style="height: 5px; background-color: #E8A24B;"></div>	
		<div class="nav">
			<div class="logo">Maid in Heaven</div>
			<ul class="menu">
				<li>
					<a href="index.php">ГЛАВНАЯ</a>
				</li>
				<li>
					<a href="#foodmenu">МЕНЮ</a>
				</li>
				<li>
					<a href="reservation.php">РЕЗЕРВАЦИЯ</a>
				</li>
				<li>
					<a href="#">ОНЛАЙН-ЗАКАЗ</a>
				</li>
				<li>
					<button id="open_modal_btn">ВХОД</button>
				</li>
				<li>
					<button id="open_register_modal_btn">РЕГИСТРАЦИЯ</button>
				</li>
			</ul>
		</div>
		<div style="height: 5px; background-color: #E8A24B;"></div>
		<div class="main">
			<div class="welcome">ДОБРО ПОЖАЛОВАТЬ В КАФЕ</div>
			<div class="title">Maid in Heaven</div>
		</div>
		<div style="height: 5px; background-color: #E8A24B;"></div>	
		<div class="modal" id="my_modal">
			<div class="modal_box">
				<svg
  xmlns="http://www.w3.org/2000/svg"
  width="24"
  height="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
  class="feather feather-x close-icon"
  onclick="closeModal()"
>
  <line x1="18" y1="6" x2="6" y2="18"></line>
  <line x1="6" y1="6" x2="18" y2="18"></line>
</svg>

				<div class="logo_modal">Maid in Heaven</div>
				<div class="title_modal">Вход</div>
				<form>
					<input type="email" placeholder=" Электронная почта">
					<input type="password" placeholder=" Пароль"><br>
					<div class="form-group">
						<a href="#">Забыли пароль?</a>
					</div>
					<button class="log_in">Войти</button>
					<div class="log_in-registr" data-target="register_modal">Не создавали аккаунт? Регистрация</div>
				</form>
			</div>
		</div>
		<div class="modal" id="register_modal">
			<div class="modal_box">
				<svg
  xmlns="http://www.w3.org/2000/svg"
  width="24"
  height="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
  class="feather feather-x close-icon"
  onclick="closeModal()"
>
  <line x1="18" y1="6" x2="6" y2="18"></line>
  <line x1="6" y1="6" x2="18" y2="18"></line>
</svg>
				<div class="logo_modal">Maid in Heaven</div>
				<div class="title_modal">Регистрация</div>
				<form>
					<input type="text" placeholder=" Имя">
					<input type="text" placeholder=" Фамилия">
					<input type="number" placeholder=" Номер телефона">
					<input type="email" placeholder=" Электронная почта">
					<input type="password" placeholder=" Пароль"><br>
					<div class="form-group">
						<a href="#">Забыли пароль?</a>
					</div>
					<button class="registration">Зарегистрироваться</button>
					<div class="registr-log_in" data-target="my_modal">Уже регистрировались? Войти</div>
				</form>
			</div>
		</div>
	</header>

	<div id="foodmenu" class="foodmenu">
		<div class="container">
			<div class="all_position_button">
			<h1>Наборы</h1>
			<button id="open_add_modal_btn" style="margin-bottom: 30px; background: none; border: none; font-size: 30px; color: #E8A24B;">Добавить новую позицию</button>
			</div>
				<?php

            /*
             * Делаем выборку всех строк из таблицы "products"
             */

            $products = mysqli_query($connect, "SELECT * FROM `products`");

            /*
             * Преобразовываем полученные данные в нормальный массив
             */

            $products = mysqli_fetch_all($products);

            /*
             * Перебираем массив и рендерим HTML с данными из массива
             * Ключ 0 - id
             * Ключ 1 - title
             * Ключ 2 - price
             * Ключ 3 - description
             */

            foreach ($products as $product) {
                ?>
<div class="modal" id="add_modal">
	<div class="modal_box">
				<svg
  xmlns="http://www.w3.org/2000/svg"
  width="24"
  height="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
  class="feather feather-x close-icon"
  onclick="closeModal()"
>
  <line x1="18" y1="6" x2="6" y2="18"></line>
  <line x1="6" y1="6" x2="18" y2="18"></line>
</svg>
				<div class="logo_modal">Maid in Heaven</div>
				<div class="title_modal">Новая позиция</div>
		<form action="vendor/create.php" method="post">
        <p>Название</p>
        <input type="text" name="title">
        <p>Название зображение</p>
    		<input type="text" name="img" style="border: none;
    text-align: center;
    color: #E8A24B;
    background: none;
    outline: none;
    border-bottom: 2px solid #78341D;
    padding: 0;">
        <p>Описание</p>
        <textarea name="description"></textarea>
        <p>Цена</p>
        <input type="number" name="price"> <br> <br>
        <button type="submit" style="background: none; border: none; font-size: 30px; color: #E8A24B;">Добавить новую позицию
    </form>
	</div>
</div>
<?php
            }
        ?>
			<div class="line_php" style="display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: space-between;
    padding-top: 35px;">
				<?php

            /*
             * Делаем выборку всех строк из таблицы "product"
             */

            $products = mysqli_query($connect, "SELECT * FROM `products`");

            /*
             * Преобразовываем полученные данные в нормальный массив
             */

            $products = mysqli_fetch_all($products);

            /*
             * Перебираем массив и рендерим HTML с данными из массива
             * Ключ 0 - id
             * Ключ 1 - title
             * Ключ 2 - title
             * Ключ 4 - price
             * Ключ 3 - description
             */

            foreach ($products as $product) {
                ?>
				<button class="add_positon_php" style="width: 300px;
															    min-height: 500px;
															    display: inline-block;
															    border-radius: 20px;
															    border: 3px solid #78341D;
															    justify-content: space-between;
															    transition: color 0.2s linear;
															    margin-bottom: 35px;
															    background: #FFF;">
					<div style="color: #E8A24B; font-size: 40px;" class="name_php"><?= $product[1] ?></div>
					<img src="/img/<?= $product[2] ?>.png" class="img_php" style="padding: 30px 15px;">
					<div style="color: #E8A24B; font-size: 30px;" class="description	_php"><?= $product[3] ?></div>
					<div style="color: #E8A24B; font-size: 40px;" class="about_php"><?= $product[4] ?>₽</div>
					<div class="utility_btns">
						<td><a style="color: #E8A24B; text-decoration: none; font-size: 25px; padding: 10px;" href="update.php?id=<?= $product[0] ?>">Обновить</a></td>
	          <td><a style="color: #78341D; text-decoration: none; font-size: 25px; padding: 10px;" href="vendor/delete.php?id=<?= $product[0] ?>">Удалить</a></td>
          </div>
				</button>
				<?php
            }
        ?>
		</div>
	</div>
	<div style="height: 5px; background-color: #E8A24B;"></div>		
	<footer id="footer" class="footer">
		<div class="info"> Контакты:<br> Адрес: ул. Пушкина, 123<br> Телефон: +7 (XXX) XXX-XX-XX<br> Электронная почта: minheaven@mail.ru<br> График работы: Пн-Пт: 10:00 - 22:00, Сб-Вс: 11:00 - 23:00</div>
		<div class="social">Социальные сети:<br> - Facebook<br> - Instagram<br> - Twitter (X)</div>
		<div class="conf">Политика конфиденциальности | Авторские права © 2023 "Maid in Heaven" Кафе</div>
	</footer>
	<div style="height: 5px; background-color: #E8A24B;"></div>

	<script defer src="js/index.js"></script>
</body>
</html>