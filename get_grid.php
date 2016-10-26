<?php
include("DB.php");
$pages_count = get_Total_pages() ;

$index=0;
if(isset($_GET["id"]))
$index=$_GET['id'];


$products = get_products();

$start = $index*6 ;
$end= $start+6;
$out="";
for($i=$start;$i<$end;$i++)
{
if($i<sizeof($products))
$out .= $products[$i];
} 

echo $out;
?>

	        		

					
	        		