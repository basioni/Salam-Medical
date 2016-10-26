<?php
function get_last()
{

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("salam", $con);

$result = mysql_query("SELECT * FROM products ORDER BY pro_id DESC");
$elements='<h4>Recent posts</h4>';
$i =0 ;
while($row = mysql_fetch_array($result))
{
if($i>2)
break;
$i++;
$elements .='
			<div class="recent-post">
			<a href="#" class="thumb"><img src="'.$row['pro_photo'].'" width="54" height="54" alt="'.$row['pro_name'].'" /></a>
			<div class="post-head">
			<a href="#">'.$row['pro_name'].'</a><span>'.$row['pro_date'].'</span>
			</div>
			</div>
			';
}
return $elements;
}

function facebook()
{
echo '
					<h4>Join us on Facebook</h4>
		            <br>
<iframe src="http://www.facebook.com/plugins/like.php?href=http://www.facebook.com/pages/Own-Source/324484294243154"
        scrolling="no" frameborder="0"
        style="border:none; width:250px; height:300px"></iframe>
	 ';
}

function view_product($id)
{
$product = "";
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("salam", $con);

$result = mysql_query("SELECT * FROM products WHERE ( pro_id = ".$id.");");
while($row = mysql_fetch_array($result))
{
$product ='
<!-- heading -->
					<div class="project-heading">
						<h1>'.$row["pro_name"].'</h1>
						<div class="clearfix"></div>
					</div>
					<!-- ENDS heading -->
					
					<!-- slider -->
					<div class="project-slider">
				        <div class="flexslider">
						  <ul class="slides">
						    <li>
						      <img src="'.$row["pro_photo"].'" width="852" height="400" alt="alt text" />
						    </li>
						  </ul>
						</div>
					</div>
		        	<!-- ENDS slider -->
	        	
	        	
					<div class="project-description">
					'.$row["pro_text"].'
					</div>
					
					<div class="project-info">
						<p>
						<strong>Date</strong><br/>
						'.$row["pro_date"].'
						</p>
					</div>
					<div class="clearfix"></div>
';
}
return $product ;
}

?>