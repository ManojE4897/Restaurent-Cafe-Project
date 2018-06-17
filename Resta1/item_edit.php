<?php
if(isset($_POST["submit"])){
   $item_name=$_POST['ItemName'];
    $username=$_POST['uname'];
    $price=$_POST['Price'];
    $description=$_POST['description'];
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
        include "conn..php";
        // Check connection
        if(mysqli_connect_errno()){
            die("Connection failed: " . mysqli_connect_error());
        }
        
        $dataTime = date("Y-m-d H:i:s");
        
        //Insert image content into database
        $insert = mysqli_query($conn,"UPDATE items SET item_image='$imgContent', created='$dataTime',price='$price',description='$description' where username='$username' and item_name='$item_name'");
        if($insert){
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        echo "Please select an image file to upload.";
    }
  }
 header ("Location:admin_edit.html");
?>

