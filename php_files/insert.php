<?php
$link = new mysqli("localhost" , "root", "","fruniture_site");
if($link ==false){
    die("ERROR : Could not connect1 ".$link->connection_error);

}
else{
    echo "<br> Connection is established sucessfully ".$link->host_info;

}
$sql = "INSERT INTO contactus(clintname,clintemail,clintnumber,clinthometype,clintsizeofhome,clintcity)VALUES('$_POST[clintname]','$_POST[clintemail]','$_POST[clintnumber]','$_POST[clinthometype]','$_POST[clintsizeofhome]','$_POST[clintcity]')";
if($link->query($sql)==true){
    echo "<br>ROW inserted sucessfully";

}
else{
    echo("<br>ERROR : Could not connect ".$link->error);

}

$link->close();
?>