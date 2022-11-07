<?php
session_start();
$con = mysqli_connect('localhost', 'root', 'db_password', 'db_name') or die("Unable to connect");
if(isset($_SESSION['nlips']))
{
   echo '<script>window.location.replace("profile");</script>';
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/nlip-logo.png">

    <title>heading</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
