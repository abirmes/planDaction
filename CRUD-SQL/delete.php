<?php 
function delete($id)
{
    include 'conn.php';
    $sql = 'DELETE FROM `Users` WHERE id = id';
    mysqli_query($conn , $sql);
}


?>