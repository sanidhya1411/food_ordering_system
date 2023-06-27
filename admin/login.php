<?php
session_start();

$login=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
  include 'connect.php';
  $username=$_POST["username"];
  $password=$_POST["password"];
  
  $sql = "SELECT * FROM `signup` WHERE `user_name` = '$username' AND `password`='$password'";
  $result = mysqli_query($con,$sql);
  $num = mysqli_num_rows($result);
  if($num==1){
    $login=true;
    session_start();
    $_SESSION['logged']=true;
    $_SESSION['username']=$username;
    header("location: ../index.php");

  }
  else{
    $showError=true;
  }

}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>login</title>
  </head>
  <body>
    <?php
    // if($login){
    //   echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    //   <strong>success!</strong> you are logged in
    //   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //     <span aria-hidden="true">&times;</span>
    //   </button>
    // </div>';
    // }
    if($showError){
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>error!</strong> invalid credentials.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
    }
    ?>
   
    <div class="container">
        <div class="heading">
        <h1>log <span>in</span></h1>
        </div>
        <div class="form">
        <form action="/project/Admin/login.php" method="post">
    <div class="form-group">
        <label for="username">username</label>
        <input type="text" class="form-control" id="username" name="username" aria-describedby="username" placeholder="Enter username" required>
   
    </div>
    <div class="form-group">
        <label for="password">password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
    </div>
  
        <button type="submit" class="btn btn-danger">login</button>
  </form>
        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>