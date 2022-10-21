<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="contact.css" type="text/css">
</head>
<body>

<h3>Contactez-nous</h3>

<div class="container">
  <form method="post">
    <label for="fname">Nom</label>
    <input type="text" id="fname" name="firstname" placeholder="Your last name..">

    <label for="lname">Prenom</label>
    <input type="text" id="lname" name="lastname" placeholder="Your name..">

    <label for="country">Pays</label>
    <select id="country" name="country">
      <option value="australia">Maroc</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject">Votre commentaire</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
<?php

require 'ConnectionBD.php';

    $firstname = $_POST['firstname'];
    $lastname = !empty($_POST['lastname']) ? $_POST['lastname'] : NULL;
    $country = !empty($_POST['country']) ? $_POST['country'] : NULL;
    $subject = !empty($_POST['subject']) ? $_POST['subject'] : NULL;

    $stmt = $conn->prepare("insert into contactus (firstname, lastname, country ,subject) VALUES (:firstname, :lastname, :country,:subject)");
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':country', $country);
    $stmt->bindParam(':subject', $subject);
    // insert a row
    
    
    $stmt->execute();


    echo "<h1>Message sauvegarder...</h1>";
   
$conn = null;


?>