<?php
function findAll(){
    include 'conn.php';
    $sql = 'SELECT * FROM `Users`;';
    $result = mysqli_query($conn , $sql);
    while ($row = $result->fetch_assoc()){
        echo $row["id"];
        echo $row["firstname"];
        echo $row["lastname"];
        echo $row["email"];
        echo $row["password"];
    }
    
    
}

?>