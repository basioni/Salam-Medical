<?php

function get_Total_pages()
{
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("salam", $con);

$result = mysql_query("SELECT * FROM products");
$counter=0;
while($row = mysql_fetch_array($result))
  {
   $counter++;
   }
return ceil($counter/6);
}

function get_products()
{
$products = "" ;
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("salam", $con);

$result = mysql_query("SELECT * FROM products");
$counter=0;
while($row = mysql_fetch_array($result))
  {
$products[$counter]= '
<figure>
<a href="index.php?p=viewphoto&pro='.$row['pro_id'].'" class="thumb"><img src="'.$row['pro_photo'].'" alt="'.$row['pro_date'].'" /></a>
<div>
<a href="index.php?p=viewphoto&pro='.$row['pro_id'].'" class="heading">'.$row['pro_name'].'</a>
'.$row['pro_text'].'
</div>
</figure>
';
   $counter++;
   }
   
return $products;
}


?>