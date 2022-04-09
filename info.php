<?php
    session_start();
    if (!$_SESSION['user']) {
        header('Location: ../index.php');
    }
?> 
<?php
  require_once 'inc/connect.php'
?>
<?php
  $id = $_GET['id'];
  $product = mysqli_query($connect, "SELECT * FROM `goods` WHERE `id` = '$id'");
  $product = mysqli_fetch_assoc($product);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8 " />
    
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
        </form>
        <form action = "" method = "get">
  <h1>Информация о товаре</h1><br>
    <label>ID товара</label>
    <input type="text" name="id" value="<?= $product['id'] ?>" readonly>
    <label>Наименование товара</label>
    <input type="text" name="name" value="<?= $product['name'] ?>" readonly>
    <label>Тип товара</label>
    <input type="text" value="<?= $product['type'] ?>" readonly>
    <label>Инвентаризационный номер</label>
    <input type="text" name="number" value="<?= $product['number'] ?>" readonly>
    <label>Количество</label>
    <input type="number" name="cont" value="<?= $product['cont'] ?>" readonly>
    <button type="button" href="./qr.php">Назад</button> 
    </div></div>
</body>
</html>