<?php
    include 'config/DB.php';
    include 'models/admin_model.php';

    $database = new Database();
    $db = $database->connect();

    $admin = new admin($db);

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $pass = md5($_POST['pass']);
        $level = $_POST['level'];
        if ($admin->register($name, $username, $pass, $level)) {
            header("Location:signin.php");
        }
    }
?>