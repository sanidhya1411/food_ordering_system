<?php
include ('connect.php');
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location:index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/home1.css">
</head>
<body>
    <section class="nav">
        <header>
            <a href="#" class="logo"><i class="fas fa-utensils"></i>foody</a>
        </header>
    </section>
    <section class="container">
        <div class="box">
        <div class="heading">
            <h3>Orders</h3>
        </div>
        <div class="content">
            <table class="table">
            <thead>
                <tr style="font-size:1.2rem">
                    <th>Title</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone No.</th>
                    <th>Item</th>
                    <th>Quantity</th>
                    <th>Addess</th>
                    <th>City</th>
                    <th>Status</th>
                    <th>More</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                $sql =" Select * from `orders` ";
                $res = mysqli_query($con,$sql);

                while($row=mysqli_fetch_array($res))
                {
                    $title = $row['title'];
                    $fname = $row['fname'];
                    $email = $row['email'];
                    $phone = $row['phone'];
                    $item = $row['item'];
                    $qty = $row['quantity'];
                    $add = $row['addres'];
                    $city = $row['city'];
                    $stat = $row['stat'];

                    if($stat=="Not Confirm"){
                    echo "<tr>
                        <th>$title</th>
                        <th>$fname</th>
                        <th>$email</th>
                        <th>$phone</th>
                        <th>$item</th>
                        <th>$qty</th>
                        <th>$add</th>
                        <th>$city</th>
                        <th>$stat</th>

                        <th><button><a href='confirm.php?eml=".$email."'>action</a></button></th>
                        
                        </tr>";
                    }
                }
                ?>
                
            </tbody>      
            </table>
            <button><a href="ad_logout.php">logout</a></button>
            </div>
        </div>

    </section>
</body>
