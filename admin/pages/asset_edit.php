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
    <title>Edit asset</title>
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

    <form action="code.php" method="POST" class="needs-validation">
            
             <h4 class="display-5 text-primary"> Edit asset </h4>

             <input type="hidden" name="asset_id" value="<?= $asset['id']; ?>">

            
            <div class="">
                <label for="name">name</label>
                <input type="text" name="name" value="<?=$asset['name'];?>" placeholder="Enter asset name" class="form-control">
                <span class="text-danger"></span>
            </div>
            <hr class="mt-2">
            <div class="">
                <label for="model">model</label>
                <input type="text" name="model" value="<?=$asset['model'];?>" placeholder="Enter model" class="form-control">
                <span class="text-danger"></span>
            </div>
            <hr class="mt-2">
            <div class="">
                <label for="serialNumber">serial number</label>
                <input type="text" name="serialNumber" value="<?=$asset['serialNumber'];?>" placeholder="Enter serial number" class="form-control">
                <span class="text-danger"></span>
            </div>
            <hr class="mt-2">
            <div class="">
                <label for="macAddress">MAC address</label>
                <input type="text" name="macAddress" value="<?=$asset['macAddress'];?>" placeholder="Enter MAC address" class="form-control">
                <span class="text-danger"></span>
            </div>
            <hr class="mt-2">
            <div class="">
                <label for="location">location</label>
                <input type="text" name="location" value="<?=$asset['Location'];?>" placeholder="Enter location" class="form-control">
                <span class="text-danger"></span>
            </div>
            <hr class="mt-2">
            <button type="submit" style="width: 70%; margin : auto" name="update_asset" class="btn btn-block btn-primary text-white">update</button>
</form>
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

