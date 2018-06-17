<?php
  include "conn.php";
  if(isset($_POST['submit']))
  {
  	$username=$_POST['uname'];
  	$sql="delete from restaurents where username='$username'";
  	if(mysqli_query($conn,$sql))
  		echo "deletion sucessful";
  	else 
  		echo "deletion failed";
  	header("Location:admin_delete.php");
  }
  ?>