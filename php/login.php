<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include 'config.php';
session_start();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = getDatabaseConnection();

    // Kullanıcı kontrolü
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password' ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['email'] = $email;
        header("Location: products.php");
    } else {
        echo "Geçersiz kullanıcı adı veya şifre.";
    }

}

if(isset($_SESSION["email"])){
    header("Location : products.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap | Mavi</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>
<div class="mavi">
        <img src="https://www.mavi.com/medias/mavi-logo-orijinal-1011232201.svg?context=bWFzdGVyfG1hdmljZG5pbWFnZXN8MzQ4NHxpbWFnZS9zdmcreG1sfGFHUm1MMmcyWWk4eE1EZzJOVGt4TnpBek5EVXlOaTl0WVhacExXeHZaMjh0YjNKcGFtbHVZV3d0TVRBeE1USXpNakl3TVM1emRtY3w1OWVlYWU3MDVhNGM1MDlhMzU1MjJkOGIyMjNkYTFjMzAxZDliMzZhNGE5YzYwOWZjNGU1ODRiZGU2YWM1YmU0">
    </div>
    <div class="menu-searchbar">
        <div>
        <ul class="menu">
            <li>Jean</li> <li>Kadın</li> <li>Erkek</li> <li>Çocuk</li> <li>All Blue</li> <li>Outlet</li> <li>Hediye Kartı</li> <li>Kartuş</li>
        </ul>
        </div>
        <div class="searchbar">
            <form action="" method="post">
                <input type="text" id="sb1" name="sb1"placeholder="Arama Yap">
                <input type="submit" value="Gönder"></input>
            </form>
            <a href="#">  <img src="images/heart.svg" style="width:15px"></a>
            <a href="login.php"><img src="images/user.svg" style="width:15px"></a>
           <a href="summary.php"> <img src="images/basket.svg" style="width:20px"> </a>
        </div>
    </div>
    <div class="content">
        <ul class="menu2">
            <li><a class="a" href="/">Anasayfa</a></li> <li>|</li> <li>Giriş Yap</li>
         </ul>
    </div>
    <div class="login-main">
        <a id="a1">Giriş Yap</a> <a id="a2">Üye Ol</a>
    </div>
    <form class="E-posta-password" action="?" method="post">
        <div class="E-posta-password">
            <input type="email" id="e-posta-password" name="email" placeholder="E-Posta Adresi / Telefon Numarası" maxlength="100">
            <input type="password" id="e-posta-password" name="password" placeholder="Şifre" maxlength="30">
            <a id="apassword">Şifremi Unuttum</a>
            <input type="submit" id="login" name="login" value="Giriş Yap">
        </div>
    </form>   
</body>
</html>