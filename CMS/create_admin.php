<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Create Admin</title>
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
    <div class="card">
        <div class="card-header">
            <h3>Create Admin</h3>
        </div>
        <div class="card-body">
            <form action="admin_controller.php" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="pass" class="form-control">
                </div>
                <div class="form-group">
                    <label for="level">Level</label>
                    <input type="number" name="level" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary" value="Create">
                </div>
            </form>
        </div>
    </div>
    </div>
    <!-- <form action="admin_controller.php" method="post">        
        <div>
        <table>
            <tr>
                <td>Name</td>
                <tr><td><input type="text" name="name"></td></tr>
                <td>Username</td>
                <tr><td><input type="text" name="username"></td></tr>
                <td>Password</td>
                <tr><td><input type="password" name="pass"></td></tr>
                <td>level</td>
                <tr><td><input type="number" name="level"></td></tr>
                <tr><td><input type="submit" name="submit" class="btn btn-primary" value="Create"> <a class="btn btn-warning" href="signin.php">back</a></td></tr>
            </tr>
        </table>
        </div>
    </form> -->
</body>
</html>