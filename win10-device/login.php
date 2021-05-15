<?php session_start();
$name_error = filter_input(INPUT_GET, 'name_error');
$password_error = filter_input(INPUT_GET, 'password_error');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
<form action="index.php" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" placeholder="Enter name" value="<?php
    if (!empty($_COOKIE['name'])) {
        echo $_COOKIE['name'];
    } ?>">
    <?php
    if (!empty($name_error)) {
        echo $name_error;
    } ?>

    <div></div>
    <label for="pwd">Password:</label>
    <input type="password" name="password" id="pwd" placeholder="Enter password" value="<?php
    if (!empty($_COOKIE['password'])) {
        echo $_COOKIE['password'];
    } ?>">
    <?php
    if (!empty($password_error)) {
        echo $password_error;
    } ?>

    <div></div>
    <input type="submit" value="Login">
</form>

<?php
foreach ($_COOKIE as $key => $value) {
    echo $key . ': ' . $value . "<br>";
}
?>
</body>

</html>