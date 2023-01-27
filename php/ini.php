<?php 

    $host = 'localhost'; 
    $name = 'products'; 
    $username = 'root'; 
    $password = ''; 

 
    try
    {
        $pdo = new PDO('mysql:host='. $host .';dbname='.$name, $username, $password);
    }
    catch (PDOException $e)
    {
        exit('Error Connecting To DataBase');
    }

?>