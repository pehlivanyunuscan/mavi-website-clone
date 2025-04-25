<?php

function getDatabaseConnection(){

    $host = 'localhost';
    $username = 'root';
    $password = 'root';
    $dbname = 'mavi';
    $port = '8889';

    $connect = mysqli_connect($host, $username, $password, $dbname, $port);

    if(!$connect){
        die("Bağlantı hatası: " . mysqli_connect_error());
    }else{
        //echo "başarılı şekilde çalışıyor";
    }

    return $connect;
}
