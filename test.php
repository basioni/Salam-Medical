<html>
<head>
<script language="javascript" type="text/javascript">
function showHint(str)
{
alert(str);
if (str.length==0)
  { 
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4)
    {
    document.getElementById("txtHint").innerHTML =xmlhttp.responseText;
    //alert(xmlhttp.responseText);
    }
  }
xmlhttp.open("GET","get_grid.php?id="+str,true);
xmlhttp.send();
}
</script>
</head>
<body>

<p><b>Start typing a name in the input field below:</b></p>
<form> 
<button type="button" onClick="showHint(this.innerHTML)">1</button>

</form>
<p>Suggestions: <span id="txtHint"></span></p>

</body>
</html>