<!DOCTYPE html>
<html>
<head>
<style>

div.gallery {

    margin-top: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 222px;
}


div.gallery img {
    display:inline-block;
    float:left;
    width: 100%;
     opacity: 1;
    max-height: 200px;
}
.gallery img:hover{
    opacity: 0.8;
}

div.desc {

    padding: 15px;
    text-align: center;
    font-weight: bold;
    background-color: orange;
    font-size: 20px;
    color:white; 
}
div.cost {
    padding: 15px;
    text-align: center;
    font-weight: bold;
    background-color: cyan;
    font-size: 20px;
    color:white; 
}

.buy{
    padding: 15px;
    text-align: center;
    font-weight: bold;
    background-color: #ff5f6d;
    font-size: 20px;
    color:white; 
    opacity: 1;

}
.buy:hover{
    opacity: 0.7;
}


a{
    text-decoration: none;
    color:white;

}
</style>
</head>
<body>



  
    <?php
    include("conn.php");
    $sql = "SELECT * FROM items";
    $result = mysqli_query($conn, $sql);

    // output data of each row
    while($row = mysqli_fetch_assoc($result)) 
    {
        
        echo "<div class='gallery'>";

        echo " <img  width='600px' height='400px' src='uploads/ " . $row['item_image'] . "'";

        echo "</div>";
      
        echo '<div class="desc">'.$row["item_name"].'</div>'.
             '<div class="cost">'.'&#x20B9;' .$row["price"]. '</div>'.
       ' <div class="buy"><a href="popular-Restaurents.php">Bag It</a></div>';
    
    }

        mysqli_close($conn);
    ?>




</body>
</html>
