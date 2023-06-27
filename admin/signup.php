  <?php
  $showAlert=false;
  $showError=false;
  if($_SERVER["REQUEST_METHOD"]=="POST"){
  include 'connect.php';
  $username=$_POST["username"];
  $password=$_POST["password"];
  $cpassword=$_POST["cpassword"];
  $existsql="SELECT * FROM `signup` WHERE `user_name`='$username'";
  $res=mysqli_query($con,$existsql);

  $rows=mysqli_num_rows($res);
  if($rows>0){
  $exists=true;
  }
  else{
  $exists=false;
  }


  if(($password==$cpassword) && $exists==false){ 
  $sql="INSERT INTO `signup` (`user_name`,`password`,`date`) VALUES ('$username','$password',current_timestamp())";
  $result= mysqli_query($con,$sql);
  if($result){
  $showAlert=true;
  }

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
  <title>signup</title>
  </head>
  <body>
  <?php
  if($showAlert){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>success!</strong> account created
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>';
  header("location: login.php");
  }
  if($showError){
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>error!</strong>either passwords do not match or username alredy exists.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>';
  }
  ?>

  <div class="container">
    <div class="heading">
    <h1>sign <span>up</span></h1>
    </div>
    <div class="form">
    <form action="/project/Admin/signup.php" method="post">
    <div class="form-group">
    <label for="username">username</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="username" placeholder="Enter username" required>

    </div>
    <div class="form-group">
    <label for="password">password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
    </div>
    <div class="form-group">
    <label for="confirm password">confirm password</label>
    <input type="password" class="form-control" id="confirm password" name="cpassword" placeholder="confirm password" required>
    </div>
    <button type="submit" class="btn btn-danger" style="margin-bottom:0.8rem">signup</button>
    </form>
    <a href="login.php" style="color:red">already have account</a>
    </div>

  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  </html>