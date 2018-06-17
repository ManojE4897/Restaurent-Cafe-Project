<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css2/style3.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

</style>
</head>
<body>
<div class="sidenav">
  <a href="admin_insertoperation.php">Insert</a>
  <a href="admin_delete.php">Delete</a>
  <a href="admin_edit.php">Edit</a>
  <a href="index.php">HOME</a>
</div>

<div class="main">
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Restaurent Delete</button>
<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Item Delete</button>
<p id="message"></p>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <center><h3>Restaurent Deletion</h3></center>
      <label for="RestaurentName" >RestaurentName</label><br/>
        <input type="text" name="RestaurentName" id="RestaurentName" palceholder="enter ypur restaurent name" autofocus><br/><br/>
        <label for="uname" >UserName</label><br/>
        <input type="text" name="uname" id="uname" palceholder="enter your user name" autofocus><br/><br/>
        <label for="Email">Email</label><br/>
        <input type="email" name="Email" id="Email"><br/><br/>
        <input type="submit" name="submit1" value="Delete Restaurent" id="submit">
         <input type="reset" name="reset" value="Reset" id="Reset">   
    </div>
  </form>
</div>
<div id="id02" class="modal">
  
  <form class="modal-content animate" action="" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <center><h3>Item Deletion</h3></center>
      <label for="uname" >UserName</label><br/>
        <input type="text" name="uname" id="uname" palceholder="enter your user name" autofocus><br/><br/>
        <label for="Itemname">ItemName</label><br/>
        <input type="text" name="ItemName" id="Itemname"><br/><br/>
        <input type="submit" name="submit2" value="Delete Item" id="submit">
         <input type="reset" name="reset" value="Reset" id="Reset">   
    </div>
  </form>
  </div>
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
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
<?php
  include "conn.php";
  if(isset($_POST['submit1']))
  {
    $username=$_POST['uname'];
    $sql="delete from restaurents where username='$username'";
    if(mysqli_query($conn,$sql))
      echo '<script>
    document.getElementById("message").innerHTML="Restaurent deletion sucessful"</script>';
    else 
     echo '<script>
    document.getElementById("message").innerHTML="Restaurent deletion not sucessful"</script>';
  }
  ?>
  <?php
  include "conn.php";
  if(isset($_POST['submit2']))
  {
    $username=$_POST['uname'];
    $item_name=$_POST['ItemName'];
    $sql="delete from items where username='$username' and item_name='$item_name'";
    if(mysqli_query($conn,$sql))
      echo '<script>
    document.getElementById("message").innerHTML="Item deletion sucessful"</script>';
    else 
      echo '<script>
    document.getElementById("message").innerHTML="Item deletion not sucessful"</script>';
  }
  ?>