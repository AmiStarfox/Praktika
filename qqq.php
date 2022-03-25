<?php
    session_start();
    if (!$_SESSION['user']) {
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8 " />
    <title>Внесение товара вручную</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="./js/llqrcode.js"></script>
    <script type="text/javascript" src="./js/webqr.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet">
<body>

  <div class="qr" id="qr">
    <script type="text/javascript">
      function openForm() {
  document.getElementById("myForm").style.display = "block";php
}
function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
      </script>
  <link rel="stylesheet" href="css/qr.css">
  <form action="qr.php">
    <a href="inc/logout.php"><img class = "logo" src="img/ami.png"></a>
    <fieldset><h1>Введите данные кода вручную</h1></fieldset>
    <form action="">
      <label>Дата и время</label>
      <input type="text" placeholder="Введите наименование">
      <label>Сумма чека</label>
      <input type="text" placeholder="Сумма чека в рублях">
      <label>ФН</label>
      <input type="text" placeholder="16 цифр, вначале или в конце чека">
      <label>ФД</label>
      <input type="text" placeholder="Обычно 3-5 цифр, в конце чека">
      <label>ФП или ФПД</label>
      <input type="text" placeholder="Обычно 8-10 цифр, в конце чека">
      <label id="qqq" a href="./index.php">Как найти информацию на чеке</a></label>
        <!-- <img src="img/cek.png"/> -->
        
      </span></a>
      <button class="button">Внести</button>
  </form>
  </div>
</body>
</html>