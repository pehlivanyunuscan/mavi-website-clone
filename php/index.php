<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css">
    <title>Jean Guide | Mavi </title>
</head>
<body>
    <div class="mavi">
        <img src="https://www.mavi.com/medias/mavi-logo-orijinal-1011232201.svg?context=bWFzdGVyfG1hdmljZG5pbWFnZXN8MzQ4NHxpbWFnZS9zdmcreG1sfGFHUm1MMmcyWWk4eE1EZzJOVGt4TnpBek5EVXlOaTl0WVhacExXeHZaMjh0YjNKcGFtbHVZV3d0TVRBeE1USXpNakl3TVM1emRtY3w1OWVlYWU3MDVhNGM1MDlhMzU1MjJkOGIyMjNkYTFjMzAxZDliMzZhNGE5YzYwOWZjNGU1ODRiZGU2YWM1YmU0" >
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
            <li><a class="a" href="/">Anasayfa</a></li> <li>|</li> <li>Jean Guide</li>
         </ul>
    </div>
    <div class="main">
            <img class="main-image" src="https://sky-static.mavi.com/WEB_09-2510241409.webp" onclick="window.location.href = 'products.php';">
            <div class="overlay-text"><p>BİRAZ JEAN Mİ KONUŞSAK?</p></div>
            <div class="overlay-text2"><p>KADIN JEAN GUIDE ></p></div>
    </div>        
    <div class="main2">        
            <img class="main-image" src="https://sky-static.mavi.com/WEB_12-2510241409.webp">
            <div class="overlay-text3"><p>BİRAZ JEAN Mİ KONUŞSAK?</p></div>
            <div class="overlay-text4"><p>ERKEK JEAN GUIDE ></p></div>
    </div>
</body>
</html>