<?php 
require './db.php';
require './functions.php';
if(isset($_POST['login'])){
    $result = adminLogin($_POST);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row" style="display: flex;align-items:center;justify-content: center;height: 100vh;width: 100%;">
            <div class="col-md-3 col-lg-3"></div>
            <div class="col-md-6 col-lg-6">
                <h3>Welcome Back! Login Here.</h3><hr />
                <form method="POST">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="Enter Username or Emaill address" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="login" class="btn btn-primary">Login</button>
                    </div>
                </form>
               
            </div>
            <div class="col-md-3 col-lg-3"></div>
        </div>
    </div>
    
</body>
</html>