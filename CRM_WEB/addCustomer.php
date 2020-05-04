<?php
$ch = curl_init();
if (isset($_POST['submit'])) {
    $url = 'http://localhost:8080/customer/newCustomer';
    $fields = array(
        'customer_email' => $_POST['customerName'],
        'customer_name' => $_POST['customerEmail'],
        'customer_phone' => $_POST['customerPhone'],
    );
    foreach ($fields as $key => $value) {$fields_string .= $key . '=' . $value . '&';}
    rtrim($fields_string, '&');
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, count($fields));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
}
?>
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

    <title>Add Customer</title>
  </head>
  <body style="background: url('./assets/images/img-index-5.png');  background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-6 mx-auto">
                <div class="jumbotron bg-white">
                  <h1 class="display-5 text-center mb-5">Add Customer</h1>
                  <div>
                  </div>
                    <form method="POST">
                        <div class="form-group mx-5">
                            <label><?php $result = curl_exec($ch);curl_close($ch);?></label>
                        </div>
                        <div class="form-group mx-5">
                            <label for="username">Customer Name</label>
                            <input type="text" class="form-control" name="customerName" placeholder="Enter name">
                        </div>
                        <div class="form-group mx-5">
                            <label for="password">Customer Phone</label>
                            <input type="tel" class="form-control" name="customerPhone" placeholder="Enter phone">
                        </div>
                        <div class="form-group mx-5">
                            <label for="password">Customer Email</label>
                            <input type="email" class="form-control" name="customerEmail" placeholder="Enter email">
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" name ="submit" class="btn btn-primary btn-block w-50 btn-lg mx-auto" >Add Customer</button>
                        </div>
                        <div class="form-group text-center">
                            <a class="btn btn-secondary w-25 btn-lg" href="./index.php">Home</a>
                            <button type="reset" class="btn btn-outline-dark w-25 btn-lg">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include './layout/footer.php'?>
  </body>
</html>