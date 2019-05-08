<?php include("header.php"); ?>
<?php 
if(isset($_POST["submitBTN"])){
	 $email_to = "s.djazmi@gmail.com";
		$email_subject = "Your email subject line";
		
		function died(){
			die();
		}
		if(!isset($_POST["email"]) || !isset($_POST["comment"])){
			died();
		}
		$email=$_POST["email"];
		$msg=$_POST["comment"];
		$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
		if(!preg_match($email_exp,$email)) {
 
			died();
 
		}
		 if(strlen($msg) < 2) {
			 died();
		 }
		  $email_message = "Form details below.\n\n";
 
     
 
		function clean_string($string) {
 
			$bad = array("content-type","bcc:","to:","cc:","href");
 
			return str_replace($bad,"",$string);
 
		}
		$email_message.="This Email is from : ".clean_string($email)."\n\n";
		$email_message.="Message:\n\n".clean_string($msg);
		$headers = 'From: '.$email."\r\n".
 
					'Reply-To: '.$email."\r\n" .
					 
					'X-Mailer: PHP/' . phpversion();
		mail($email_to, $email_subject, $email_message, $headers);  
}


?>
<link rel="stylesheet" href="styles/pages.css" />
<?php if($lang=="fa"){ ?>
	<link rel="stylesheet" href="styles/style-fa.css" />

	
	<?php } ?>
<title>Ayrik MedCo-Contact Us</title>
<script>
	$(document).ready(function(){
		$("#contact").addClass("act");
	});
</script>
</head>

<?php 
	$contacts=getStr("lang/$lang/contact.txt");
	$items1=array();
	$items1=toArr1($contacts);

?>
<body>

<?php include("navbar.php"); ?>
	<div class="container-fluid" id="content">
		<div class="row">
			
			


			<div class="col-sm-6" id="map" >
				 </div>
				 <script>
      function initMap() {
        var uluru = {lat: 32.635721, lng: 51.639326};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7tiID1Xs0bNCR0ClQS9o5xpMIiG0Q7P4&callback=initMap">
    </script>
			<div class="col-sm-6">
				<div class="row">
					<div class="col-sm-12" id="contact-info" <?php if($lang=="fa"){ ?>style="font-family:'yekan'!important;"<?php } ?>>
						<?php echo $items1[0]; ?>
						<p> <span class=" glyphicon glyphicon-map-marker"></span><?php echo $items1[1]; ?></p>
						<p> <span class="glyphicon glyphicon-earphone"></span><?php echo $items1[2]; ?></p>
						<p> <span class="glyphicon glyphicon-print"></span><?php echo $items1[3]; ?></p>
						<p> <span class="glyphicon glyphicon-time "></span><?php echo $items1[4]; ?></p>
						<p> <span class="glyphicon glyphicon-envelope"></span><?php echo $items1[5]; ?></p>
					</div>
					
					
				</div>
			</div>
			
			</div>
			<div class="row" id="form-container">
				<div class="col-sm-6" id="contact-form">
						<form method="post" action="">
							<div class="form-group">
							  <label class="sr-only" for="email">Email:</label>
							  <input type="email" class="form-control" id="email" name="email" placeholder="<?php echo $items1[6]; ?>">
							</div>
							<div class="form-group">
							  <label class="sr-only" for="email">Email:</label>
							  <textarea type="text" class="form-control" id="comment" name="comment" rows="5" col="40"  placeholder="<?php echo $items1[7]; ?>"></textarea>
							</div>
							<button type="submit" name="submitBTN" class="btn btn-primary"><span class="glyphicon glyphicon-send"></span><?php echo $items1[8]; ?></button>
							<button type="reset" name="resetBTN" class="btn btn-danger"><span class="glyphicon glyphicon-erase"></span><?php echo $items1[9]; ?></button>
						</form>
				</div>
				
		</div>
			
			</div>
			<?php include("footer.php"); ?>
		
	
	
</body>
</html>