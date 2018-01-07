<?php
    require_once "../vendor/autoload.php";
    $message="";
    $login = new App\classes\Login();
    if(isset($_POST['btn'])){
       $message = $login->adminLoginCheck($_POST);
    }
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 mx-auto" style="margin-top: 200px">
                <div class="card">
                    <div class="card-body">
                        <h2><?php echo $message ?></h2>

<form action="" method="post">
    <h4 class="text-center">Admin Panel</h4>
    <div class="form-group row">
        <label for="Email3" class="col-sm-3 col-form-label">Email</label>
        <div class="col-sm-9">
            <input type="email" name="email" class="form-control" id="Email3" placeholder="Email">
        </div>
    </div>
    <div class="form-group row">
        <label for="Pass3" class="col-sm-3 col-form-label">Password</label>
        <div class="col-sm-9">
            <input type="password" name="password" class="form-control" id="Pass3" placeholder="Password">
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-12">
            <button type="submit" name="btn" class="btn btn-success btn-block">Sign in</button>
        </div>
    </div>
</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>