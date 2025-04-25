<?php
session_start();

if(!$_SESSION['email']){
    header('Location: login.php');
}


include 'config.php';

// Ürün ID'sini alıyoruz
$product_id = $_GET['id'];

// Kullanıcının oturumundaki ID'yi alıyoruz
$user_email = $_SESSION['email']; // Oturum açmış kullanıcıyı tanımlıyoruz


$conn = getDatabaseConnection();
$usersql =  "SELECT id FROM users WHERE email = '$user_email' ";



$id_result = mysqli_query($conn,$usersql);
$row = mysqli_fetch_assoc($id_result);
$user_id = $row['id'];

// Ürünün sepette olup olmadığını kontrol ediyoruz
$sql = "SELECT * FROM BASKET WHERE user_id = '$user_id' AND product_id = '$product_id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Ürün zaten sepette var, miktarı arttırıyoruz
    $row = mysqli_fetch_assoc($result);
    $new_quantity = $row['quantitiy'] + 1;
    $update_sql = "UPDATE BASKET SET quantitiy = '$new_quantity' WHERE user_id = '$user_id' AND product_id = '$product_id'";
    mysqli_query($conn, $update_sql);
} else {
    // Ürün sepette yok, yeni ürün ekliyoruz
    $insert_sql = "INSERT INTO BASKET (user_id, product_id, quantitiy) VALUES ('$user_id', '$product_id', 1)";
    mysqli_query($conn, $insert_sql);
}
header("Location: products.php"); // Ürün detayına yönlendirme

?>