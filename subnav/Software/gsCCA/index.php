
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
		$to = 'zhengzhao0202@gmail.com';
		$subject = 'Contact form submitted.';
		$body = $contact_name."\n".$contact_text;
		$headers = 'From: '.$contact_email;
		$result = mail($to, $subject, $body, $headers);
		
		if ($result)
		{
			echo "<center><font color=#09F><b>Thank you, your message was successfully sent.<br />";
echo "You will now be redirected to the main Page</b></font></center> <META HTTP-EQUIV = 'Refresh' Content = '3; URL =" . $sitebase ."https://sites.google.com/site/dongdongtonylin/software/software-for-group-sparse-canonical-correlation-analysis-group-sparse-cca'> ";
		}else{
			echo '<center><font color=#09F>Sorry, an error occured. Please try again later.</font></center>';
		}
	  }
		
	}else{
		echo 'Your email is required.';
	}
	
}




?>












<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
	<title>(M-FISH) database</title>
    <link href="../../../Software.css" rel="stylesheet">
    <link href="../../../css2.css" rel="stylesheet">
    <link href="font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../../../bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
<body>
  <!--container begin-->
  <div id="container">
    
    
   
    <!--nav begin-->
    <div id="nav">
         <ul>
           <li class="title1"><a href="../../../Home.html">Home</a></li>
           <li class="title2"><a href="../../../About MBB.html">About</a></li>
           <li class="title3"><a href="../../../People.html">People</a>
              <ul>
                 <li><a href="../../People/PI.html">Principal Investigator</a></li>
                 <li><a href="../../People/Postdoctor.html">Postdoc</a></li>
                 <li><a href="../../People/PhD Student.html">PhD Student</a></li>
                 <li><a href="../../People/Master.html">Master Student</a></li>
                 <li><a href="../../People/Undergraduate.html">Undergraduate</a></li>
                 <li><a href="../../People/Technician.html">Technician</a></li>
                 <li><a href="../../People/Visiting Scholar.html">Visiting Scholar</a></li>
                 <li><a href="../../People/Alumni.html">Alumni</a></li>
              </ul>
           </li>
           <li class="title4"><a href="../../../Research.html">Research</a>
              <ul>
                 <li><a href="../../Research/1.html">Sparse Model</a></li>
                 <li><a href="../../Research/2.html">Microscopic Imaging</a></li>
                 <li><a href="../../Research/3.html">Biomedical Imaging</a></li>
                 <li><a href="../../Research/4.html">Genomics Informatics</a></li>
                 <li><a href="../../Research/5.html">Imaging Genomics</a></li>
              </ul>
           </li>
           <li class="title5"><a href="../../../Publications.html">Publications</a>
              <ul>
                 <li><a href="../../Publications/Book Chapters.html">Book Chapters</a></li>
                 <li><a href="../../Publications/Journal Publications.html">Journal Publications</a></li>
                 <li><a href="../../Publications/Conference Papers.html">Conference Papers</a></li>
              </ul>
           </li>
           <li class="title6"><a href="../../../Software.html">Software</a>
           </li>
           <li class="title7"><a href="../../../Teaching.html">Teaching</a>
             <ul>
                 <li><a href="../..Teaching/Mathematical Modeling.html">Mathematical Modeling</a></li>
                 <li><a href="../..Teaching/Biomedical Imaging.html">Biomedical Imaging</a></li>
             </ul>
           </li>  
           <li class="title11"><a href="../../../News.html">News</a></li> 
           <li class="title0"><a href="../../../Opportunity.html">Opportunity</a></li>
           <li class="title9"><a href="../../../Contact.html">Contact</a></li> 
         </ul>
    </div><!--nav end-->
<!--top-bottom1 end-->     
    
   
    
    
    
    <!--content begin-->
    
      <!-- sidebar -->
     <div class="sidebar">
   <div class="list-group">
  <a href="../../../Software.html" class="list-group-item active">Software</a>
  <a href="gsCCA.html" class="list-group-item">gsCCA</a>
  <a href="index.php" class="list-group-item list-group-item-info">Download</a>
  <a href="#" class="list-group-item">Documentation</a>
  <a href="https://bmcbioinformatics.biomedcentral.com/articles/10.1186/1471-2105-14-245" target="_blank" class="list-group-item">Publications</a>
  
  </div>
  </div>
    
    
    
    
    
    <div class="content1">
    
         <div class="content-top">
            <span class="ct2">The software and data listed here is partially under NSF and NIH support.</span>
        </div>
        
        
        <div class="bs-callout"> <h4>Available Software:</h4></div>
        
   
   
   <!--download-->     

<div class="well well-sm">
<h3 class="text-muted">Download Here:</h3>
<h4 class="text-info"><a href="https://sites.google.com/site/dongdongtonylin/software/software-for-group-sparse-canonical-correlation-analysis-group-sparse-cca" target="_blank">Data integration with Group sparse Canonical Correlation Analysis (gsCCA)</a></h4>
</div>


<div class="bs-callout"> <h4>Enter Contact Information For Future Update</h4></div>
  <form class="form-horizontal" action="index.php" method="POST">
    <div class="form-group form-group-lg">
    <label class="col-sm-2 control-label" for="name">Name</label>
	<div class="col-sm-10">
    <input class="form-control" type="text" id="name" name="contact_name" placeholder="Your name">
	</div>
	</div>
	
	<div class="form-group form-group-lg">
    <label class="col-sm-2 control-label" for="email">Email</label>
	<div class="col-sm-10">
    <input class="form-control" type="text" id="email" name="contact_email" placeholder="Your email">
	</div>
	</div>
	
	<div class="form-group form-group-lg">
    <label class="col-sm-2 control-label" for="message">Message</label>
	<div class="col-sm-10">
    <textarea class="form-control" rows="3" type="text" id="message" name="contact_text" placeholder="Your message"></textarea>
    </div>
	</div>
	
    <input class="btn btn-primary btn-lg btn-block" type="submit" name="submit" value="Submit">
	
  </form>

   <!--download-->
   
  
 
  
</div>


    </div>
    <!--content end-->
    
  <!--top-bottom2 begin-->   
   <!--copyright begin-->
    <div id="copyright">
        <div class="cr-top">
          <div class="map"><a href="https://www.google.com/maps/@29.9556836,-90.0712342,16z?hl=zh-CN" target="_blank">
          <i class="fa fa-map-marker"></i> Google map</a></div>
          <div class="E-mail"><a href="../../../Contact.html"><i class="fa fa-envelope-o"></i> E-mail:</a><span class="e"> <a href="mailto:wyp@tulane.edu">wyp@tulane.edu</a></span></div>
          <div class="phone"><a href="../../../Contact.html"><i class="fa fa-phone"></i> phone:</a><span class="tel"> 504-988-1341</span></div>
        </div>
        <<div class="cr-bottom">Copyright <i class="fa fa-copyright"></i> <span id="year"></span> MBB Lab Research</div>     
    </div> 
    <!--copyright end --> 
  </div>
<!--  container end-->
<script>
var d = new Date();
document.getElementById("year").innerHTML = d.getFullYear();
</script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../../bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
<!--top-bottom2 end-->   
