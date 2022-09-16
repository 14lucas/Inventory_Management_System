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
    <title>Register user</title>
</head>
<body>
    <div class="container -mt-3">
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <div class="form-group card shadow rounded p-4">
                    <h4 class="display-5 text-primary text-center"> Register User</h4>
                    <form action="code.php" method="POST" class="needs-validation"> 

                    <?php

include('message.php');

?>
                        
                        <div class="mb-1">
                            <label for="Firstname">First name: </label>
                            <input type="text" placeholder="Enter first name" name="fname" class="form-control">
                        </div>
                        <hr class="mt-2">
                        <div class="mb-1">
                            <label for="Lasttname">Last name: </label>
                            <input type="text" placeholder="Enter Last name" name="lname" class="form-control">
                        </div>
                        <hr class="mt-2">
                        <div class="row mb-1">
                          <div class="col">
                              <div class="">
                                <label for="Gender">Gender</label> <br>
                                <input type="radio" name="gender" value="Female" class="mr-2"> Female
                                <input type="radio" name="gender" value="Male" class="ml-2 mr-2">Male
                              </div>
                          </div>
                            <div class="col">
                              <div class="mb-1">
                                 <label for="User Role">User Role</label>
                                 <select name="role" id="" class="form-control">
                                    <option value="">Select Role</option>
                                    <option value="ADMIN">ADMIN</option>
                                    <option value="CUSTOMER">CUSTOMER</option>
                                 </select>
                                 <!-- <input type="text" placeholder="Enter User Role" name="role" class="form-control"> -->
                               </div>
                            </div>
                        </div>
                       
                        <div class="mb-1">
                            <label for="Telephone">Telephone</label>
                            <input type="tel" placeholder="Enter Telephone" name="phone" class="form-control">
                        </div>
                        <hr class="mt-2">
                        <div class="mb-1">
                            <label for="Username or Email">Email</label>
                            <input type="email" placeholder="Enter Email" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="Password">Password</label>
                            <input type="password" placeholder="Enter Password" name="password" class="form-control">
                        </div>
                        <button style="width: 70%; margin : auto" name="save_user" class="btn btn-block btn-primary text-white">save</button>
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