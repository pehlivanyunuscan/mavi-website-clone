<?php
session_start();
include 'config.php';

$product_id=$_GET['id'];
$conn=getDatabaseConnection();
$sql="SELECT * FROM products WHERE id='$product_id'";

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);

if($row){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/shopping.css">
    <link rel="stylesheet" href="styles/products.css">
    <title>Shopping | Mavi </title>
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
            <li><a class="a" href="/">Anasayfa</a></li> <li>|</li> <li><a class="a" href="/">Kadın</a></li> <li>|</li> <li><a class="a" href="/">Jean</a></li>  <li>|</li> <li><a class="a" href="/">Lisa</a></li> 
         </ul>
    </div>
    <section class="shopping">
        <div class="shopping-image">
            <img id ="img1" src="<?php echo $row["image"] ?>">
        </div>

        <div class="image-info">
            <h1><?php echo $row["productname"] ?></h1>
            <p id="pp">Baggy, Yüksek Bel, Daralan Paça</p>
            <p><?php echo $row['productprice']; ?>TL</p><br>
            <div id="colors">
            <label for="color1">
                <img id = "color1" src="https://sky-static.mavi.com/mnresize/42/42/1010938-89253_material.jpg" onclick="openOnImageClick('color1')">
            </label>
            <label for="color2">
                 <img id = "color2" src="https://sky-static.mavi.com/mnresize/42/42/1010938-89254_material.jpg" onclick="openOnImageClick('color2')">
            </label>
            </div>
            <script>
                function openOnImageClick(id)
                {
                    if(id == 'color1'){
                        var img = document.getElementById('img1');
                        img.style.visibility = "visible";
                        var img2 = document.getElementById('img2');
                        img2.style.visibility = "hidden";

                    }
                    if(id == 'color2'){
                        var img = document.getElementById('img1');
                        img.style.visibility = "hidden";
                        var img2 = document.getElementById('img2');
                        img2.style.visibility = "visible";

                    }

                }

            </script>    
        <div id = "ddown" class="dropdown">
        <label for="sizeLabel">Beden Seçiniz:</label>
        <select id="sizeSelect">
            <option value="">Seçiniz</option>
            <option value="XS">XS</option>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
            <option value="XXL">XXL</option>
        </select>
    </div>
            <div class="button">
                <button class="add-to-card" >
                <a href="addtobasket.php?id=<?php echo $row['id']; ?>" onclick="showPopup()">Sepete Ekle</a>
                </button>
            </div>
            <div class="link">
                <a href="">All Blue Koleksiyonunu Keşfet</a>
            </div>
            <div class="button">
                <button class="check-find">Kombini İncele</button>
                <button class="check-find">Mağazada Bul</button>
            </div>
    </div>


    </section>
    <script>
    function showPopup() {
        alert("Sepetinize Başarıyla Eklenmiştir!"); 
        window.location.href = "products.php"; 
    }
    </script>

</body>
</html>
<?php } ?>