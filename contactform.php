<?php

	if(isset($POST['submit'])){
		require'phpmailer/PHPMailerAutoload.php';
		$mail = new PHPMailer;
		
		$mail->Host='smtp.gmail.com';
		$mail->Port=587;
		$mail->SMTPAuth=true;
		$mail->SMTPSecure='tls';
		$mail->Username='sivagurunathannarayanasamy@nricoimbatore.github.io';
		$mail->Password='4forINDIA';
		
		$mail->setFrom($_POST['email'], $_POST['name']);
		$mail->addAddress('narayannricoimbatore@gmail.com');
		$mail->addReplyTo($POST['email'],$_POST['name']);
		
		$mail->isHTML(true);
		$mail->Subject='Form Submission: ' .$_POST['subject'];
		$mail->Body='<h1 align=center>Name : '.$_POST['name'].'<br>Email: '.$_POST['email'].'<br>Message:'.$_POST['msg'].'<h1>';
		
		if(!$mail->send()){
			$result="Please try again";
		}
		else{
			$result="Thanks ".$_POST['name']." for contacting us. We'll get back to you soon!";
	}

?>