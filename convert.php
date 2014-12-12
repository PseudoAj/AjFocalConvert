<?php 
  $focalpx=$_REQUEST['focalpx'];
  $ccdwidth=$_REQUEST['ccdwidth'];
  $imgwidth=$_REQUEST['imgwidth'];
	
	$focalmm=$focalpx*$ccdwidth/$imgwidth;
	echo "<input type="."text"." class="."form-control input-lg"." value=".$focalmm.">";	  
?>