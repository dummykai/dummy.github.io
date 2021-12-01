<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>学生食堂予約フォーム</title>
  <link href="css/normalize.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,700&display=swap&subset=japanese" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Croissant+One&display=swap" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>
<body class="apply">
<header class="page-header" id="top">
  <div class="header-container">
    <div class="sitetitle">
      <h1 class="header-logo">
        <a href="index.html"><img src="./images/sus.png" alt="Tansaku!"></a>
      </h1>
      <div class="navbtn"></div><!-- モバイル用ナビゲーション開閉ボタン。class="close"をつけるとバツになる -->
    </div>
    <nav>
      <ul class="header-nav collapse">
        <li><a href="index.html">HOME</a></li>
        <li><a href="form.html">予約入力フォーム</a></li>
        <li><a href="https://www.sus.ac.jp/webcam/">学生食堂ライブカメラ</a></li>
      </ul>
    </nav>
  </div>
</header>
<div class="breadcrumb">
  <div class="bc-container">
    <ul class="bc-nav">
      <li><a href="index.html">HOME</a></li>
      <li>学生食堂予約確認</li>
    </ul>
  </div>
</div>
<div class="campaign">
  <div class="campaign-container">
    <h2 class="apply-title">
      <span>予約完了！！</span><br>
    </h2>
  </div>
</div>

<?php
    $name = $_POST["name"];
    $stnum = $_POST["stnum"];
    $date = $_POST["date"];
    $menu = $_POST["menu"];

    $rowdata = array();
    $rowdata[0] = $name;
    $rowdata[1] = $stnum;
    $rowdata[2] = $date;
    $rowdata[3] = $menu;

    $fp = fopen("./yoyaku.csv" , "a");
    fputcsv($fp,$rowdata);
    fclose($fp);
?>

<div class="page-bottom">
  <div class="bottom-container">
    <div class="banner">
      <div><a href="https://www.sus.ac.jp/"><img src="./images/sus.png" alt=""></a></div>
    </div>
    <h2 class="followus">Follow Us!</h2>
    <div class="sns">
      <div><a href="#"><i class="fab fa-twitter"></i></a></div>
      <div><a href="#"><i class="fab fa-facebook-f"></i></a></div>
      <div><a href="#"><i class="fab fa-instagram"></i></a></div>
    </div>
  </div>
  <div class="gotop">
    <a href="#top"><i class="fas fa-chevron-up"></i></a>
  </div>
</div>
<footer class="page-footer">
  <div class="footer-container">
    <ul class="footer-nav1">
      <li><a href="index.html">HOME</a></li>
      <li><a href="form.html">予約入力フォーム</a></li>
      <li><a href="https://www.sus.ac.jp/webcam/">学生食堂ライブカメラ</a></li>
    </ul>
    <ul class="footer-nav2">
      <li><a href="#">このサイトについて</a></li>
      <li><a href="#">運営</a></li>
    </ul>
    <p class="copyright">© レットイットビー.</p>
  </div>
</footer>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
