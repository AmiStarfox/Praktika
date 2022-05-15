<?php   
    session_start();
    if ($_SESSION['user']) {
        header('Location: qr.php');
    }
    ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8 " />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Авторизация</title>
    <link rel="stylesheet" href="css/auth.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="aunth">
    <form action="inc/aunth.php" method="post">
        <a href="./index.php"><img src="img/am.png"></a>
        <h1>Добро пожаловать!</h1>
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите свой пароль">
        <!-- <label>Изображение профиля</label>
        <input type="file" name="avatar">
        <div class="form-check">
      <input type="checkbox" class="form-check-input" id="dropdownCheck">
      <label class="form-check-label" for="dropdownCheck">
        Запомнит меня
      </label>
    </div> -->
        <button type="submit">Войти</button> 
        <?php 
            if ($_SESSION['message']){
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
            ?>
    </form>
    </div>
</body>
</html>