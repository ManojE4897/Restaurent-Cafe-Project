
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css2/style2.css">

</head>
<body>

<div class="sidenav">
  <a href="admin_insert.php">Insert</a>
  <a href="admin_delete.php">Delete</a>
  <a href="admin_edit.php">Edit</a>
</div>


<div class="main">
	
	<form action="insert.php" method="post">
		<label for="RestaurentName" >RestaurentName</label><br/>
		<input type="text" name="RestaurentName" id="RestaurentName" palceholder="enter ypur restaurent name" autofocus><br/><br/>
		<label for="Email">Email</label><br/>
		<input type="email" name="Email" id="Email"><br/><br/>
		<label for="Phone">Phone</label><br/>
		<input type="number" name="Phone" id="Phone" place="Enter Phone Number"><br/><br/>
		<label for="Image">Image</label><br/>
		<input type="file" name="Image" id="Image" value="upload" ><br/><br/>
		<label for="items">Number Of Items</label><br/>
		<input type="number" name="nItems" id="nItem"><br/><br/>
		<label for="add">Address</label><br/>
		<textarea name="Address" cols="30" rows="5"></textarea><br/>
		<input type="submit" name="submit" value="submit" id="submit">
  
</div>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

     
</body>
</html> 
