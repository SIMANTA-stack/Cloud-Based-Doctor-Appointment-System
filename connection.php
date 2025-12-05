<?php
$servername = "sql205.infinityfree.com";
$username = "if0_40408609";  
$password = "V0NJT9I1bbgZIR"; 
$dbname = "if0_40408609_edoc_db"; 

$database = new mysqli($servername, $username, $password, $dbname);

if ($database->connect_error) {
    die("Échec de la connexion : " . $database->connect_error);
}
?>