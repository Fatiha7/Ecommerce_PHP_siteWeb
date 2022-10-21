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
      <li><a href="panier.php">panier</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  
</div>
<a href="javascript:history.back()">Retour</a>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
<style>
  
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}
a {
                        text-decoration: none;
                        background-color:pink; 
                        color: #fff;
                        font-size:30px;
                         }

                        a:hover {
                        text-decoration: none;
                        background-color: #fff;
                        color: pink;
                        }
/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
 .signupbtn {
 
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}

</style>
</head>
<body>

<form action="" method="post" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
	<label for="name"><b>Nom complet</b></label>
    <input type="text" placeholder="votre nom..." name="name" required>
    <label for="numtel"><b>Numero de Telephone</b></label>
    <input type="text" placeholder="votre telephone..." name="numtel" required>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="votre Email..." name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="votre Password..." name="password" required>

    
    
    
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>

</body>
</html>
<?php
  $motdepass =!empty($_POST['password']) ? $_POST['password'] :null ;
  $nom = !empty($_POST['name']) ? $_POST['name'] : NULL;
  $email = $_POST['email'];
  $numphone = !empty($_POST['numtal']) ? $_POST['numtal'] : NULL;
require '../includes/ConnectionBD.php';

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO client (numclient, email, motdepass,nom,numphone)
    VALUES (numclient,:email, :motdepass, :nom,:numphone)");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':motdepass', $motdepass);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':numphone', $numphone);
    // insert a row
    
    $stmt->execute();


    echo "<h1>registred successfully...</h1>";
   
$conn = null;


?>