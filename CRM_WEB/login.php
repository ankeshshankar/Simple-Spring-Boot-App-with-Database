<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css">
    
    <link rel="stylesheet" type="text/css" href="./assets/css/shards.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">

    <title>Login</title>
  </head>
  <body style="background: url('./assets/images/img-login-2.jpg')">
  <form method="POST" action="./LoginCheck.php">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-6 mx-auto">
                <div class="jumbotron bg-white">
                  <h1 class="display-5 text-center mb-5">Login</h1>
                    <form method="POST">
                        <div class="form-group mx-5">
                            <label for="username">Email</label>
                            <input type="email" class="form-control" id="username" name="username" placeholder="Enter username">
                        </div>
                        <div class="form-group mx-5">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg">Login or Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <form>
    <?php include './layout/footer.php' ?>
  </body>
</html>