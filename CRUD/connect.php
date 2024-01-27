<?php 
try{
$conn = new PDO("mysql:host=localhost;dbname=baza;",'root',"");
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
// echo "succes";
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();}