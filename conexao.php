<?php 

try 
{
    $options = array(PDO::ATTR_PERSISTENT => true,
                     PDO::ATTR_ERRMODE    => PDO::ERRMODE_EXCEPTION,
                     PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
    
    
    $conn = new PDO("mysql:host=localhost;dbname=ajax", "root", "", $options);
    
} catch(Exception $e) {
    $e->getMessage();
}

?>