<?php
include ('connect.php');
session_start();
if(!isset($_SESSION['loggedinc']) || $_SESSION['loggedinc']!=true){
    header("location:index.php");
    exit;
}
$email=$_SESSION['email'];

$sql = "SELECT * FROM `orders` WHERE `email`='$email'";
$res=mysqli_query($con,$sql);
$os = mysqli_num_rows($res);

if($os>0){
$row=mysqli_fetch_array($res);
$stat=$row['stat'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>confirm</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/confirm.css">
</head>
<body>
    <section class="nav">
        <header>
            <a href="#" class="logo"><i class="fas fa-utensils"></i>food</a>
            <nav class="navbar">
                <a href="ad_logout.php">logout</a>
            </nav>
        </header>
    </section>
    <section class="container">
        <div class="box">
        <div class="heading">
        <?php

        if($os==0){
        echo '<div class="content">
        <p>You have not placed any order </p>
        </div>';

        }
        else if($stat=="Rejected"){
        echo '<div class="content">
            <p>Your order is cancelled due to unavailabity of item </p>
        </div>';
        }
        else if($stat=="Not Confirm"){
            echo '<div class="content">
            <p>Your order is in queue</p>
        </div>';
            
        }
        else{
            header("location:invoice.php");
        }
        ?>
            
        </div>
        </div>

    </section>
</body>