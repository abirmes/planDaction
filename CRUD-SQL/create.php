<?php 
function add($firstname , $lastname, $email , $password)
{
    include 'conn.php';
    $sql = 'INSERT INTO `Users` VALUES (NULL , firstname , lastname , email, password);';
    if(mysqli_query($conn,$sql)){
        echo "worked";
    }
    
}

?>