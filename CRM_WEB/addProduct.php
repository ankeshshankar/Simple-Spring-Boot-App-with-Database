<?php
if (isset($_POST['submit'])) {
    $url = 'http://localhost:8080/product/newProduct';
    $fields = array(
        'product_name' => $_POST['productName'],
        'product_type' => $_POST['type'],
        'product_model' => $_POST['model'],
        'product_price' => $_POST['price'],
    );
    foreach ($fields as $key => $value) {$fields_string .= $key . '=' . $value . '&';}
    rtrim($fields_string, '&');
    $ch = curl_init();
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

    <title>Add Product</title>
  </head>
  <body style="background: url('./assets/images/img-index-5.png');  background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-6 mx-auto">
                <div class="jumbotron bg-white">
                  <h1 class="display-5 text-center mb-5">Add Product</h1>
                    <form method="POST">
                    <div class="form-group mx-5">
                            <label><?php $result = curl_exec($ch);curl_close($ch);?></label>
                        </div>
                        <div class="form-group mx-5">
                            <label for="productName">Product Name</label>
                            <input type="text" class="form-control" id="productName" name="productName" placeholder="Enter Product">
                        </div>
                        <div class="form-group mx-5">
                            <label for="type">Type</label>
                            <select id="type" name="type" class="form-control ">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="form-group mx-5">
                            <label for="model">Model</label>
                            <input type="text" class="form-control" name="model"  placeholder="Enter Model">
                        </div>
                        <div class="form-group mx-5">
                            <label for="price">Price</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupPrepend">₹</span>
                                </div>
                                <input type="text" class="form-control" id="price" name="price" placeholder="Enter Amount" required>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" name ="submit"class="btn btn-primary btn-block w-50 btn-lg mx-auto">Add Product</button>
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
    <?php include './layout/footer.php' ?>
  </body>
</html>