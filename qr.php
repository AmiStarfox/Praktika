<?php
    session_start();
    if (!$_SESSION['user']) {
        header('Location: index.php');
    }
?>
<?php
  require_once 'inc/connect.php'
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8 " />
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Сканирование товара</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="./js/llqrcode.js"></script>
    <script type="text/javascript" src="./js/webqr.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet">
<body>
  <div class="qr" id="qr">
    <link rel="stylesheet" href="css/qr.css">
    <a href="inc/logout.php"><img class = "logo" src="img/am.png"></a>
  <h1>Отсканируйте код с помощью камеры</h1>
    <div id="main">
      <div id="mainbody" style="display: inline;">
      <table class="tsel" border="0" width="100%">
        <tbody>
          <tr>
            <td valign="top" align="center" width="50%">
              <table class="tsel" border="0">
                <tbody>
                  <tr>
                    <td><img class="selector" id="webcamimg" src="./img/cam.png" onclick="setwebcam()" align="left" style="opacity: 1;"></td>
                    <td><img class="selector" id="qrimg" src="./img/folder.png" onclick="setimg()" align="right" style="opacity: 0.2;"></td>
                  </tr>
                  <tr>
                    <td colspan="2" align="center">
                      <div id="outdiv"><video id="v" autoplay=""></video></div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
          <tr>
            <td colspan="3" align="center">
              <div type="text" id="result"name="search"></div>
              <a href="info.php" id="button_id"><button style="width: 100%;" class="button">Найти</button></a>
              <!-- <a href="qqq.php"><button style="width: 100%;" class="button">Ввнести вручную</button></a> -->
              <a href="index.php" id="button_id"><button style="width: 100%;" class="button">Выход</button></a>
            </td>
          </tr>
        </tbody>
      </table>
      <script async="" src="js/f.txt"></script>
      </div>&nbsp;
    </div>
    <canvas id="qr-canvas" width="600" height="400" style="width: 600px; height: 400px;"></canvas>
    <script type="text/javascript">load();</script>
  </div>
</body>
</html>