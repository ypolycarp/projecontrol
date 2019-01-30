<?php
		class MyDB extends SQLite3 {
      function __construct() {
			 $this->open('test.db');
		  }
	   }
	   
	   $db = new MyDB();
	   if(!$db){
		  echo $db->lastErrorMsg();
	   } /*else {
		  echo "Opened database successfully\n";
	   }*/

		$name = $_POST["Name"];
		$email = $_POST["Email"];
		$message = $_POST["Message"];
		if( ! ini_get('date.timezone') )
		{
			date_default_timezone_set('GMT');
			
		}
		$time_sent=date('Y-m-d H:i:s');
		$sql =<<<EOF
      INSERT INTO MESSAGES (NAME,EMAIL,MESSAGE,TIME)
      VALUES ('$name','$email','$message','.$time_sent.');

EOF;

		$ret = $db->exec($sql);
	   if(!$ret) {
		  echo $db->lastErrorMsg();
	   } /*else {
		  echo "Records created successfully\n";
	   }*/
	   $db->close();
	
?>

<?php 
	//if(isset($_POST['submit'])){
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$to = "admin@turkiyedirect.com"; // this is your Email address
		$phone = $_POST["Phone"];
		$from = $_POST['Email']; // this is the sender's Email address
		$first_name = $_POST['Name'];
		$subject = $_POST['subject'];//Form submission";
		$subject2 = $_POST['subject'];//"Copy of your form submission";
		$message = $first_name ."/".$phone. " wrote the following: " . "\n\n" . $_POST['Message'];
		$message2 = "Here is a copy of your message, " . $first_name . "\n\n" . $_POST['Message'];
		

		$headers = "From:" . $from;
		$headers2 = "From:" . $to;
		mail($to,$subject,$message,$headers);
		mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
		echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
		//header('Location: index.php'); 
		// You cannot use header and echo together. It's one or the other.
		//
	}
	//else
		//echo "ERROR: Could not send the email";
	
?>
<!--
<html>
	<head> </head>
	<body>
		</br><button onclick="goBack()">Go Back</button>
		<script>
		function goBack() {
			window.history.back();
		}
		</script>
	</body>
</html>
-->

<?php
	function add_customer(){
		$full_name=$_POST['fullname'];
		$username=$_POST['usrnm'];
		$password=$_POST['txt_sec'];
		$email=$_POST['txt_email'];
		$account_number=$_POST['txt_accno'];
		$amount=$_POST['amount'];
		$secure_code=$_POST['secure_code'];
		if( ! ini_get('date.timezone') )
		{
			date_default_timezone_set('GMT');
			
		}
		$date_joined=date('Y-m-d H:i:s');
		class MyDB extends SQLite3 {
		  function __construct() {
			 $this->open('test.db');
		  }
	    }
   
	   $db = new MyDB();
	   if(!$db){
		  echo $db->lastErrorMsg();
	   } /*else {
		  echo "...";
		}*/
	//admin_status: 0-customer, 1-admin
   $sql =<<<EOF
      INSERT INTO CUSTOMERS (USERNAME,CUSTOMER_NAME,EMAIL,SECURE_NO,ACCOUNT_NUMBER,AMOUNT,ADMIN_STATUS,JOINED)
      VALUES ('$username','$full_name','$email','$secure_code','$account_number',$amount,0,'".$date_joined."');

EOF;

	   $ret = $db->exec($sql);
	   if(!$ret) {
		  echo $db->lastErrorMsg();
	   } else {
		  echo "Customer added successfully\n";
	   }
	   $db->close();
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Turkiye Transfer | Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="images/logo.png" type="image/png" sizes="any">
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<link href="css/font-awesome.css" rel="stylesheet">   <!-- font-awesome icons --> 
<!-- //Custom Theme files -->  
<!-- js --> 
	<script src="js/jquery-2.2.3.min.js"></script>
<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Secular+One" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<!-- //web-fonts --> 
</head>
<body> 
	<!-- header -->
	<div class="headerw3-agile"> 
		<div class="header-w3mdl"><!-- header-two --> 
			<div class="container"> 
				<div class="agileits-logo navbar-left">
					<img src="images/logo.png" alt="logo"/>
					<!--<h1><a href="index.html"><img src="images/e.png" alt="logo"/>Banking</a></h1> -->
				</div> 
				<div class="agileits-hdright nav navbar-nav">
					<div class="header-w3top"><!-- header-top --> 
						<ul class="w3l-nav-top">
							<li><i class="fa fa-phone"></i><span> +905428839734 | +905488768427 </span></li> 
							<li><a href="mailto:admin@turkiyedirect.com"><i class="fa fa-envelope-o"></i><span>admin@turkiyedirect.com</span></a></li>
						</ul>
						<div class="clearfix"> </div> 	 
					</div>
					<div class="agile_social_banner">
						<ul class="agileits_social_list">
							<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
						</ul>
					</div>  

				</div>
				<div class="clearfix"> </div> 
			</div>	
		</div>	
	</div>	
	<!-- //header -->  
	<!-- banner -->
	<div>
		<div class="header-nav"><!-- header-three --> 	
			<nav class="navbar navbar-default">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						Menu 
					</button> 
				</div>
				<!-- top-nav -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="index.php" class="active">Home</a></li>
						<li><a href="about.php" class="scroll">About</a></li>    
						<li><a href="contact.php" class="scroll">Contact Us</a></li>   
					</ul>  
					<div class="clearfix"> </div>	
				</div>
			</nav>    
		</div>

	</div>


	<!-- Page Content -->
	</br>

	
	

	</br><!--<button onclick="goBack()">Go Back</button>-->
	<button type="button" class="btn btn-primary btn-block" onclick="goBack()">Go Back</button>
		<script>
		function goBack() {
			window.history.back();
		}
		</script>


	<!-- Page Content -->
	
<!--footer--> 
<!--<div class="w3_agile-copyright text-center">
	<p>© 2017 E-Banking. All rights reserved | Design by <a href="//w3layouts.com/">W3layouts</a></p>
</div>-->
<!--//footer-->	


  
	<!-- //banner -->
		<!-- //banner-text -->  
	<!-- //banner -->
	<!-- banner Slider starts Here -->
	<script src="js/responsiveslides.min.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->  

	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>

</body>
</html>