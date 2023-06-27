<?php
include('connect.php');
session_start();
if(!isset($_SESSION['loggedinc']) || $_SESSION['loggedinc']!=true){
    header("location:index.php");
    exit;
}
$email=$_SESSION['email'];
$rs ="Rs";
$sql= "SELECT * FROM `orders` WHERE `email`='$email'";
$res = mysqli_query($con,$sql);

$row=mysqli_fetch_array($res);
$title = $row['title'];
$fname = $row['fname'];
$email = $row['email'];
$phone = $row['phone'];
$item = $row['item'];
$qty = $row['quantity'];
$add = $row['addres'];
$city = $row['city'];
$amt = $row['amount'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>order</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/invoice.css">
</head>
<body>
    <section class="nav">
        <header>
            <h3>invoice</h3>
        </header>
    </section>
    <section class="container">
        <div class="content">
            <p class="logo"><i class="fas fa-utensils"></i>foody</p>
            <p>9165362065</p>
            <p>India</p>      
        </div>
    </section>

    <section class="box">
        <div class="data">
        <table class="table">
            <tr>
                <th>name</th>
                <th><?php echo $title.$fname; ?></th>
            </tr>
            <tr>
                <th>email</th>
                <th><?php echo $email; ?></th>
            </tr>
            <tr>
                <th>phone</th>
                <th><?php echo $phone; ?></th>
            </tr>
            <tr>
                <th>item</th>
                <th><?php echo $item; ?></th>
            </tr>
        </table>
        <table>
            <tr>
                <th>quantity</th>
                <th><?php echo $qty; ?></th>
            </tr>
            <tr>
                <th>amount</th>
                <th><?php echo $rs.$amt; ?></th>
            </tr>
            <tr>
                <th>address</th>
                <th><?php echo $add; ?></th>
            </tr>
            <tr>
                <th>city</th>
                <th><?php echo $city; ?></th>
            </tr>
    
        </table>
        <div>
        <p>your order will be delivered quickly</p>
        <p>thank you for ordering</p>
        <p>have a nice day !!!</p>
        <br>
        <p><a href="ad_logout.php" style="color:white;text-decoration:none ;font-size:1.5rem">logout</a></p>
        </div>
        </div>
    </section>
</body>
<?php
$del="DELETE FROM `orders` WHERE `email`='$email'";
$red=mysqli_query($con,$del);
?>