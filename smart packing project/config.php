<?php
$host = 'localhost';      
$dbname = 'karuhura';        
$username = 'root'; 
$password = ''; 

try {
    
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die("Error connecting to the database: " . $e->getMessage());
}
?>
