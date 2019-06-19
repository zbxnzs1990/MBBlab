<?php

if (isset($_POST['contact_name'])&&isset($_POST['contact_email'])&&isset($_POST['contact_text']))
{
	$contact_name = $_POST['contact_name'];
	$contact_email = $_POST['contact_email'];
	$contact_text = $_POST['contact_text'];
	
	if (!empty($contact_email))
	{
		if (strlen($contact_name)>25 || strlen($contact_email)>50 || strlen($contact_text)>1000)
		{
			echo 'Sorry, maxlength for some field has been exceeded.';
		}else{
		$to = 'zzhao1@tulane.edu';
		$subject = 'Contact form submitted.';
		$body = $contact_name."\n".$contact_text;
		$headers = 'From: '.$contact_email;
		
		
		if (@mail($to, $subject, $body, $headers))
		{
			echo "<center><font color=#09F><b>Thank you, your message was successfully sent.<br />";
echo "You will now be redirected to the main Page</b></font></center> <META HTTP-EQUIV = 'Refresh' Content = '3; URL =" . $sitebase ."https://sites.google.com/site/xiaobaocao006/database-for-download'> ";
		}else{
			echo 'Sorry, an error occured. Please try again later.';
		}
	  }
		
	}else{
		echo 'Your email is required.';
	}
	
}




?>


<!DOCTYPE html>
<html>
<head>
<link href="../download.css" rel="stylesheet" type="text/css">
</head>
<body>



<div>
<div class="download">
<h3>Download Here:</h3>
<h4><a href="https://sites.google.com/site/xiaobaocao006/database-for-download">Multi-color fluorescence in situ image (M-FISH) database</a></h4>
</div>


<h3>Enter Contact Information For Future Update</h3>
  <form action="index.php" method="POST">
    <label for="name">Name</label>
    <input type="text" id="name" name="contact_name" placeholder="Your name">

    <label for="email">Email</label>
    <input type="text" id="email" name="contact_email" placeholder="Your email">

    <label for="message">Message</label>
    <textarea type="text" id="message" name="contact_text" placeholder="Your message"></textarea>
  
    <input type="submit" name="submit" value="Submit">
  </form>
</div>

</body>
</html>
