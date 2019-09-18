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

    <title>Home</title>
  </head>
  <body>
    <div class = "container-fluid p-0">
        <?php include './layout/menu.php'?>

        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                <div class="col-12 text-center">
                    <h1 class="font-weight-light text-white">Welcome to Chill Maro Re CRM Solutions</h1>
                    <p class="lead text-light">A great solutions for your CRM needs</p>
                </div>
                </div>
            </div>
        </header>

        <div class="jumbotron m-3">
            <h1 class="display-4">Simple. Elegant. Awesome.</h1>
            <p class="lead"> Hey man our name itself implies that you can chill out and let us handle your customer management needs.. So why dont you take a vaca and leave the CRM to us..</p>
            <p class="lead"> <a class="btn btn-primary btn-lg" href="" role="button">Know More</a> </p>
        </div>

        <div class="row m-1 mb-4">
            <div class="col-sm-12 col-md-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title"> Add Customer </h5>
                        <p class="card-text">Feeling lonely why dont you add a new Customer...</p>
                        <a class="card-link" href="./addCustomer.php"> Lets Go! </a>
                        <a class="card-link" href="./viewCustomer.php"> View Customers! </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title"> Add Product </h5>
                        <p class="card-text">Got new stock on you, why not add it into out invetory...</p>
                        <a class="card-link" href="./addProduct.php"> Lets Go! </a>
                        <a class="card-link" href="./viewProduct.php"> View Products! </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title"> Create Meeting </h5>
                        <p class="card-text">Growing up in life I see, i'm here to help you manage you life...</p>
                        <a class="card-link" href="./createMeeting.php"> Lets Go! </a>
                        <a class="card-link" href="./viewMeeting.php"> Meeting List! </a>
                    </div>
                </div>
            </div>
        </div>
    <?php include './layout/footer.php' ?>
  </body>
</html>