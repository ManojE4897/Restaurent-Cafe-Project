<?php
if(isset($_POST["submit"])){
    $old_item_name=$_POST['oname'];
    $new_item_name=$_POST['name'];
    $username=$_POST['uname'];
    include "conn.php";
        $insert = mysqli_query($conn,"UPDATE items SET item_name='$new_item_name' where username='$username' and item_name='$old_item_name'");
        if($insert){
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed, please try again.";
        } 
  }
 header ("Location:admin_edit.html");
?>

