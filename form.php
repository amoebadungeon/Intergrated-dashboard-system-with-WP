<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


	if(isset($_POST['submit'])){
		$msg = '';
		if (array_key_exists('userfile', $_FILES)) {
			
		$uploadfile = tempnam(sys_get_temp_dir(), hash('sha256', $_FILES['userfile']['name']));
		if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) 
		{
		require 'c:xampp\vendor\autoload.php';
		$mail = new PHPMailer;
		 $mail->SMTPDebug = 1;                                 // Enable verbose debug output
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.zoho.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'mustaqeem@myinsurans.com';                 // SMTP username
		$mail->Password = 'myin@123';                           // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                                    // TCP port to connect to

		
		$recepientName = $_POST['name'];
		$recepient = $_POST['email'];
	
		$mail->setFrom('mustaqeem@myinsurans.com', 'MYINSURANS.COM');
		$mail->addAddress($recepient,$recepientName);     // Add a recipient
		$mail->isHTML(true); 
		$mail->Subject =  'MYINSURANS.com Price Quotation';
		
		$mail->Body    = '<h1>Thank You for using our service</h1><p>Here attached along with this email is the price quotation you asked for.</p>';
		
		$mail->addAttachment($uploadfile, 'Quotation.pdf');
		$mail->AltBody = '<i> This message are automated generated, Please do not reply on this system</i>';
		
				
		}
		 
			if(!$mail->Send())
		{
		echo "Error sending: " . $mail->ErrorInfo;;
		}
		else
		{
			echo "<div class='alert alert-success' >
				  <strong>Success!</strong> Email is successfully sent.
				  </div>";
		}
	}
	
	
}


?>


<html>
<head>
<style>
 .alert {
   width:60%;    
 }
 </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container"><br>
 <div class="panel panel-info">
  <div class="panel-heading"><h1>Quotation Request</h1></div>
 <div class="panel-body">
<form method="POST"  action="form.php" enctype="multipart/form-data"> 


<p>Customer Name:<br>
<input type='text' class="form-control" name='name' required><br> 
<p>Email:<br>
<input type='text' class="form-control" name='email'required><br> 
<p>Subject:<br>
<textarea class="form-control" readonly rows='3' cols='20'>MYINSURANS.com Price Quotation</textarea><br>
<p>Body:<br>
<textarea class="form-control" rows="10" cols="30" readonly>Thank You for using our service, Here attached along with this email is the price quotation you asked for. MYINSURANS.COM tel: 1700-81-4357 Email:help@myinsurans.com Drop us a mail anytime!</textarea><br> 
<p>Select A File To Upload: <br>
<i>eg: .pdf & .docx only</i><br>
<input type="file" class="btn btn-primary" name="userfile" required>

<p><input type="submit" class="btn btn-primary" value="Submit" name='submit'></p>

</form>

</div>
</div>
</div>
      
</html>
