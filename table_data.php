<?php
include "db_connect.php";
// Выводим результат из БД
$query_1 = "SELECT * FROM products WHERE id=1";
$result = mysqli_query($conn, $query_1);
$arr = mysqli_fetch_array($result);
$name_1 = $arr['name'];
$desc_1 = $arr['description'];
$price_1 = $arr['price'];
$img_1 = $arr['img'];

$query_2 = "SELECT * FROM products WHERE id=2";
$result = mysqli_query($conn, $query_2);
$arr = mysqli_fetch_array($result);
$name_2 = $arr['name'];
$desc_2 = $arr['description'];
$price_2 = $arr['price'];
$img_2 = $arr['img'];

$query_3 = "SELECT * FROM products WHERE id=3";
$result = mysqli_query($conn, $query_3);
$arr = mysqli_fetch_array($result);
$name_3 = $arr['name'];
$desc_3 = $arr['description'];
$price_3 = $arr['price'];
$img_3 = $arr['img'];

$query_4 = "SELECT * FROM products WHERE id=4";
$result = mysqli_query($conn, $query_4);
$arr = mysqli_fetch_array($result);
$name_4 = $arr['name'];
$desc_4 = $arr['description'];
$price_4 = $arr['price'];
$img_4 = $arr['img'];

$query_5 = "SELECT * FROM products WHERE id=5";
$result = mysqli_query($conn, $query_5);
$arr = mysqli_fetch_array($result);
$name_5 = $arr['name'];
$desc_5 = $arr['description'];
$price_5 = $arr['price'];
$img_5 = $arr['img'];

$query_6 = "SELECT * FROM products WHERE id=6";
$result = mysqli_query($conn, $query_6);
$arr = mysqli_fetch_array($result);
$name_6 = $arr['name'];
$desc_6 = $arr['description'];
$price_6 = $arr['price'];
$img_6 = $arr['img'];

$query_7 = "SELECT * FROM products WHERE id=7";
$result = mysqli_query($conn, $query_7);
$arr = mysqli_fetch_array($result);
$name_7 = $arr['name'];
$desc_7 = $arr['description'];
$price_7 = $arr['price'];
$img_7 = $arr['img'];

$query_8 = "SELECT * FROM products WHERE id=8";
$result = mysqli_query($conn, $query_8);
$arr = mysqli_fetch_array($result);
$name_8 = $arr['name'];
$desc_8 = $arr['description'];
$price_8 = $arr['price'];
$img_8 = $arr['img'];


require "products_list.php";
//$result['name']
?>