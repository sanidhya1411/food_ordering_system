<?php
session_start();
if(!isset($_SESSION['logged']) || $_SESSION['logged']!=true){
    header("location:signup.php");
    exit;
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    include 'connect.php';

    $check="SELECT * FROM `orders` WHERE `email` = '$_POST[email]'";
    $rs = mysqli_query($con,$check);
    $rows=mysqli_num_rows($rs);
    if($rows > 0) {
        echo "<script type='text/javascript'> alert('Order already placed')</script>";
    }

    else
    {
        $new ="Not Confirm";
        $title=$_POST["title"];
        $name=$_POST["fname"];
        $email=$_POST["email"];
        $num=$_POST["phone"];
        $item=$_POST["item"];
        $qty=$_POST["qty"];
        $add=$_POST["add"];
        $city=$_POST["city"];

        $newUser= "INSERT INTO `orders` (`title`, `fname`, `email`, `phone`,`item`,`quantity`,`addres`,`city`,`stat`) VALUES ('$title','$name','$email','$num','$item','$qty','$add','$city','$new')";
        if (mysqli_query($con,$newUser))
        {
            echo "<script type='text/javascript'> alert('Your order has been placed')</script>";
            
        }
        else{
            echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
        }
    }
 }
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
    <link rel="stylesheet" href="css/orders.css">
</head>
<body>
    <section class="nav">
        <header>
            <a href="#" class="logo"><i class="fas fa-utensils"></i>foody</a>
            <nav class="navbar">
                <a href="logout.php">logout</a>
            </nav>
        </header>
    </section>

    <section class="body">
        <section class="container">
        <div class="title">order</div>
        <form action="/project/Admin/order.php" method="post">
        <div class="user-details">
            <div class="form-group">
                <label>Title</label>
                <select name="title" class="form-control" required >
                    <option value selected ></option>
                    <option value="Dr.">Dr.</option>
                    <option value="Miss.">Miss.</option>
                    <option value="Mr.">Mr.</option>
                    <option value="Mrs.">Mrs.</option>
                    <option value="Prof.">Prof.</option>
                    <option value="Rev .">Rev .</option>
                    <option value="Rev . Fr">Rev . Fr .</option>
                </select>
            </div>
            <div class="form-group">
                <label>Full Name</label>
                <input name="fname" placeholder="Enter your name" class="form-control" required>
                
            </div>
            <div class="form-group">
                <label>Email</label>
                <input name="email" style= "text-transform:none" type="email" placeholder="Enter Your Email" class="form-control" required>
                
            </div>
            <div class="form-group">
                <label>Phone No.</label>
                <input name="phone" type ="text" placeholder="Enter your no." class="form-control" required>
                
            </div>
        </div>
        <div class="details">
            <?php
            $items=array("cake"=>"300","burger"=>"50","pizza"=>"220","noodles"=>"80",
            "ice cream"=>"100","fries"=>"120","paneer tikka"=>"90","chilli paneer"=>"150",
            "cold drink"=>"40","ice tea"=>"60","samosa"=>"50","sweets"=>"500");
            ?>
            <div class="form-group">
                <label>Item</label>
                <select name="item" class="form-control" required>
                    <option value selected ></option>
                    <?php
                    foreach($items as $key => $value):
                    echo '<option value="'.$key.'">'.$key.'</option>'; //close your tags!!
                    endforeach;
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label>Quantity</label>
                <input name="qty" type="number" placeholder="Enter your quantity" min="1" max="10" class="form-control" required> 
            </div>
            <div class="form-group">
                <label>Address  </label>
                <input name="add" placeholder="enter your address" class="form-control" required>
            </div>
            <div class="form-group">
                <label>City</label>
                <input name="city" placeholder="Enter your city" class="form-control" required>
            </div>
            <button type="submit" class="btn">submit</button>



        </form>
        </div>


    </section>
    </section>
    
   

    
</body>
</html>