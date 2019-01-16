<?php 
error_reporting(1);
	$mysqli =  new mysqli("localhost","root","password","project_PHP");
	mysqli_set_charset($mysqli,"utf8");
	if ($mysqli === false ) {
		die("ERROR:Could not connect ".$mysqli-> error);
	}else{
		
		echo "<script>
console.log('okkkk');
</script>";
	}
	
 ?>