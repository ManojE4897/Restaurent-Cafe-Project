<?php
if(isset($_POST["submit"])){
   $restaurent_name=$_POST['RestaurentName'];
    $username=$_POST['uname'];
    $email=$_POST['Email'];
    $phone=$_POST['Phone'];
    $address=$_POST['Address'];
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
        include "conn.php";
        // Check connection
        if(mysqli_connect_errno()){
            die("Connection failed: " . mysqli_connect_error());
        }
        
        $dataTime = date("Y-m-d H:i:s");
        
        //Insert image content into database
        $insert = mysqli_query($conn,"update restaurents SET restaurent_name='$restaurent_name',restaurent_image='$imgContent', created='$dataTime',email='$email',phone='$phone',address='$address' where username='$username'");
        if($insert){
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        echo "Please select an image file to upload.";
    }
  }
 header ("Location:admin_edit.php");
?>

