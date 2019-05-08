<?php include("header.php"); ?>
<title>Ayrik MedCo-Partner-Clinova</title>
<link rel="stylesheet" href="styles/partner.css" />
<?php if($lang=="fa"){ ?>
	<link rel="stylesheet" href="styles/style-fa.css" />

	
	<?php } ?>
	<script>
	$(document).ready(function(){
		$("#part").addClass("act");
	});
	</script>
	
</head>

<body>
<?php
	$cls=getStr("lang/$lang/clinova.txt");
	$cl=array();
	$cl=toArr1($cls);
?>
<?php include("navbar.php"); ?>
<div class="container" id="partner-context">
	<div class="row">
	<!--	<img src="images/partners/clinova-logo.png" class="img-responsive text-center" /> -->
		<div class="col-sm-12">
			<p>
				<a href="http://www.clinova.co.uk/" ><img src="images/partners/clinova-logo.png" class="img-responsive text-center" /></a>
				<?php echo $cl[0]; ?>
			</p>
		</div>
	</div>
	
</div>
<?php include("footer.php"); ?>
</body>
</html>