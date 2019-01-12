<?php

try{
$con = new PDO ("mysql:host=mydb.cwoidj6mv3sy.eu-west-1.rds.amazonaws.com;dbname=mydb","mydb","13446526"); 
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "connected";
}
catch(PDOException $e)
{
echo "error:".$e->getMessage(); 
}

?>