<?php
session_start();
$message = "";
require '../includes/ConnectionBD.php';

    if(isset($_POST["login"])){
      if(empty($_POST["email"]) || empty($_POST["password"])){
        $message="<label>All field is required</label>";
        
      }
      else{
        $query="select email,motdepass from client where email= :email and motdepass= :password";
        $satetment=$conn->prepare($query);
        $satetment->execute(

                  array(
                     'email'=> $_POST["email"],
                     'password'=>$_POST["password"] 
                  )
            );
            $count=$satetment->rowCount();
            if($count>0)
            {
              $_SESSION["email"]=$_POST["email"];
              header("Location:bienvenue.php");
            }
            else{
              $message='<label>Username or Password is wrong</label>';
              
            }
      }
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>InYour_Area</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Spring</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="../index.php">Home</a></li>
      
      <li><a href="../includes/produits">Produits</a></li>  
      
      <li><a href="../includes/contact.php">contactez-nous</a></li>
      <li><a href="../includes/panier.php">panier</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="sign.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      
    </ul>
  </div>
</nav>
  
<div class="container">
  
</div>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="login.css" type="text/css">
</head>
<body>

<h2>Bienvenue !</h2>
<div class="bg-img">

  <form  method="POST" class="container">
    <h1>Login</h1>
    
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit" class="btn" name="login">Login</button>
    <?php
    if(isset($message)){
      echo '<label class="text-danger">'.$message.'</label><br>';
    }
  ?>
  <?php
  if(isset($_POST['login'])){
  $email = !empty($_POST['email']) ? $_POST['email'] : NULL;
  $pass = !empty($_POST['password']) ? $_POST['password'] : NULL;
  try{
    require_once("authentification.php");
    is_valid_email($email);
    echo "<br>";
    validpassword($pass);   
    echo "<br><br>";}catch(Exception $e){
      $e->getMessage();
    }}
  ?>
  </form>
</div>


</body>
</html>
<?php

?>