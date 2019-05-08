<?php include("header.php"); ?>
<title>Ayrik MedCo-Partner-Swiss Bio</title>
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
	$cls=getStr("lang/$lang/swiss.txt");
	$cl=array();
	$cl=toArr1($cls);
?>
<?php include("navbar.php"); ?>
<div class="container" id="partner-context">
	<div class="row">
		<a href="https://www.swissbiocolostrum.com"><img src="images/partners/swiss.png" class="img-responsive text-center" style="max-width:200px; max-height:100px;"></a>
		<div class="col-sm-12">
			<p style="font-size:14pt;">
				<?php echo $cl[0]; ?>
			</p>
		</div>
	</div>
	
</div>
<?php include("footer.php"); ?>
</body>
</html>