<?php 
include("insert.php");
$name=$_POST['clintname'];
$email=$_POST['clintemail'];
$mobile=$_POST['clintnumber'];
$hometype=$_POST['clinthometype'];
$sizeofhome=$_POST['clintsizeofhome'];
$city=$_POST['clintcity'];



$to      = 'tradewebsite2702@gmail.com';
$subject = 'New User want to contact';


$msg="<table>
<tr><td>Name :</td><td>$name</td></tr>
<tr><td>Email :</td><td>$email</td></tr>
<tr><td>Mobile :</td><td>$mobile</td></tr>
<tr><td>Home_Type :</td><td>$hometype</td></tr>
<tr><td>Size_Of_House :</td><td>$sizeofhome</td></tr>
<tr><td>City :</td><td>$city</td></tr>
</table>";


$headers = 'From: tradewebsite2702@gmail.com' . "\r\n" .
'Reply-To: tradewebsite2702@gmail.com' . "\r\n" .
'Content-type:text/html;charset=UTF-8' . "\r\n".
'X-Mailer: PHP/' . phpversion();

$result = mail($to, $subject, $msg, $headers);
if( $result ) {
   echo 'Success';
}else{
   echo 'Fail';
}

?>