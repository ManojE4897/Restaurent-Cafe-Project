<?php
  include "conn.php";
  if(isset($_POST['submit']))
  {
  	$username=$_POST['uname'];
    $item_name=$_POST['ItemName'];
  	$sql="delete from items where username='$username' and item_name='$item_name'";
  	if(mysqli_query($conn,$sql))
  		echo "deletion sucessful";
  	else 
  		echo "deletion failed";
  	header("Location:admin_delete.html");
  }
  ?>