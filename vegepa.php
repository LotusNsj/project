<?php include("header.php"); ?>
<title>Ayrik MedCo-Products-Vegepa</title>
<link rel="stylesheet" href="styles/vegepa.css" />
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
	$vgps=getStr("lang/$lang/vegepa.txt");
	$vgp=array();
	$vgp=toArr1($vgps);
	$counter=0;

?>
<?php include("navbar.php"); ?>
<div class="container-fluid" id="main-context">
	<div class="row" id="product">
	<div class="col-sm-12">
		<h3><?php echo $vgp[$counter++] ?>|<?php echo $vgp[$counter++] ?></h3>

			<h4><?php echo $vgp[$counter++] ?></h4>

		<p>
		<?php echo $vgp[$counter++] ?>
		<ul>
			
	<li>
		<strong><?php echo $vgp[$counter++] ?></strong><?php echo $vgp[$counter++] ?></li>
	<li>
		<strong><?php echo $vgp[$counter++] ?></strong><?php echo $vgp[$counter++] ?></li>
	<li>
		<strong><?php echo $vgp[$counter++] ?></strong><?php echo $vgp[$counter++] ?><strong><?php echo $vgp[$counter++] ?></strong><?php echo $vgp[$counter++] ?></li>
	<li>
		<strong><?php echo $vgp[$counter++] ?></strong><?php echo $vgp[$counter++] ?></li>
	
		</ul>
		</p>
	</div>
	</div>
	<div class="row text-center" id="lists">
	<div class="col-sm-4">
	<img class="img-rectangle" src="images/products/vegepa/tabs.jpg" data-toggle="modal" data-target="#AboutModal1" /><br/>
	<span><?php echo $vgp[$counter++] ?></span>
	</div>
	<div class="col-sm-4">
		<img class="img-rectangle" src="images/products/vegepa/ing.png" data-toggle="modal" data-target="#IngModal" /><br/>
		<span><?php echo $vgp[$counter++] ?></span>
	</div>
	<div class="col-sm-4">
		<img class="img-rectangle" src="images/products/vegepa/direction.png" data-toggle="modal" data-target="#DirModal" /><br/>
		<span><?php echo $vgp[$counter++] ?></span>
	</div>
	<!-- <div class="col-sm-3">
		<img class="img-rectangle" src="images/products/vegepa/warning.jpg" data-toggle="modal" data-target="#WarModal" /><br/>
		<span><?php echo $vgp[$counter++] ?></span>
	</div> -->
	</div>

</div>
	<?php include("footer.php"); ?>	
<div class="modal fade" id="AboutModal1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h3 class="modal-title"><?php echo $vgp[$counter++] ?></h3>
			</div>
			<div class="modal-body">
			<div class="row">
			<div class="col-sm-12">
				<h4 class="modal-title"><?php echo $vgp[$counter++] ?></h4>
				<p class="modal-desc">
					 <?php echo $vgp[$counter++] ?>
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
				<h3 class="modal-title"><?php echo $vgp[$counter++] ?></h3>
			</div>
			<div class="modal-body">
			<div class="row">
			<div class="col-sm-12">
				<h4 class="modal-title"><?php echo $vgp[$counter++] ?></h4>
				<p class="modal-desc">
				
					Capsule shell (fish gelatine, vegetable glycerol); high EPA (eicosapentaenoic acid) concentrate from marine fish oil; organic cold-pressed virgin evening primrose oil; antioxidant: vitamin E.
				
				<table class="table table-striped table-condensed">
					
	<thead>
		<tr>
			<th>
				Serving size 2 capsules</th>
			<th>
				Amount per serving</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>
				Calories</td>
			<td>
				11 kcal</td>
		</tr>
		<tr>
			<td>
				Total fat</td>
			<td >
				996 mg</td>
		</tr>
		<tr>
			<td>
				&nbsp;&nbsp; of which saturated fat</td>
			<td >
				66 mg</td>
		</tr>
		<tr>
			<td>
				&nbsp;&nbsp; of which polyunsaturated fat</td>
			<td >
				820 mg</td>
		</tr>
		<tr>
			<td>
				&nbsp;&nbsp; of which monounsaturated fat</td>
			<td >
				110 mg</td>
		</tr>
		<tr>
			<td >
				Protein</td>
			<td >
				317 mg</td>
		</tr>
		<tr>
			<td >
				Carbohydrate</td>
			<td >
				0 mg</td>
		</tr>
		<tr>
			<td>
				Wild anchovy oil</td>
			<td >
				800 mg</td>
		</tr>
		<tr>
			<td>
				EPA (eicosapentaenoic acid)</td>
			<td >
				560 mg</td>
		</tr>
		<tr>
			<td>
				GLA (gamma-linolenic acid) from evening primrose oil</td>
			<td >
				18 mg</td>
		</tr>
		<tr>
			<td>
				Vitamin E (as mixed tocopherols)<br>
				* 20% of EU RDA</td>
			<td >
				2 mg*</td>
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
<div class="modal fade" id="DirModal" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h3 class="modal-title"><?php echo $vgp[$counter++] ?></h3>
			</div>
			<div class="modal-body">
			<div class="row">
			<div class="col-sm-12">
				<h4 class="modal-title"><?php echo $vgp[$counter++] ?></h4>
				<p class="modal-desc">
					<ul>
						
	<li><?php echo $vgp[$counter++] ?>
		</li>
	<li><?php echo $vgp[$counter++] ?>
		</li>

					</ul>
					<?php echo $vgp[$counter++] ?>
				</p>
				</div>
				</div>
				
				
				
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="WarModal" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h3 class="modal-title"><?php echo $vgp[$counter++] ?></h3>
			</div>
			<div class="modal-body">
			<div class="row">
			<div class="col-sm-12">
				<h4 class="modal-title"><?php echo $vgp[$counter++] ?></h4>
				<p class="modal-desc">
					<?php echo $vgp[$counter++] ?>
				</p>
				</div>
				</div>
				
				
				
			</div>
		</div>
	</div>

</div>

</body>
</html>
</body>