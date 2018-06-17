<!DOCTYPE html>
<html>
<head>
    <title>Item-Insert</title>
</head>
<body>
<?php

            include("conn.php");

        if(isset($_POST['submit'])) 
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
                        echo "success";
                    }
                   
                    else
                    {
                         echo("Error description: " . mysqli_error($conn));
                    }
            }

                mysqli_close($conn);
?>


</body>
</html>