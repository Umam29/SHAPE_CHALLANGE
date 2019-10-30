<?php
    include 'config/DB.php';
    include 'models/login.php';

    $database = new Database();
    $db = $database->connect();

    $login = new login($db);

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $pass = md5($_POST['pass']);
        if ($login->register($name, $username, $pass)) {
            header("Location:signin.php");
        }
    }
?>