<?php


$link = new mysqli("localhost" , "root", "");
if($link ==false){
    die("ERROR : Could not connect ".$link->connection_error);

}
$sql = "CREATE DATABASE fruniture_site";
if($link->query($sql)==true)
{
    echo "Database created sucessfully";
}
else{
    echo("ERROR : Could not connect $sql".$link->error);
}

$link = new mysqli("localhost" , "root", "","fruniture_site");
if($link ==false){
    die("ERROR : Could not connect ".$link->connection_error);

}
$sql = "CREATE TABLE contactus(id INT(20) PRIMARY KEY AUTO_INCREMENT, clintname VARCHAR(50),clintemail VARCHAR(50) NOT NULL,clintnumber INT(12),clinthometype VARCHAR(50),clintsizeofhome VARCHAR(50),clintcity VARCHAR(50))";
if($link->query($sql)==true){
    echo "Table created Scessfully";

}
else{
    echo("ERROR : Could not connect $sql".$link->error);
}

?>
