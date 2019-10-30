<?php
    session_start();
    include 'config/DB.php';
    include 'models/login.php';
    include 'models/admin_model.php';

    $database = new Database();
    $db = $database->connect();

    $login = new login($db);

    $admin = new admin($db);

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $pass = md5($_POST['pass']); 
        if ($login->enter($username, $pass)) {
            header("Location:index.php");
        }
    }
?>