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
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Restaurent Registration</button>
<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Item Insertion</button>
<p id="message" name="message"></p>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="" method="post" enctype="multipart/form-data">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
        <center><h3>Restaurent Registration</h3></center>
      <label for="RestaurentName" >RestaurentName</label><br/>
        <input type="text" name="RestaurentName" id="RestaurentName" palceholder="enter ypur restaurent name" autofocus><br/><br/>
        <label for="uname" >UserName</label><br/>
        <input type="text" name="uname" id="uname" palceholder="enter your user name" autofocus><br/><br/>
        <label for="Email">Email</label><br/>
        <input type="email" name="Email" id="Email"><br/><br/>
        <label for="Phone">Phone</label><br/>
        <input type="text" name="Phone" id="Phone" place="Enter Phone Number"><br/><br/>
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
        <center><h3>Item Insertion</h3></center>
      <label for="uname" >UserName</label><br/>
        <input type="text" name="uname" id="uname" autofocus="on" required="required"><br/><br/>
        <label for="Itemname">ItemName</label><br/>
        <input type="text" name="ItemName" id="Itemname" required="required"><br/><br/>
        <label for="price">Price</label><br/>
        <input type="number" name="Price" id="Price" place="Enter Price" required="required"><br/><br/>
        <label for="description">Description</label><br/>
        <textarea name="description" cols="30" rows="5" ></textarea><br/>
        <label for="image">ItemImage</label><br/>
        <input type="file" name="image" id="image" value="upload" required="required"><br/><br/>
        <input type="submit" name="submit2" value="submit" id="submit">
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
if(isset($_POST["submit1"])){
   $restaurent_name=$_POST['RestaurentName'];
    $username=$_POST['uname'];
    $email=$_POST['Email'];
    $phone=$_POST['Phone'];
    $address=$_POST['Address'];
    $check = getimagesize($_FILES["image"]["tmp_name"]);

    if($check !== false){
        $file = rand(1000,100000)."-".$_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $folder="uploads/";
 
    move_uploaded_file($file_loc,$folder.$file); 

       # $image = $_FILES['image']['name'];
       # $imgContent = addslashes(file_get_contents($image));
        include "conn.php";
        
        $dataTime = date("Y-m-d H:i:s");
        
        //Insert image content into database
        $insert = mysqli_query($conn,"INSERT into restaurents (username,restaurent_name,restaurent_image, created,email,phone,address,file_name,file_type) VALUES ('$username','$restaurent_name','$file', '$dataTime','$email','$phone','$address','$file','$file_type')");
        if($insert){
            echo'<script>
              document.getElementById("message").innerHTML="Registration successfull";
              </script>';
        }else{
            echo'<script>
              document.getElementById("message").innerHTML="Registration not successfull";
              </script>';
        } 
    }else{
        echo'<script>
              document.getElementById("message").innerHTML="Please select an image to upload";
              </script>';
    }
  }
?>

<?php

            include("conn.php");

        if(isset($_POST['submit2'])) 
            {
                $name = mysqli_real_escape_string($conn, $_POST['uname']);

                $item_name = mysqli_real_escape_string($conn, $_POST['ItemName']);

                $price       = mysqli_real_escape_string($conn, $_POST['Price']);

                $description = mysqli_real_escape_string($conn, $_POST['description']);

                $dataTime = date("Y-m-d H:i:s");

                $file = rand(1000,100000)."-".$_FILES['image']['name'];

                $file_loc  = $_FILES['image']['tmp_name'];
                $file_size = $_FILES['image']['size'];
                $file_type = $_FILES['image']['type'];
                $folder    = "uploads/";


                move_uploaded_file( $file_loc, $folder.$file );

                 $sql= "INSERT into items (username, item_name, item_image, created, price, file_type, file_size,  description)  VALUES ('$name', '$item_name', '$file', '$dataTime', '$price', '$file_type','$file_size', '$description')";

                 $insert = mysqli_query($conn,$sql);

                


                    if($insert) 
                    {
                        echo '<script>
                           document.getElementById("message").innerHTML="success";
                           </script>';
                    }
                   
                    else
                    {
                         echo '<script>
                           document.getElementById("message").innerHTML="success";
                           </script>';
                    }
            }

                mysqli_close($conn);
?>
