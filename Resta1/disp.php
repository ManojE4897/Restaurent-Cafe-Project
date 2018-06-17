<?php 
 include("conn.php");

	$sql= "select * from restaurents where username='subway' " ;
	$res= mysqli_query($conn,$sql);
	if($res)
	{


	while ($row = mysqli_fetch_assoc($res)) {
		header("Content-type: image/jpg");
		echo $row["restaurent_image"];
		}
	}
?>
