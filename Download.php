<?php

if (isset($_POST['contact_name'])&&isset($_POST['contact_email'])&&isset($_POST['contact_text']))
{
	$contact_name = $_POST['contact_name'];
	$contact_email = $_POST['contact_email'];
	$contact_text = $_POST['contact_text'];
	
	if (!empty($contact_email)))
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
			echo "<center><font color=red><b>Thank you, your message was successfully sent.<br />";
echo "You will now be redirected to the main Page</b></font></center> <META HTTP-EQUIV = 'Refresh' Content = '3; URL =" . $sitebase ."index.html'> ";
		}else{
			echo 'Sorry, an error occured. Please try again later.';
		}
	  }
		
	}else{
		echo 'Email is required.';
	}
	
}


?>








<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Download</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
 



<!--
<form action="index.php" method="POST">
		Name:<br><input type="text" name="contact_name" maxlength="25"><br><br>
		Email address:<br><input type="text" name="contact_email" maxlength="50"><br><br>
		Message:<br>
		<textarea name="contact_text" rows="6" cols="30" maxlength="1000"></textarea>
		<input type="submit" value="Send">
</form>
-->

<form action="Downlolad.php" method="POST">

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Enter Contact Information To Download</h4>
      </div>
      <div class="modal-body">
        <form>
		
		<div class="form-group">
            <label for="recipient-name" class="control-label">Name:</label>
            <input type="text" class="form-control" id="recipient-name" name="contact_name">
          </div>
		  
          <div class="form-group">
            <label for="recipient-name" class="control-label">Email:</label>
            <input type="text" class="form-control" id="recipient-name" name="contact_email">
          </div>
		  
          <div class="form-group">
            <label for="message-text" class="control-label">Message</label>
            <textarea class="form-control" id="message-text" name="contact_text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send</button>
      </div>
    </div>
  </div>
</div>

</form>




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
  </body>
</html>
