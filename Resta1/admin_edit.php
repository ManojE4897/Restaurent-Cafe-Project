<?php
include"conn.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>EDITS</title>
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
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Restaurent Edit</button>
<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Item Update</button>
<button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Item Name Edit</button>
<p id="message"></p>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="" method="post" enctype="multipart/form-data">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <center><h3>Restaurent Details Edit</h3></center>
      <label for="RestaurentName" >RestaurentName</label><br/>
        <input type="text" name="RestaurentName" id="RestaurentName" palceholder="enter ypur restaurent name" autofocus><br/><br/>
        <label for="uname" >UserName</label><br/>
        <input type="text" name="uname" id="uname" palceholder="enter your user name" autofocus><br/><br/>
        <label for="Email">Email</label><br/>
        <input type="email" name="Email" id="Email"><br/><br/>
        <label for="Phone">Phone</label><br/>
        <input type="number" name="Phone" id="Phone" place="Enter Phone Number"><br/><br/>
        <label for="add">Address</label><br/>
        <textarea name="Address" cols="30" rows="5"></textarea><br/>
        <label for="Image">RestarentImage</label><br/>
        <input type="file" name="image" id="image" value="upload" ><br/><br/>
        <input type="submit" name="submit1" value="submit" id="submit">
         <input type="reset" name="reset" value="Reset" id="Reset">
    </div>
  </form>
</div>
<div id="id02" class="modal">
  
  <form class="modal-content animate" action="" method="post" enctype="multipart/form-data">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <center><h3>Item Details Edit</h3></center>
      <label for="uname" >UserName</label><br/>
        <input type="text" name="uname" id="uname" palceholder="enter your user name" autofocus><br/><br/>
        <label for="Itemname">ItemName</label><br/>
        <input type="text" name="ItemName" id="Itemname"><br/><br/>
        <label for="price">Price</label><br/>
        <input type="number" name="Price" id="Price" placeholders ="Enter Price"><br/><br/>
        <label for="description">Description</label><br/>
        <textarea name="description" cols="30" rows="5"></textarea><br/>
        <label for="image">ItemImage</label><br/>
        <input type="file" name="image" id="image" value="upload" ><br/><br/>
        <input type="submit" name="submit2" value="submit" id="submit">
        <input type="reset" name="reset" value="Reset" id="Reset">
    </div>
  </form>
  </div>
  <div id="id03" class="modal">
  
  <form class="modal-content animate" action="" method="post" >
    <div class="imgcontainer">
      <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <center><h3>Item Name Edit</h3></center>
      <label for="uname" >UserName</label><br/>
        <input type="text" name="uname" id="uname" palceholder="enter your user name" autofocus="on"><br/><br/>
        <label for="oname">OldItemName</label><br/>
        <input type="text" name="oldname" id="oldname"><br/><br/>
        <label for="name">NewItemName</label><br/>
        <input type="text" name="newname" id="newname"><br/><br/>
        <input type="submit" name="submit3" value="submit" id="submit">
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
var modal = document.getElementById('id03');

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
if(isset($_POST["submit1"])){
   $restaurent_name=$_POST['RestaurentName'];
    $username=$_POST['uname'];
    $email=$_POST['Email'];
    $phone=$_POST['Phone'];
    $address=$_POST['Address'];
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
        
        
        $dataTime = date("Y-m-d H:i:s");
        
        //Insert image content into database
        $insert = mysqli_query($conn,"update restaurents SET restaurent_name='$restaurent_name',restaurent_image='$imgContent', created='$dataTime',email='$email',phone='$phone',address='$address' where username='$username'");
        if($insert)
        {
             echo '<script> document.getElementById("message").innerHTML="Restaurents Edited successfully"; </script>';
        }
        else
        {
             echo '<script>
             document.getElementById("message").innerHTML="Restaurents Editing Failed";
             </script>';
        } 
    }
    else
    {
        echo '<script> document.getElementById("message").innerHTML="Please select an image file to upload."; </script>';
    }
  }
?>

<?php
if(isset($_POST["submit2"])){
   $item_name=$_POST['ItemName'];
    $username=$_POST['uname'];
    $price=$_POST['Price'];
    $description=$_POST['description'];
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
        
        
        $dataTime = date("Y-m-d H:i:s");
        
        //Insert image content into database
        $insert = mysqli_query($conn,"UPDATE items SET item_image='$imgContent', created='$dataTime',price='$price',description='$description' where username='$username' and item_name='$item_name'");

        if($insert)
        {
            echo '<script> document.getElementById("message").innerHTML="Item Edited successfully"; </script>';
           
        }

        else{

             echo '<script> document.getElementById("message").innerHTML="Item Edits fail "; </script>';
             echo mysqli_error();
        } 

    }
    else
    {
        echo '<script> document.getElementById("message").innerHTML="Please select an image file to upload."; </script>';
    }

  }
?>
<?php
if(isset($_POST["submit3"])){
    $old_item_name=$_POST['oldname'];
    $new_item_name=$_POST['newname'];
    $username=$_POST['uname'];
        $insert = mysqli_query($conn,"UPDATE items SET item_name='$new_item_name' where username='$username' and item_name='$old_item_name'");

        if(mysqli_num_rows($insert))
        {
            echo '<script> document.getElementById("message").innerHTML="ItemName Edited successfully"; </script>';
        }

        else
        {
            echo '<script> document.getElementById("message").innerHTML="ItemName Edits fail "; </script>';
        } 
  }

?>


