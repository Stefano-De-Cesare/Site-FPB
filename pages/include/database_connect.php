<?php 
$servername = "localhost";
$username = "id11952728_shiroserveradmin";
$password = "t9vmr&7h)w=Gw>\b";
$database = "id11952728_dbsugestoes";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    } catch(PDOException $e) {    
    echo "Connection failed: " . $e->getMessage();
    }
?>