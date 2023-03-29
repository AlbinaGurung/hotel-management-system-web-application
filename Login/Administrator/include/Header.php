<?php
session_start();
require_once("connect.php");
if(!isset($_SESSION['KEY']))
{
   // echo "<script>location.assign('logout.php');</script>"
   Header(location: './logout.php');
    die;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminpanel-Online Hotel Management System</title>
    <link rel="stylesheet" href="../Res/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Res/css/style.css">
</head>
<body class="text-info">
    <div class="container-fluid">
        <div class="row bg-blue text-Black">
            
            <div class="col-1">
                <img src="../res/images/logo.jpg" class="text-center" width="80 px">
            </div>
            <div class="col-11 my-auto">
            <h3>Online Hotel Management System -<small> Welcome <?php echo $_SESSION['username'];?> </small></h3>
            </div>
</div>
</div>
