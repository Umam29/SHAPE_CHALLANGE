<?php
    session_start();
    include 'config/DB.php';
    include 'models/admin_model.php';

    $database = new Database();
    $db = $database->connect();

    $admin = new admin($db);

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $pass = md5($_POST['pass']);
        if ($admin->enterAdmin($username, $pass)) {
            header("Location:admin_index.php");
        }
    }
?>