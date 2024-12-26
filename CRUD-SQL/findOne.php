<?php
function findOne($id)
{

    include 'conn.php';
    
    $sql = 'SELECT * FROM `Users` WHERE id = id;';
    $result = mysqli_query($conn , $sql);
    
}

?>