<?php
session_start();
$_SESSION['error'] = [];
$expire = strtotime('+ 30 day');
//header('Location: ' . $_SERVER['HTTP_REFERER']);

if (!empty($_POST)) {
    $name = filter_input(INPUT_POST, 'name');
    $password = filter_input(INPUT_POST, 'password');

    $isOK = true; // flag
    if (empty($name)) {
        $_SESSION['error']['name_error'] = 'Name is required';
        $isOK = false;
    } else {
        setcookie('name', $name, $expire, './login.php');
    }
    if (empty($password)) {
        $_SESSION['error']['password_error'] = 'Password is required';
        $isOK = false;
    } else {
        setcookie('password', $password, $expire, './login.php');
    }
    // var_dump($isOK);
    // exit();
    if ($isOK = true && !empty($name) && !empty($password)) {
        echo "Name: {$name}\n";
        echo "Password: {$password}";
    } else {
        if (!empty($_SESSION['error']['name_error'])) {
            $name_error = $_SESSION['error']['name_error'];
        } else {
            $name_error = '';
        }
        if (!empty($_SESSION['error']['password_error'])) {
            $password_error = $_SESSION['error']['password_error'];
        } else {
            $password_error = '';
        }
        header('Location: ./login.php?name_error=' . $name_error . '&password_error=' . $password_error);
    }
}
