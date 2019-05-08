<?php include("header.php"); ?>
<link rel="stylesheet" href="styles/style.css" />
<?php if($lang=="fa"){ ?>
	<link rel="stylesheet" href="styles/style-fa.css" />

	
	<?php } ?>
<title>Ayrik MedCo </title>
<script>
	$(document).ready(function(){
		$('.carousel').carousel({
			interval: 10 * 1000
		});
		$("#home").addClass("act");
	});
	
</script>	
</head>
<?php
 $index=getStr("lang/$lang/index.txt");
 $contents= array();
 $contents=toArr1($index);
?>
<body>
	<div class="carousel slide carousel-fade" data-ride="carousel">

    <!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
			</div>
			<div class="item">
			</div>
			<div class="item">
			</div>
		</div>
	</div>
	<?php include("navbar.php"); ?>
	<div class="container-fluid">
		<div class="row title" id="name" >
			<h1><?php echo $contents[0]; ?></h1>
		</div>
		<div class="row" id="main">
			<p><?php echo $contents[1]; ?></p>
		</div>
	</div>
<!-- Remeber to put all the content you want on top of the slider below the slider code -->
<div class="title">
  <h1></h1>
</div>
<?php include("footer.php"); ?>
</body>
</html>