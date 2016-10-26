<?php
include("DB.php");
$pages_count = get_Total_pages() ;

$index=0;
if(isset($_GET["id"]))
$index=$_GET['id'];

$result ='<li class="paged">Page <label id="pi">'.($index+1).'</label> of '.$pages_count.'</li>';

if($pages_count>2)
{
if($index==0)
$result .='
<li class="active"  OnClick="showgrid('.$index.');"><label >'.($index+1).'</label></li>
<li OnClick="showgrid('.($index+1).');"><label >'.($index+2).'</label></li>
<li OnClick="showgrid('.($index+2).');"><label >'.($index+3).'</label></li>
	 ';
else	 
if($index==($pages_count-1))
$result .='
<li  OnClick="showgrid('.($index-2).');"> <label>'.($index-1).'</label></li>
<li  OnClick="showgrid('.($index-1).');"> <label>'.$index.'</label></li>
<li class="active" OnClick="showgrid('.($index).');"><label>'.($index+1).'</label></li>
	 ';
else
$result .='
<li OnClick="showgrid('.($index-1).');"> <label>'.($index).'</label></li>
<li  class="active" OnClick="showgrid('.($index).');"> <label>'.($index+1).'</label></li>
<li OnClick="showgrid('.($index+1).');"><label>'.($index+2).'</label></li>
	 ';

}
if($pages_count <= 2)
{
if($index==0)
$result .='
<li class="active"  OnClick="showgrid('.$index.');" > <label>'.($index+1).'</label></li>
<li OnClick="showgrid('.($index+1).');"> <label>'.($index+2).'</label></li>
	 ';
if($index==($pages_count-1))
$result .='
<li OnClick="showgrid('.($index-1).');"><label> '.($index).'</label></li>
<li class="active" OnClick="showgrid('.$index.');"> <label>'.($index+1).'</label></li>';
	 
}


$out .='<div class="clearfix"></div>';
echo '<script language="javascript" type="text/javascript">
document.getElementById("pagesbar").innerHTML = ';
echo $result ;
echo ' ;</script>' ;
?>				
	        		