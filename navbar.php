<script>
	$(document).ready(function(){
		$(".navbar-nav").mouseover(function(){
			$("#d1").next().css({
				"opacity":"0.5",
				
			});
		});
		$(".navbar-nav").mouseout(function(){
			$("#d1").next().css({
				"opacity":"1"
			});
		});
		
	});
</script>
<div class="container-fluid" id="d1">
		<div class="row" id="top-nav">
<nav class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-cl">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="images/logo4.png"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-cl">
      <ul class="nav navbar-nav">
        <li class=""><a id="home" href="index.php?lang=<?php echo $lang ;?>"><?php echo $items[0] ; ?></a></li>
		<li><a  id="about" href="about.php?lang=<?php echo $lang ;?>"><?php echo $items[1] ; ?></a></li>
        <li><a id="contact" href="contact.php?lang=<?php echo $lang ;?>"><?php echo $items[2] ; ?></a></li>
        <li class="dropdown">
          <a id="prd" href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $items[3] ; ?> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="ors.php?lang=<?php echo $lang ;?>"><img class="img-responsive product-logo" src="images/products-logo/ors.png"></a></li>
            <li class="divider"></li>
            <li><a href="vegepa.php?lang=<?php echo $lang ;?>"><img class="img-responsive product-logo" src="images/products-logo/vegepa.png"></a></li>
          </ul>
        </li>
		<li class="dropdown">
          <a id="part" href="#" class="dropdown-toggle" data-toggle="dropdown" ><?php echo $items[4] ; ?> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="clinova.php?lang=<?php echo $lang ;?>">Clinova</a></li>
            <li class="divider"></li>
            <li><a href="igennus.php?lang=<?php echo $lang ;?>">Igennus</a></li>
			<li class="divider"></li>
            <li><a href="swissbio.php?lang=<?php echo $lang ;?>">Swiss Bio</a></li>
            
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
       <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="lang"><?php echo $items[5] ; ?> <b class="caret"></b></a>
          <ul class="dropdown-menu" id="lang-sub">
            <li><a href="?lang=en">English</a></li>
            <li class="divider"></li>
            <li><a href="?lang=fa" style="font-size:9pt !important;">فارسي</a></li>
            
          </ul>
        </li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
</nav>

			
		</div>
	</div>