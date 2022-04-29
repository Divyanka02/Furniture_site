<?php
include('insert.php');
$msg="";
if(isset($_POST['submit'])){
	$name=new mysqli_real_escape_string($link,$_POST['clintname']);
	$email=new mysqli_real_escape_string($link,$_POST['clintemail']);
	$mobile=new mysqli_real_escape_string($link,$_POST['clintnumber']);
	$hometype=new mysqli_real_escape_string($link,$_POST['clinthometype']);
	$sizeofhome=new mysqli_real_escape_string($link,$_POST['clintsizeofhome']);
	$city=new mysqli_real_escape_string($link,$_POST['clintcity']);
	
	
	
	
	echo "WELCOME";
	$msg="WE will contact you soon";	
	$html="<table>
                <tr><td>Name :</td><td>$name</td></tr>
                <tr><td>Email :</td><td>$email</td></tr>
                <tr><td>Mobile :</td><td>$mobile</td></tr>
                <tr><td>Home_Type :</td><td>$hometype</td></tr>
                <tr><td>Size_Of_House :</td><td>$sizeofhome</td></tr>
                <tr><td>City :</td><td>$city</td></tr>
            </table>";
	
	include('smtp/PHPMailerAutoload.php');
	$mail=new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host="smtp.gmail.com";
	$mail->Port=587;
	$mail->SMTPSecure="tls";
	$mail->SMTPAuth=true;
	$mail->Username="tradewebsite2702@gmail.com";
	$mail->Password="Gautam@123";
	$mail->SetFrom("tradewebsite2702@gmail.com");
	$mail->addAddress("tradewebsite2702@gmail.comm");
	$mail->IsHTML(true);
	$mail->Subject="Contact Us";
	$mail->Body=$html;
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if($mail->send()){
		echo "Mail send";
	}else{
		echo "Error occur";
	}
	
}
else{
	echo "Error";
}
?>