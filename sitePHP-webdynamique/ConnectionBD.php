<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "bd_sitephp";


$servername = "localhost";
$username = "id13313831_root";
$password = "H/Pg<V4H>PH(XB^J";
$database="id13313831_bd_sitephp";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
