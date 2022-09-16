<?php
session_start();
// include('../include/security.php');
include('../include/connect.php');
include('../include/sideNav.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../include/sideNav.css">
    <title>Document</title>
</head>
<body>
     <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
            <div class="form-group p-4 card shadow rounded">
             <form action="code.php" method="POST" class="needs-validation">
            

             <?php

include('message.php');

?>


             <h4 class="display-5 text-primary"> Register Asset </h4>
            <div class="">
                <label for="name">name</label>
                <input type="text" name="name" placeholder="Enter asset name" class="form-control">
                <span class="text-danger"></span>
            </div>
            <hr class="mt-2">
            <div class="">
                <label for="model">model</label>
                <input type="text" name="model" placeholder="Enter model" class="form-control">
                <span class="text-danger"></span>
            </div>
            <hr class="mt-2">
            <div class="">
                <label for="serialNumber">serial number</label>
                <input type="text" name="serialNumber" placeholder="Enter serial number" class="form-control">
                <span class="text-danger"></span>
            </div>
            <hr class="mt-2">
            <div class="">
                <label for="macAddress">MAC address</label>
                <input type="text" name="macAddress" placeholder="Enter MAC address" class="form-control">
                <span class="text-danger"></span>
            </div>
            <hr class="mt-2">
            <div class="">
                <label for="location">location</label>
                <input type="text" name="location" placeholder="Enter location" class="form-control">
                <span class="text-danger"></span>
            </div>
            <hr class="mt-2">
            <button type="submit" style="width: 70%; margin : auto" name="save_asset" class="btn btn-block btn-primary text-white">save</button>
        </form>
     </div>
            </div>
            <div class="col"></div>
        </div>
         
     </div>
</body>
</html>

<?php
include('../include/footer.php');

?>

