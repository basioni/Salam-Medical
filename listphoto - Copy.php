<!doctype html>
<html class="no-js">

	<head>
		<meta charset="utf-8"/>
		<title>Products - Al Salam Medical Store</title>
		<!--[if lt IE 9]>
			<script src="js/css3-mediaqueries.js"></script>
		<![endif]-->
		<link rel="stylesheet" media="all" href="css/style.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<!-- Adding "maximum-scale=1" fixes the Mobile Safari auto-zoom bug: http://filamentgroup.com/examples/iosScaleBug/ -->
		
		
		<!-- JS -->
		<script src="js/jquery-1.6.4.min.js"></script>
		
		<!--  <script src="js/less-grid-4.js"></script> -->
		<script src="js/custom.js"></script>
		<script src="js/tabs.js"></script>
		<script src="js/moveform.js"></script>
		
		<!-- Masonry -->
		<script src="js/masonry.min.js" ></script>
		<script src="js/imagesloaded.js" ></script>
		<!-- ENDS Masonry -->
		
		<!-- Tweet -->
		<link rel="stylesheet" href="css/jquery.tweet.css" media="all"  /> 
		<script src="js/tweet/jquery.tweet.js" ></script> 
		<!-- ENDS Tweet -->
		
		<!-- superfish -->
		<link rel="stylesheet" media="screen" href="css/superfish.css" /> 
		<script  src="js/superfish-1.4.8/js/hoverIntent.js"></script>
		<script  src="js/superfish-1.4.8/js/superfish.js"></script>
		<script  src="js/superfish-1.4.8/js/supersubs.js"></script>
		<!-- ENDS superfish -->
		
		<!-- prettyPhoto -->
		<script  src="js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
		<link rel="stylesheet" href="js/prettyPhoto/css/prettyPhoto.css"  media="screen" />
		<!-- ENDS prettyPhoto -->
		
		<!-- poshytip -->
		<link rel="stylesheet" href="js/poshytip-1.1/src/tip-twitter/tip-twitter.css"  />
		<link rel="stylesheet" href="js/poshytip-1.1/src/tip-yellowsimple/tip-yellowsimple.css"  />
		<script  src="js/poshytip-1.1/src/jquery.poshytip.min.js"></script>
		<!-- ENDS poshytip -->
		
		
		<!-- GOOGLE FONTS -->
		<link href='http://fonts.googleapis.com/css?family=Allan:700' rel='stylesheet' type='text/css'>
		
		<!-- Flex Slider -->
		<link rel="stylesheet" href="css/flexslider.css" >
		<script src="js/jquery.flexslider-min.js"></script>
		<!-- ENDS Flex Slider -->
		
		
		<!--[if IE 6]>
		<link rel="stylesheet" href="css/ie6-hacks.css" media="screen" />
		<script type="text/javascript" src="js/DD_belatedPNG.js"></script>
			<script>
          		/* EXAMPLE */
          		DD_belatedPNG.fix('*');
        	</script>
		<![endif]-->
		
		<!-- Lessgrid -->
		<link rel="stylesheet" media="all" href="css/lessgrid.css"/>
		
		<!-- modernizr -->
		<script src="js/modernizr.js"></script>
		

	</head>
	
	<body lang="en">
	

			
		<header>
			
				
			<div class="wrapper">
					
				<a href="index.php?p=home" id="logo"><img  src="img/logo.png" alt=""></a>
				
				<nav>
					<ul id="nav" class="sf-menu">
						<li ><a href="index.php?p=home">Home<span class="subheader">welcome</span></a></li>
						<li><a href="index.php?p=services">Services<span class="subheader">company</span></a>
						<li class="current-menu-item"><a href="index.php?p=listphoto">Products<span class="subheader">gallery</span></a></li>
						<li  ><a href="index.php?p=about">About us<span class="subheader">company</span></a></li>
						<li ><a href="index.php?p=contact">Contact Us<span class="subheader">get in touch</span></a></li>
					</ul>
				</nav>
				
				<div class="clearfix"></div>
				
			</div>
		</header>
	
	
	
	
		<!-- MAIN -->
		<div id="main">
				
			<!-- social -->
			<div id="social-bar">
				<ul>
					<li><a href="http://www.facebook.com"  title="Become a fan"><img src="img/social/facebook_32.png"  alt="Facebook" /></a></li>
				</ul>
			</div>
			<!-- ENDS social -->
			
			
			
			<!-- Content -->
			<div id="content">
			
				<!-- masthead -->
		        <div id="masthead">
					<span class="head">Products</span><span class="subhead">Enjoy Our Products Gallery.</span>
					
				</div>
	        	<!-- ENDS masthead -->
	        	
	        	<!-- portfolio list -->
<?php
include("DB.php");

$pages_count = get_Total_pages() ;

$index = 0;

if(isset($_GET['i']))
$index = $_GET["i"];
$products = get_products();

?>
	        	<div ID="viewzone" class="featured portfolio-list">
	        		
<?php
$start = $index*6 ;
$end= $start+6;
for($i=$start;$i<$end;$i++)
{
if($i<sizeof($products))
echo $products[$i];
} 


?>
					
	        		<div class="clearfix"></div>
					        		
	        	</div>
	        	<!-- ENDS featured -->


	        	<!-- pager -->
        		<ul class="pager">
					<li class="paged">Page <label id="pi"><?php echo $index+1;?></label> of <?php echo $pages_count;?></li>
<?php
if($pages_count>2)
{
if($index==0)
echo '
<li class="active"  ><a href="index.php?p=listphoto&i='.$index.'"> '.($index+1).'</a></li>
<li  ><a href="index.php?p=listphoto&i='.($index+1).'">'.($index+2).'</a></li>
<li  ><a href="index.php?p=listphoto&i='.($index+2).'">'.($index+3).'</a></li>
	 ';
else	 
if($index==($pages_count-1))
echo '
<li  ><a href="index.php?p=listphoto&i='.($index-2).'"> '.($index-1).'</a></li>
<li  ><a href="index.php?p=listphoto&i='.($index-1).'"> '.$index.'</a></li>
			<li class="active" ><a href="index.php?p=listphoto&i='.($index).'">'.($index+1).'</a></li>
	 ';
else
echo '
<li><a href="index.php?p=listphoto&i='.($index-1).'"> '.($index).'</a></li>
<li  class="active"><a href="index.php?p=listphoto&i='.($index).'"> '.($index+1).'</a></li>
			<li  ><a href="index.php?p=listphoto&i='.($index+1).'">'.($index+2).'</a></li>
	 ';

}
if($pages_count <= 2)
{
if($index==0)
echo '
<li class="active"  ><a href="index.php?p=listphoto&i='.$index.'"> '.($index+1).'</a></li>
<li  ><a href="index.php?p=listphoto&i='.($index+1).'"> '.($index+2).'</a></li>
	 ';
if($index==($pages_count-1))
echo '
<li><a href="index.php?p=listphoto&i='.($index-1).'"> '.($index).'</a></li>
<li class="active"  ><a href="index.php?p=listphoto&i='.$index.'"> '.($index+1).'</a></li>
	 ';
	 
}
?>
		
				<div class="clearfix"></div>
	        	<!-- ENDS pager -->
	        	
	        	
	        	<aside class="retractil">
	        		<div id="sidebar-closer"><img src="img/close.png" alt="close"></div>
	        		
	        	</aside>
				
			
			</div>
			<!-- ENDS content -->
			
			<div class="clearfix"></div>
			<div class="shadow-main"></div>
			
			
		</div>
		<!-- ENDS MAIN -->
		
		<footer>
			<div class="wrapper">
			
				<ul id="footer-cols">
					
					<li class="first-col">
						
						<div class="widget-block">
<?php
include("scripts.php");
echo get_last();
?>
						</div>
					</li>
					
					<li class="second-col">
						
						<div class="widget-block">
							<h4>Dummy text</h4>
							<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies ege. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
							<p>Pellentesque habitant morbi tristique senectus et netus et malesuada.</p>
						</div>
						
					</li>
					
					<li class="third-col">
<?php
facebook();
?>
					</li>	
				</ul>				
				<div class="clearfix"></div>
				
				
			</div>
			
			<div id="to-top"></div>
		</footer>
		
	</body>
	
</html>