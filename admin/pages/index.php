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
    <title>Document</title>
</head>
<body>
      <h4 class="display-5 text-primary"> Dashboard</h4>
      <div class="row">
        <div class="card-columns">
            <div class="card shadow rounded bg-info text-light">
                <div class="border-b-2 card-header border-light">
                    <h4 class="display-5">
                        Registered Assets
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col"> 0/0 Assets</div>
                    </div>
                </div>
            </div>

            <div class="card shadow rounded bg-info text-light">
                <div class="border-b-2 card-header border-light">
                    <h4 class="display-5">
                        Assigned Assets
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col"> 0/0 Assets</div>
                    </div>
                </div>
            </div>

            <div class="card shadow rounded bg-info text-light">
                <div class="border-b-2 card-header border-light">
                    <h4 class="display-5">
                        Unassigned Assets
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col"> 0/0 Assets</div>
                    </div>
                </div>
            </div>

            
        </div>
      </div>

      
</body>
</html>

<?php
include('../include/footer.php');
?>