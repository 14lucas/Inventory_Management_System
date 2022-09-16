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
<div class="fluid-container">
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
                                <th>First name</th>
                                <th>Last name</th>
                                <th>Gender</th>
                                <th>Role</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM users";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $user)
                                {
                                    ?>
                                    <tr>
                                        <td><?= $user['id']; ?></td>
                                        <td><?=  $user['fname']; ?></td>
                                        <td><?=  $user['lname']; ?></td>
                                        <td><?=  $user['gender']; ?></td>
                                        <td><?=  $user['role']; ?></td>
                                        <td><?=  $user['phone']; ?></td>
                                        <td><?=  $user['email']; ?></td>
                                        <td>
                                        <a href="asset_view.php?id=<?= $user['id'];?>" class="btn btn-info btn-sm">view</a>
                                            <a href="asset_edit.php?id=<?= $user['id'];?>" class="btn btn-success btn-sm">edit</a>

                                            <form action="code.php" method="POST" class="d-inline">
                                            <button type="submit" name="delete_user" value="<?=$user['id'];?>" class="btn btn-danger btn-sm">delete</button>

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