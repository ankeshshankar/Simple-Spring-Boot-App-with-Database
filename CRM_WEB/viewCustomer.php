<?php
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => "http://localhost:8080/customer/allCustomer",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "cache-control: no-cache",
    ),
));
$response = curl_exec($curl);
$err = curl_error($curl);
$response = json_decode($response, true);
//echo $response[0]['email'];
//echo "<br>".$response[0]['pass'];
//curl_close($curl);
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

    <title>Customer List</title>
  </head>
  <body style="background: url('./assets/images/img-index-5.png');  background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="mx-auto">
                <div class="jumbotron bg-white">
                  <h1 class="display-5 text-center">Customer List</h1>
                  <div>
                  </div>
                    <form >
                    <div class="table-responsive">
                        <table id="customerTable" class="table black white-text ">
                            <thead>
                                <tr>
                                    <th scope="col"><img src="./assets/images/cust.png" class="img-fluid" alt="Responsive image"></th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone no</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($response as $key => $data) { ?>
                                    <tr>
                                        <td><img src="./assets/images/boy.png" class="img-fluid" alt="Responsive image"></td>
                                        <td><?php echo $data['customer_email']; ?></td>
                                        <td><?php echo $data['customer_name']; ?></td>
                                        <td><?php echo $data['customer_phone']; ?></td>
                                        
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <div class="form-group text-center">
                            <a class="btn btn-secondary w-25 btn" href="./index.php">Home</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include './layout/footer.php'?>
  </body>
</html>