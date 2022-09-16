<?php


session_start();
include('../include/connect.php');



// if(isset($_POST['delete_asset']))
// {
//     echo '<script>alert("do you want to delete this asset?")</script>';
   
//     $asset_id =  mysqli_real_escape_string($conn, $_POST['delete_asset']);

    

//     $query = "DELETE FROM asset WHERE id='$asset_id'";
//     $query_run = mysqli_query($conn, $query);
//     if($query_run)
//     {
//         $_SESSION['message'] = "Asset deleted successfully";
//         header("location: index.php");
//         exit(0);
//     }

//     else
//     {
//         $_SESSION['message'] = "Asset not deleted";
//         header("location: index.php");
//         exit(0);

//     }

// }



if(isset($_POST['update_asset']))
{
    $asset_id =  mysqli_real_escape_string($conn, $_POST['asset_id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $model = mysqli_real_escape_string($conn, $_POST['model']);
    $serialNumber = mysqli_real_escape_string($conn, $_POST['serialNumber']);
    $macAddress = mysqli_real_escape_string($conn, $_POST['macAddress']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    //$name = mysqli_real_escape_string($con, $_POST['name']);

    $query = "UPDATE asset  SET name='$name', model='$model', serialNumber='$serialNumber',macAddress='$macAddress', Location='$location' WHERE id='$asset_id'";
    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Asset updated successfully";
        header("location: registered_assets.php");
        exit(0);
    }

    else
    {
        $_SESSION['message'] = "Asset not update";
        header("location:  registered_assets.php");
        exit(0);

    }

}


if(isset($_POST['save_asset']))
{
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $model = mysqli_real_escape_string($conn, $_POST['model']);
    $serialNumber = mysqli_real_escape_string($conn, $_POST['serialNumber']);
    $macAddress = mysqli_real_escape_string($conn, $_POST['macAddress']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    //$name = mysqli_real_escape_string($con, $_POST['name']);

    $query = "INSERT INTO asset (name,model,serialNumber,macAddress,Location) VALUES('$name',' $model','$serialNumber',' $macAddress','$location')";

    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Asset registered successfully";
        header("location: register_asset.php");
        exit(0);
    }

    else
    {
        $_SESSION['message'] = "Asset not registered";
        header("location: asset_create.php");
        exit(0);

    }

}
if(isset($_POST['delete_asset']))
{
    echo '<script>alert("do you want to delete this asset?")</script>';
   
    $asset_id =  mysqli_real_escape_string($conn, $_POST['delete_asset']);

    

    $query = "DELETE FROM asset WHERE id='$asset_id'";
    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Asset deleted successfully";
        header("location: registered_assets.php");
        exit(0);
    }

    else
    {
        $_SESSION['message'] = "Asset not deleted";
        header("location: registered_assets.php");
        exit(0);

    }



}


if(isset($_POST['save_user']))
{
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $role = mysqli_real_escape_string($conn, $_POST['role']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    //$name = mysqli_real_escape_string($con, $_POST['name']);

    $query = "INSERT INTO users (fname,lname,gender,role,phone,email) VALUES(' $fname',' $lname','$gender','$role',' $phone ','$email')";

    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['message'] = "user registered successfully";
        header("location: register_user.php");
        exit(0);
    }

    else
    {
        $_SESSION['message'] = "user not registered";
        header("location: register_user.php");
        exit(0);

    }

}

if(isset($_POST['update_user']))
{
    $asset_id =  mysqli_real_escape_string($conn, $_POST['user_id']);
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $role = mysqli_real_escape_string($conn, $_POST['role']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    //$name = mysqli_real_escape_string($con, $_POST['name']);
    $query = "UPDATE asset  SET fname='$fname', lname='$lname', gender='$gender',role='$role ', phone='$phone' WHERE id='$user_id'";
    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['message'] = "user updated successfully";
        header("location: registered_users.php");
        exit(0);
    }

    else
    {
        $_SESSION['message'] = "user not update";
        header("location:  registered_users.php");
        exit(0);

    }

}




?>