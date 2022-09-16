<?php
session_start();
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
    <title>Registered asset</title>
</head>
<body>
     <div class="container">
<?php
include('message.php');
?>
         <div class="card shadow rounded p-3">
             <div class="table-responsive">
            <h4 class="display-5 text-primary"> Registered Asset </h4>
            <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>name</th>
                                <th>model</th>
                                <th>serial number</th>
                                <th>MAC Address</th>
                                <th>location</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM asset";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $asset)
                                {
                                    ?>
                                    <tr>
                                        <td><?= $asset['id']; ?></td>
                                        <td><?= $asset['name']; ?></td>
                                        <td><?= $asset['model']; ?></td>
                                        <td><?= $asset['serialNumber']; ?></td>
                                        <td><?= $asset['macAddress']; ?></td>
                                        <td><?= $asset['Location']; ?></td>
                                        <td>
                                        <a href="user_view.php?id=<?= $asset['id'];?>" class="btn btn-info btn-sm">view</a>
                                            <a href="user_edit.php?id=<?= $asset['id'];?>" class="btn btn-success btn-sm">edit</a>

                                            <form action="code.php" method="POST" class="d-inline">
                                            <button type="submit" name="delete_user" value="<?=$asset['id'];?>" class="btn btn-danger btn-sm">delete</button>

                                            </form>
                                        </td>
                                    </tr>

                                    <?php
                         
                                }
                            }
                            else
                            {
                                echo"<h5>No Record Found</h5>";
                            }

                            ?>
                        </tbody>
                    </table>
        </div>
     </div>
     </div>
</body>
</html>

<?php
include('../include/footer.php');
?>