<?php

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
    <title>view asset details</title>
</head>
<body>
     <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6"> 
            <div class="form-group p-4 card shadow rounded">

            <?php
                if(isset($_GET['id']))
                {
                    $asset_id = mysqli_real_escape_string($conn, $_GET['id']);
                    $query = "SELECT * FROM asset WHERE id='$asset_id'";
                    $query_run = mysqli_query($conn, $query);
                    if(mysqli_num_rows($query_run) > 0)
                    {
                        $asset = mysqli_fetch_array($query_run);
                        ?>


            
             <h4 class="display-5 text-primary"> view asset details </h4>

             <input type="hidden" name="asset_id" value="<?= $asset['id']; ?>">

            
            <div class="">
                <label>ID: </label>
                <p class="" >
                        <?=$asset['id'] ?>
                </p>
                <span class="text-danger"></span>
            </div>
            <hr class="mt-2">
            <div class="">
            <label>name: </label>
                <p class="" >
                        <?=$asset['name'] ?>
                </p>
                <span class="text-danger"></span>
            </div>
            <hr class="mt-2">
            <div class="">
            <label>model: </label>
                <p class="" >
                        <?=$asset['model'] ?>

                </p>
                <span class="text-danger"></span>
            </div>
            <hr class="mt-2">
            <div class="">
            <label>serial number: </label>
                <p class="" >
                        <?=$asset['serialNumber'] ?>

                </p>
                <span class="text-danger"></span>
            </div>
            <hr class="mt-2">
            <div class="">
            <label>MAC address: </label>
                <p class="" >
                        <?=$asset['macAddress'] ?>

                </p>
                <span class="text-danger"></span>
            </div>
            <hr class="mt-2">
            <div class="">
            <label>location: </label>
                <p class="" >
                        <?=$asset['Location'] ?>

                </p>
                <span class="text-danger"></span>
            </div>
            <hr class="mt-2">


<?php

}
else
{
    echo "<h4>No such id Found</h4>";

}
}

?>
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

