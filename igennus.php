<?php include("header.php"); ?>
<title>Ayrik MedCo-Partner-Igennus</title>
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
<?php include("navbar.php"); ?>
<?php
$cls=getStr("lang/$lang/igennus.txt");
	$cl=array();
	$cl=toArr1($cls);


?>
<div class="container" id="partner-context">
	<div class="row">
		<a href="http://www.igennus.com/"><img src="images/partners/igenuus.png" class="img-responsive text-center" style="background-color:transparent;" /></a>
		<div class="col-sm-12">
			<p>
				<?php echo $cl[0]; ?>	
			</p>
		</div>
	</div>
	
</div>
<?php include("footer.php"); ?>
</body>
</html>