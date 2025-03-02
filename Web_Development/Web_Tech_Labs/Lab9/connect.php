<?php
    // your database credentials (check handout for localhost and Dal FCS server details)
    $hostname = "db.cs.dal.ca";
    $user = "kalam";
    $password = "d39HXhTbRSRxSRoXZRCwwqv67";
    $database = "kalam";

    // establish connection with DB
    try{
    $con = new PDO("mysql:host=$hostname;dbname=$database", $user, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }
?>