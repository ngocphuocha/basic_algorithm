<?php
// // Cookie
// $name = 'userid';
// $value = 'ngocphuoc';
// $expire = strtotime('- 1 year');
// $path = '/';
// setcookie($name, $value, $expire, $path);

// if (isset($_COOKIE[$name])) {
//     echo $_COOKIE[$name];
// }

// Session



$lifeTime = strtotime('+ 1 day');
session_set_cookie_params($lifeTime, '/');
session_start();
// $date = date('Y/m/d', $lifeTime);
// echo '<pre>';
// var_dump($date);
$products = [];
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [
        [
            'product_id' => 1,
            'name' => 'Samsung galaxy',
            'category' => 'IT device',
            'cost' => 9999
        ]
    ];
    $products = $_SESSION['cart'];
}
$product = $_SESSION['cart'];
if (!empty($product)) {
    echo '<pre>';
    print_r($product[0]);
}
// session_unset();
// session_destroy();