
<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location:index.php");
    exit;
}
include ('connect.php');
$email = $_GET['eml'];


$sql ="Select * from `orders` where `email` = '$email'";
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
            <a href="#" class="logo"><i class="fas fa-utensils"></i>foody</a>
        </header>
    </section>
    <section class="container">
        <div class="box">
        <div class="heading">
            <h3>confirmation</h3>
        </div>
        <div class="content">
            <table class="table">
                <tr>
                        <th>DESCRIPTION</th>
                        <th>INFORMATION</th>
                        
                    </tr>
                    <tr>
                        <th>Title</th>
                        <th><?php echo $title; ?></th>
                        
                    </tr>
                    <tr>
                        <th>Name</th>
                        <th><?php echo $fname; ?></th>
                        
                    </tr>
                    <tr>
                        <th>Email</th>
                        <th><?php echo $email; ?></th>
                        
                    </tr>
                    <tr>
                        <th>Phone No.</th>
                        <th><?php echo $phone; ?></th>
                        
                    </tr>
                    <tr>
                        <th>Item</th>
                        <th><?php echo $item; ?></th>
                        
                    </tr>
                    <tr>
                        <th>Quantity</th>
                        <th><?php echo $qty; ?></th>
                        
                    </tr>
                    <tr>
                        <th>Address</th>
                        <th><?php echo $add; ?></th>
                        
                    </tr>
                    <tr>
                        <th>City</th>
                        <th><?php echo $city; ?></th>
                        
                    </tr>
                    <tr>
                        <th>Status</th>
                        <th><?php echo $stat; ?></th>
                        
                    </tr>        
            </table>
            
            <div class="footer">
                <form method="post">
                <input type="submit" name="conf" value="Confirm" class="btns">
                <input type="submit" name="reje" value="Reject" class="btns">
                </form>
            </div>
            </div>
        </div>

    </section>
</body>


<?php
if(isset($_POST['conf']))
{	

    $price=array("cake"=>300,"burger"=>50,"pizza"=>220,"noodles"=>80,
    "ice cream"=>100,"fries"=>120,"paneer tikka"=>90,"chilli paneer"=>150,
    "cold drink"=>40,"ice tea"=>60,"coffee"=>30,"sweets"=>500);

    $st='Confirm';
    $amt=($price[$item])*($qty);

    $upd = "UPDATE `orders` SET `stat`='$st',`amount`='$amt' WHERE `email` = '$email'";
    if(mysqli_query($con,$upd)){
        echo "<script type='text/javascript'> alert('order confirmed')</script>";
        echo "<script type='text/javascript'> window.location='home1.php'</script>";
    }
} 
if(isset($_POST['reje']))
{	

    $st='Rejected';
    $amt=0;

    $upd = "UPDATE `orders` SET `stat`='$st',`amount`='$amt' WHERE `email` = '$email'";
    if(mysqli_query($con,$upd)){
        echo "<script type='text/javascript'> alert('order rejected')</script>";
        echo "<script type='text/javascript'> window.location='order.php'</script>";
    }
} 
            
    
?>
