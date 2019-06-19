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
echo "You will now be redirected to the main Page</b></font></center> <META HTTP-EQUIV = 'Refresh' Content = '3; URL =" . $sitebase ."http://www.genengnews.com/gen-articles/cnv-strategies-get-a-rethink/5004/'> ";
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
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}


textarea {
    width: 100%;
	margin: 8px 0;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 16px;
    resize: none;
}


h3{
   color:#09F;
   text-align:center;
   margin: 10px;
}

div {
    width:33%;
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
<body>



<div>
<h3>Enter Contact Information To Download</h3>
  <form action="index1.php" method="POST">
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
