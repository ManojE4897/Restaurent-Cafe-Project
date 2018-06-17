<?php
if(isset($_POST["submit"])){
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

        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
        include "conn.php";
        // Check connection
        if(mysqli_connect_errno()){
            die("Connection failed: " . mysqli_connect_error());
        }
        
        $dataTime = date("Y-m-d H:i:s");
        
        //Insert image content into database
        $insert = mysqli_query($conn,"INSERT into restaurents (username,restaurent_name,restaurent_image, created,email,phone,address,file_name,file_type) VALUES ('$username','$restaurent_name','$imgContent', '$dataTime','$email','$phone','$address','$file','$file_type')");
        if($insert){
            echo'<script>
              document.getElementByName("message").innerHTML="Registration successfull";
              </script>';
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        echo "Please select an image file to upload.";
    }
  }
 header ("Location:admin_insertoperation.php");
?>

