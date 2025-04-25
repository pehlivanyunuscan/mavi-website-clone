<?php
session_start();

include 'config.php';

// Kullanıcı oturumunu kontrol et
if (!isset($_SESSION['email'])) {
    header("Location: login.php"); // Kullanıcı giriş yapmamışsa giriş sayfasına yönlendir
    exit();
}

$user_email = $_SESSION['email'];
$conn = getDatabaseConnection();

// Kullanıcı ID'sini al
$usersql = "SELECT id FROM users WHERE email = '$user_email'";
$id_result = mysqli_query($conn, $usersql);

if (!$id_result || mysqli_num_rows($id_result) === 0) {
    die("Kullanıcı bulunamadı!");
}

$row = mysqli_fetch_assoc($id_result);
$user_id = $row['id'];

// Kullanıcının sepetindeki ürünleri al
$basketsql = "SELECT * FROM BASKET WHERE user_id = '$user_id'";
$basket_result = mysqli_query($conn, $basketsql);


// Sepet işlemleri
if (isset($_POST['increase'])) {
    $basket_id = intval($_POST['basket_id']);
    $increasesql = "UPDATE BASKET SET quantitiy = quantitiy + 1 WHERE id = $basket_id";
    mysqli_query($conn, $increasesql);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

if (isset($_POST['decreas'])) {
    $rowbasket = mysqli_fetch_assoc($basket_result);
     $basket_id = intval($_POST['basket_id']);

    if($rowbasket["quantitiy"] <= 1){
      $decreasesql = "DELETE FROM BASKET WHERE id = $basket_id";
    }else{
      $decreasesql = "UPDATE BASKET SET quantitiy = GREATEST(quantitiy - 1, 0) WHERE id = $basket_id";
    }


    mysqli_query($conn, $decreasesql);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

$total_price = 0; // Toplam fiyatı tutacak değişken

// 1. Toplam fiyatı hesapla
$basketsql = "SELECT * FROM BASKET WHERE user_id = '$user_id'";
$basket_result_for_total = mysqli_query($conn, $basketsql);

if ($basket_result_for_total) {
    while ($rowbasket = mysqli_fetch_assoc($basket_result_for_total)) {
        $product_id = $rowbasket['product_id'];

        // Ürün bilgilerini çek
        $productsql = "SELECT * FROM products WHERE id = '$product_id'";
        $product_result = mysqli_query($conn, $productsql);

        if ($product_result && mysqli_num_rows($product_result) > 0) {
            $rowproduct = mysqli_fetch_assoc($product_result);

            // Ürünün toplam fiyatını hesapla ve ekle
            $product_total = $rowbasket["quantitiy"] * $rowproduct['productprice'];
            $total_price += $product_total;
        }
    }
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/summary.css">
    <title>Sepetim | Mavi </title>
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
            <li><a class="a" href="/">Anasayfa</a></li> <li>|</li> <li>Sepetim</li>
         </ul>
    </div>

  <main>
    <section class="cart">
      <table class="cart-table">
        <thead>
          <tr>
          <th></th>
            <th>Ürün</th>
            <th>Birim Fiyat</th>
            <th>Adet</th>
            <th>Toplamı</th>
            <th></th>
          </tr>
        </thead>
        <tbody id="cart-items">
          <?php

            while ($rowbasket = mysqli_fetch_assoc($basket_result)) {
              $product_id = $rowbasket['product_id'];

              // Her ürün için ürün bilgilerini al
              $productsql = "SELECT * FROM products WHERE id = '$product_id'";
              $product_result = mysqli_query($conn, $productsql);

              if ($product_result && mysqli_num_rows($product_result) > 0) {
                  $rowproduct = mysqli_fetch_assoc($product_result);

                  // Tabloya satır olarak ürün bilgilerini ekle
                  echo '<tr>';
                  echo '<td><img src="' . $rowproduct['image'] . '" style="width:100px" /></td>';
                  echo '<td>' . $rowproduct['productname'] . '</td>';
                  echo '<td>' . $rowproduct['productprice'] . ' TL</td>';
                  echo '<td>
                          <form method="POST">
                              <input type="hidden" name="basket_id" value="' . $rowbasket['id'] . '" />
                              <button name="decreas"> - </button> 
                              ' . $rowbasket["quantitiy"] . '
                              <button type="submit" name="increase"> + </button>  
                          </form>
                        </td>';
                  echo '<td>' . ($rowbasket["quantitiy"] * $rowproduct['productprice']) . ' TL</td>';
                  echo '</tr>';
              } else {
                  echo '<tr>';
                  echo '<td colspan="5">Ürün bilgisi bulunamadı!</td>';
                  echo '</tr>';
              }
          }


          if(isset($_POST['increase'])){
            $increasesql = "UPDATE BASKET SET quantitiy = quantitiy + 1 WHERE id = {$rowbasket["id"]} ";
            mysqli_query($conn,$increasesql);
          }



          ?>
        </tbody>
      </table>
      <div id = "cart-summary" class="cart-summary">

          <div>
              <span>Sepet Toplamı : </span>
              <span><?php echo $total_price ?>  TL</span>
        </div>
        <button>Satın Al</button>


      </div>
    </section>
  </main>


</body>
</html>