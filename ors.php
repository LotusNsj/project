<?php include("header.php"); ?>
<title>Ayrik MedCo-Products-ORS</title>
<link rel="stylesheet" href="styles/ors.css" />
<?php if($lang=="fa"){ ?>
	<link rel="stylesheet" href="styles/style-fa.css" />

	
	<?php } ?>
	<script>
		$(document).ready(function(){
		$('.carousel').carousel({
		});
		$("#prd").addClass("act");
	});
	</script>
</head>
<body>
<?php 
	$orss=getStr("lang/$lang/ors.txt");
	$ors=array();
	$ors=toArr1($orss);

?>
<?php include("navbar.php"); ?>
<div class="container" id="context">
	<div class="row" id="product">
		
		<div class="col-sm-6" id="product-picture">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
			<div class="item active">
			  <img src="images/products/ors/active-<?php echo $lang; ?>.jpg" >
			</div>

			<div class="item">
			  <img src="images/products/ors/climate-<?php echo $lang; ?>.jpg" >
			</div>

			<div class="item">
			  <img src="images/products/ors/sport-<?php echo $lang; ?>.jpg">
			</div>

		  </div>
			</div>
		</div>
		<div class="col-sm-6" id="product-info">
			<img class="img-responsive" src="images/products/ors/ors.png" />
			<p>
				<?php echo $ors[0]; ?>
			</p>
			<ul>
				<li><?php echo $ors[1]; ?></li>
				<li><?php echo $ors[2]; ?></li>
				<li><?php echo $ors[3]; ?></li>
				<li><?php echo $ors[4]; ?></li>
			</ul>
		</div> 
	
</div>
<div class="row text-center" id="lists">
	<div class="col-md-3">
		<img class="img-circle" src="images/products/ors/about1.png" data-toggle="modal" data-target="#AboutModal" />
		<br /><span><?php echo $ors[5]; ?>  </span>
	</div>
	<div class="col-md-3">
	<img class="img-circle" src="images/products/ors/ing.jpg" data-toggle="modal" data-target="#IngModal" />
	<br /><span><?php echo $ors[6]; ?></span>
	</div>
	<div class="col-md-3">
	<img class="img-circle" src="images/products/ors/flavour.jpg" data-toggle="modal" data-target="#FlvModal" />
	<br /><span><?php echo $ors[7]; ?></span>
	</div>
	<div class="col-md-3">
	<img class="img-circle" src="images/products/ors/app.jpg" data-toggle="modal" data-target="#AppModal" />
	<br /><span><?php echo $ors[8]; ?></span>
	</div>
</div>
<div class="modal fade" id="AboutModal" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h3 class="modal-title"><?php echo $ors[9]; ?></h3>
			</div>
			<div class="modal-body">
			<div class="row">
			<div class="col-sm-12">
				<h4 class="modal-title"><?php echo $ors[10]; ?></h4>
				<p class="modal-desc">
					 
					<?php echo $ors[11]; ?>
					
					<ul>
					<li><?php echo $ors[12]; ?></li>
					<li><?php echo $ors[13]; ?></li>
					<li><?php echo $ors[14]; ?></li>
					<li><?php echo $ors[15]; ?></li></ul>
				</p>
				</div>
				</div>
				
				<div class="row">
				<div class="col-sm-6">
				<h4 class="modal-title"><?php echo $ors[16]; ?></h4>
				<p class="modal-desc">
					<ul>
						<li><?php echo $ors[17]; ?></li>
						<li><?php echo $ors[18]; ?></li>
						<li><?php echo $ors[19]; ?></li>
						<li><?php echo $ors[20]; ?></li>
						<li><?php echo $ors[21]; ?></li>
						<li><?php echo $ors[22]; ?></li>
						<li><?php echo $ors[23]; ?></li>
						<li><?php echo $ors[24]; ?></li>
					</ul>
				</p>
				</div>
				<div class="col-sm-6">
				<h4 class="modal-title"><?php echo $ors[25]; ?></h4>
				<p class="modal-desc">
				
					<ul>
						
						<li><?php echo $ors[26]; ?></li>
						<li><?php echo $ors[27]; ?></li>
						<li><?php echo $ors[28]; ?></li>
						<li><?php echo $ors[29]; ?></li>
						<li><?php echo $ors[30]; ?></li>
						

					</ul>
				</p>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="IngModal" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h3 class="modal-title"><?php echo $ors[31]; ?></h3>
			</div>
			<div class="modal-body">
			<div class="row">
			<div class="col-sm-12">
				<h4 class="modal-title"><?php echo $ors[32]; ?></h4>
				<p class="modal-desc">
					<?php echo $ors[33]; ?>
					<ul>
						
						<li><?php echo $ors[34]; ?></li>
						<li><?php echo $ors[35]; ?></li>
						<li><?php echo $ors[36]; ?></li>

					</ul>
	
				</p>
				</div>
				</div>
				
				<div class="row">
				<div class="col-sm-6">
				
				<p class="modal-desc">
					<table class="table table-striped table-condensed">
					
					<tbody><tr><th colspan="2">
						Nutritional Information<br><span>(per tablet in 100ml water)</span>
					</th>
					</tr><tr>
						<td>Energy</td>
						<td>3.1kJ (7.2kcal)</td>
					</tr>
					<tr>
						<td>Glucose</td>
						<td>1.826g</td>
					</tr>
					<tr>
						<td>Fat </td>
						<td>0g</td>
					</tr>
					<tr>
						<td>Protien</td>
						<td>0g</td>
					</tr>
					<tr>
						<td>Fibre</td>
						<td>0g</td>
					</tr>
					<tr>
						<td>Sodium Chloride</td>
						<td>176mg</td>
					</tr>
					<tr>
						<td>Citric Acid</td>
						<td>429mg</td>
					</tr>
					<tr>
						<td>Potassium Chloride</td>
						<td>150mg</td>
					</tr>
				</tbody>
					</table>
				</p>
				</div>
				<div class="col-sm-6">
				
				<p class="modal-desc">
					<table class="table table-striped table-condensed">
					<tbody><tr><th colspan="2">
						mmol/L
					</th>
					</tr><tr>
						<td>Glucose</td>
						<td>101</td>
					</tr>
					<tr>
						<td>Sodium</td>
						<td>70</td>
					</tr>
					<tr>
						<td>Potassium</td>
						<td>20</td>
					</tr>
					<tr>
						<td>Chloride</td>
						<td>51</td>
					</tr>
					<tr>
						<td>Citrate</td>
						<td>22</td>
					</tr>					
				</tbody>
				</table>
				</p>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="FlvModal" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h3 class="modal-title"><?php echo $ors[37]; ?></h3>
			</div>
			<div class="modal-body">
			<div class="row">
			<div class="col-sm-12">
				<h4 class="modal-title"><?php echo $ors[38]; ?></h4>
				<p class="modal-desc">
					<div class="row text-center">
						<div class="col-sm-4" style="background-color:#8c569a; ">
							<?php echo $ors[39]; ?>
						</div>
						<div class="col-sm-4" style="background-color:#d11c5b;">
							<?php echo $ors[40]; ?>
						</div>
						<div class="col-sm-4" style="background-color:#f5eb2d; ">
							<?php echo $ors[41]; ?>
						</div>
					</div>
				</p>
				</div>
				</div>
				
				
				
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="AppModal" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h3 class="modal-title"><?php echo $ors[42]; ?></h3>
			</div>
			<div class="modal-body">
			<div class="row">
			<div class="col-sm-12">
				<h4 class="modal-title"><?php echo $ors[43]; ?></h4>
				<p class="modal-desc">
					<?php echo $ors[44]; ?><br/></br></br>
					<a href="https://play.google.com/store/apps/details?id=com.uk.orsapp" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-inbox"></span> <?php echo $ors[45]; ?></a>
					<a href="https://itunes.apple.com/us/app/o.r.s.-hydration-calculator/id1092077898?mt=8" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-inbox"></span> <?php echo $ors[46]; ?></a>
				</p>
				</div>
				</div>
				
				
				
			</div>
		</div>
	</div>
</div>
<?php include("footer.php"); ?>
</body>