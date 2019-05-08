<?php include("header.php"); ?>
<title>Ayrik MedCo-Contact Us</title>
<link rel="stylesheet" href="styles/about.css" />
<script>
	$(document).ready(function(){
		$("#about").addClass("act");
	});
</script>
<?php if($lang=="fa"){ ?>
	<link rel="stylesheet" href="styles/style-fa.css" />

	
	<?php } ?>
</head>
<body>
<?php 
	$about=getStr("lang/$lang/about.txt");
	

?>
<?php include("navbar.php"); ?>
	<div class="container-fluid">
		<div class="row" id="content">
			<p><?php echo $about; ?></p>
		</div>
	</div>
	<?php include("footer.php"); ?>
</body>