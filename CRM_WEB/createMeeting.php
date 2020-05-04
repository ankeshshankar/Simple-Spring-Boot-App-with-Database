<?php
$ch = curl_init();
if (isset($_POST['submit'])) {
    $url = 'http://localhost:8080/meeting/newMeeting';
    $fields = array(
        'customer_firstname' => $_POST['firstName'],
        'customer_lastname' => $_POST['lastName'],
        'product_name' => $_POST['product'],
        'meeting_type' => $_POST['meetingType'],
        'potential' => $_POST['potential'],
        'follow_up' => $_POST['followUp'],
        'notes' => $_POST['notes'],
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

    <title>Create a meeting</title>
  </head>
  <body style="background: url('./assets/images/img-index-8.png'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-6 mx-auto">
                <div class="jumbotron bg-white">
                  <h1 class="display-5 text-center mb-5">Create Meeting</h1>
                    <form method="POST">
                    <div class="form-group mx-5">
                            <label><?php $result = curl_exec($ch);curl_close($ch);?></label>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control"  name="firstName" placeholder="First Name">
                            </div>
                            <div class="form-group col-md-6">
                            <label for="lastName">Last Name</label>
                            <input type="text" class="form-control" name="lastName" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="product">Product</label>
                            <input type="text" class="form-control"  name="product" placeholder="Enter Prodcut">
                        </div>
                        <div class="form-group">
                            <label for="meetingType">Meeting Type</label>
                            <select id="meetingType" name="meetingType" class="form-control ">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="potential">Potential</label>
                            <select  name="potential" class="form-control ">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="followUp">Follow Up ?</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio"  name="followUp" value="1">
                                <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio"  name="followUp" value="0">
                                <label class="form-check-label" for="inlineCheckbox2">No</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="notes">Notes</label>
                            <textarea class="form-control"  name="notes" rows="3"></textarea>
                        </div>
                        <div class="form-group text-center"> <button type="submit" name ="submit" class="btn btn-primary btn-lg">Create Meeting</button> </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include './layout/footer.php' ?>
  </body>
</html>
