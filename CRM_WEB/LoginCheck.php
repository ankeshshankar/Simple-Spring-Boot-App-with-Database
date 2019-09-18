<?php
$email = $_POST['username'];
$pass = $_POST['password'];

$url = 'http://localhost:8080/login/newUser';
$fields = array(
    'email' => $email,
    'pass' => $pass,
);
foreach ($fields as $key => $value) {$fields_string .= $key . '=' . $value . '&';}
rtrim($fields_string, '&');
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, count($fields));
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="./assets/css/shards.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <title>Done</title>
</head>
<body>
    <form>
    <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                <div class="col-12 text-center">
                    <h1 class="font-weight-light text-white"><?php $result = curl_exec($ch);curl_close($ch);?></h1>
                    <a class="card-link btn btn-dark" href="./index.php">Click here to go to Home Page</a>
                </div>
                </div>
            </div>
    </header>
</form>
</body>
</html>
