<?php
session_start();
include "config.php";
$conn = getDatabaseConnection();
$sql = "SELECT * FROM products";
$result = mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kadın Jean Modelleri</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/products.css">
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
            <li><a class="a" href="/">Anasayfa</a></li> <li>|</li> <li> <a class="a" href="/">Kadın</a></li>  <li>|</li> <li>Jean</li>
         </ul>
    </div>
    <div class="product-main">
        <img class= "background-image" src="https://sky-static.mavi.com/sys-master/maviTrImages/h81/h55/9694567432222/jean-banner.jpg">
        <div class="product-a">
            <h1>JEAN</h1>
            <a href="">Tüm Fitler: </a> <a href="">Wide Leg </a> <a href="">Flare - Bootcut </a> <a href="">Mom </a> <a href="">Straight </a> <a href="">Baggy </a> <a href="">Skinny </a> <a href="">Slim Straight </a> <a href="">Boyfriend </a>
        </div>
    </div>
    <div class="product-main2">
        <img src="https://sky-static.mavi.com/kadin-jb-312241709.jpg">
        <img src="https://www.mavi.com/medias/straight-511241045.jpg?context=bWFzdGVyfG1hdmljZG5pbWFnZXN8MTM5NzU0ODZ8aW1hZ2UvanBlZ3xhR1poTDJnMk1pOHhNRGczTXpZNU9UQTNOREEzT0M5emRISmhhV2RvZEMwMU1URXlOREV3TkRVdWFuQm58YTYyODZkM2U4MTU4YzkxNDU1Y2VmNjdhZmRkNWU4NWE0OGNlYjYyY2NjOWZiOWVhODhhYjFlM2Y2NDgyZjE0Nw">
        <img src="https://www.mavi.com/medias/mom-511241327.jpg?context=bWFzdGVyfG1hdmljZG5pbWFnZXN8MTY1NTM3OXxpbWFnZS9qcGVnfGFHRmxMMmcxTVM4eE1EZzNNelk1T1RVNU9ETTJOaTl0YjIwdE5URXhNalF4TXpJM0xtcHdad3xhOWQzY2QxZjQ3NDQ1ZWNkYmZkYzYwN2U4MzE4NjFjYWU2MzE1OWQ5ZWI2OWE2MGM1YTAwODMzNzI0OTNiZmRl">
        <img src="https://www.mavi.com/medias/wide-leg-511241045.jpg?context=bWFzdGVyfG1hdmljZG5pbWFnZXN8MTEwNDcyNDR8aW1hZ2UvanBlZ3xhRFUwTDJnMk1DOHhNRGczTXpZNU9URXdOamcwTmk5M2FXUmxMV3hsWnkwMU1URXlOREV3TkRVdWFuQm58YzA5Y2UxMmQ3OTNhYmVjODM3Y2Y3N2FmMjM0NjIzMDc1MmVjMzQwODBiYjJmOTZlOGRiMTNlZjA0OGE0NDkzZA">
        <img src="https://www.mavi.com/medias/flare-511241045.jpg?context=bWFzdGVyfG1hdmljZG5pbWFnZXN8MTg1NDczMTR8aW1hZ2UvanBlZ3xhR1prTDJnMVppOHhNRGczTXpZNU9URXpPVFl4TkM5bWJHRnlaUzAxTVRFeU5ERXdORFV1YW5CbnwwZDhiYzVjMDNlNmRjMjdjYTMyYjYxODc3ZmQxMjY0YTZmYjQxMjI5YjkxMTQ4N2EwZWI4ZTI5Y2E0ZDQwZGQ0">
    </div>
    <div class="dropdown-container">
        <button class="dropdown-btn">Kategori</button>
            <div class="dropdown-content">
                <label><input type="checkbox"> Aksesuar (7)</label>
                <label><input type="checkbox"> Beauty (5)</label>
                <label><input type="checkbox"> Bluz (6)</label>
                <label><input type="checkbox"> Ceket (8)</label>
                <label><input type="checkbox"> Jean (9)</label>
                <label><input type="checkbox"> Pantolon (23)</label>
                <label><input type="checkbox"> Etek (2)</label>
                <label><input type="checkbox"> Gömlek (5)</label>
            </div>
        <button class="dropdown-btn">Alt Kateg..</button>
            <div class="dropdown-content">
                <label><input type="checkbox"> Acaip (3)</label>
                <label><input type="checkbox"> Ada (7)</label>
                <label><input type="checkbox"> Alissa (2)</label>
                <label><input type="checkbox"> Carina (3)</label>
            </div>
        <button class="dropdown-btn">Tema</button>
            <div class="dropdown-content">
                <label><input type="checkbox"> Aksesuar</label>
                <label><input type="checkbox"> Beauty</label>
                <label><input type="checkbox"> Bluz</label>
                <label><input type="checkbox"> Ceket</label>
                <label><input type="checkbox"> Jean</label>
                <label><input type="checkbox"> Pantolon</label>
                <label><input type="checkbox"> Etek</label>
                <label><input type="checkbox"> Gömlek</label>
            </div>
        <button class="dropdown-btn">Fit/Kalıp</button>
            <div class="dropdown-content">
                <label><input type="checkbox"> Aksesuar</label>
                <label><input type="checkbox"> Beauty</label>
                <label><input type="checkbox"> Bluz</label>
                <label><input type="checkbox"> Ceket</label>
                <label><input type="checkbox"> Jean</label>
                <label><input type="checkbox"> Pantolon</label>
                <label><input type="checkbox"> Etek</label>
                <label><input type="checkbox"> Gömlek</label>
            </div>
        <button class="dropdown-btn">Renk</button>
            <div class="dropdown-content">
                <label><input type="checkbox"> Beauty</label>
                <label><input type="checkbox"> Bluz</label>
                <label><input type="checkbox"> Ceket</label>
                <label><input type="checkbox"> Jean</label>
                <label><input type="checkbox"> Pantolon</label>
                <label><input type="checkbox"> Etek</label>
                <label><input type="checkbox"> Gömlek</label>
                <label><input type="checkbox"> Aksesuar</label>
            </div>
        <button class="dropdown-btn">Beden</button>
            <div class="dropdown-content">
                <label><input type="checkbox"> Beauty</label>
                <label><input type="checkbox"> Bluz</label>
                <label><input type="checkbox"> Ceket</label>
                <label><input type="checkbox"> Jean</label>
                <label><input type="checkbox"> Pantolon</label>
                <label><input type="checkbox"> Etek</label>
                <label><input type="checkbox"> Gömlek</label>
                <label><input type="checkbox"> Aksesuar</label>
            </div>
        <button class="dropdown-btn">Bel</button>
            <div class="dropdown-content">
                <label><input type="checkbox"> Beauty</label>
                <label><input type="checkbox"> Bluz</label>
                <label><input type="checkbox"> Ceket</label>
                <label><input type="checkbox"> Jean</label>
                <label><input type="checkbox"> Pantolon</label>
                <label><input type="checkbox"> Etek</label>
                <label><input type="checkbox"> Gömlek</label>
                <label><input type="checkbox"> Aksesuar</label>
            </div>
        <button class="dropdown-btn">Paça</button>
            <div class="dropdown-content">
                <label><input type="checkbox"> Beauty</label>
                <label><input type="checkbox"> Bluz</label>
                <label><input type="checkbox"> Ceket</label>
                <label><input type="checkbox"> Jean</label>
                <label><input type="checkbox"> Pantolon</label>
                <label><input type="checkbox"> Etek</label>
                <label><input type="checkbox"> Gömlek</label>
                <label><input type="checkbox"> Aksesuar</label>
            </div>
    </div>
    <div class="dropdown-container2">
        <button class="dropdown-btn">Sırala</button>
            <div class="dropdown-content">
                <label><input type="checkbox"> Beauty</label>
                <label><input type="checkbox"> Bluz</label>
                <label><input type="checkbox"> Ceket</label>
                <label><input type="checkbox"> Jean</label>
                <label><input type="checkbox"> Pantolon</label>
                <label><input type="checkbox"> Etek</label>
                <label><input type="checkbox"> Gömlek</label>
                <label><input type="checkbox"> Aksesuar</label>
            </div>
            <button class="dropdown-btn">Görünüm</button>
            <div class="dropdown-content">
                <label><input type="checkbox"> Beauty</label>
                <label><input type="checkbox"> Bluz</label>
                <label><input type="checkbox"> Ceket</label>
                <label><input type="checkbox"> Jean</label>
                <label><input type="checkbox"> Pantolon</label>
                <label><input type="checkbox"> Etek</label>
                <label><input type="checkbox"> Gömlek</label>
                <label><input type="checkbox"> Aksesuar</label>
            </div>
            <p>25 ürün</p>
    </div>
    <div class="dropdown-container3">
        <button class="dropdown-btn">Boy</button>
            <div class="dropdown-content">
                <label><input type="checkbox"> Beauty</label>
                <label><input type="checkbox"> Bluz</label>
                <label><input type="checkbox"> Ceket</label>
                <label><input type="checkbox"> Jean</label>
                <label><input type="checkbox"> Pantolon</label>
                <label><input type="checkbox"> Etek</label>
                <label><input type="checkbox"> Gömlek</label>
                <label><input type="checkbox"> Aksesuar</label>
            </div>
            <button class="dropdown-btn">Fiyat</button>
            <div class="dropdown-content">
                <label><input type="checkbox"> Beauty</label>
                <label><input type="checkbox"> Bluz</label>
                <label><input type="checkbox"> Ceket</label>
                <label><input type="checkbox"> Jean</label>
                <label><input type="checkbox"> Pantolon</label>
                <label><input type="checkbox"> Etek</label>
                <label><input type="checkbox"> Gömlek</label>
                <label><input type="checkbox"> Aksesuar</label>
            </div>
            <button class="dropdown-btn">Düğme/Fe</button>
            <div class="dropdown-content">
                <label><input type="checkbox"> Beauty</label>
                <label><input type="checkbox"> Bluz</label>
                <label><input type="checkbox"> Ceket</label>
                <label><input type="checkbox"> Jean</label>
                <label><input type="checkbox"> Pantolon</label>
                <label><input type="checkbox"> Etek</label>
                <label><input type="checkbox"> Gömlek</label>
                <label><input type="checkbox"> Aksesuar</label>
            </div>
    </div>
    <div class="border-bottom"></div>
    <div class="reset">
        Jean <b>x</b>
        <input type="reset" value="Tümünü Sil">
    </div>

    <section class="product-list">
    <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>

        <div class="list">
            <a href="shopping.php?id=<?php echo $row['id']; ?>">
            <img src="<?php echo $row['image'] ?>" alt="<?php echo $row['title'] ?>" />
            </a>
            <p><?php echo $row['title']; ?><br>Baggy,Yüksek Bel<br><br><?php echo $row['productprice']; ?> TL</p>
        </div>    
            

        <?php
            }
        } else {
            echo "<p>Hiç ürün bulunamadı.</p>";
        }
        ?>
        </section>    

<script src="js/scrip.js"></script>
</body>
</html>