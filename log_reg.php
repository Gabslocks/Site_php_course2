﻿<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Домашняя фильмотека. Логин</title>
		<link rel="stylesheet" href="s_log_reg.css">
	</head>
	<body>
		<h1>ДОМАШНЯЯ ФИЛЬМОТЕКА</h1>
		<form method="post" action="https://www.vk.com">
			<table style="margin: auto;">
				<tr>
					<td><label for="login">Логин</label></td>
				</tr>
				<tr>
					<td><input id="login" placeholder="Логин" type="text" name="Log"></td>
				</tr>
				<tr>
					<td><label for="password">Пароль</label></td>
				</tr>
				<tr>
					<td><input id="password" placeholder="Пароль" type="password" name="Pass"></td>
				</tr>
				<p>
				<td><button type="submit" formmethod="get" formaction="https://www.vk.com">Войти</button> 
                <button type="reset">Регистрация</button></td>
				</p>
			</table>
		</form>
	</body>
</html>