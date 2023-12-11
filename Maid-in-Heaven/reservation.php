<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Резевация</title>
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
					<a href="index.php #foodmenu">МЕНЮ</a>
				</li>
				<li>
					<a href="reservation.html">РЕЗЕРВАЦИЯ</a>
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
	<reservation id="reservation" class="reservation">
		<img src="img/place.png">
		<div style="height: 5px; background-color: #E8A24B;"></div>	
	</reservation>
	<footer id="footer" class="footer">
		<div class="info"> Контакты:<br> Адрес: ул. Пушкина, 123<br> Телефон: +7 (XXX) XXX-XX-XX<br> Электронная почта: madeinheaven@mail.ru<br> График работы: Пн-Пт: 10:00 - 22:00, Сб-Вс: 11:00 - 23:00</div>
		<div class="social">Социальные сети:<br> - Facebook<br> - Instagram<br> - Twitter (X)</div>
		<div class="conf">Политика конфиденциальности | Авторские права © 2023 "Maid in Heaven" Кафе</div>
	</footer>
	<div style="height: 5px; background-color: #E8A24B;"></div>
	<script defer src="js/index.js"></script>
</body>
</html>