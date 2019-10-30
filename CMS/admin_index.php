<?php 
    session_start();
    include 'config/DB.php';
    include 'models/admin_model.php';

    $database = new Database();
    $db = $database->connect();

    $admin = new admin($db);

    $admin->read();

    if(isset($_GET['id'])) {
        if ($admin->del($_GET['id'])) {
            header("Location:admin_index.php");
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="admin_index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="create_admin.php">Create Admin</a>
            </li>
        </div>
        <div class="right" style="float: right">
            <a class="btn btn-warning" href="signout.php">sign out</a>
        </div>
    </nav>
</head>
<body>
    <div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h3>List Admin<h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
            <tr>
                <td>Name</td>
                <td>Username</td>
                <td>Action</td>
            </tr>
            <?php foreach ($admin->adm as $person):?>
            <tr>
                <td><?= $person->name; ?></td>
                <td><?= $person->username; ?></td>
                <td>
                    <a onclick="return confirm('Are you sure?')" href="admin_index.php?id=<?= $person->id; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
            </table>
        </div>
    </div>
    </div>
</body>
</html>