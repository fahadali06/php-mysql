<?php

include 'include/conn.php';

$sql = "DELETE FROM users WHERE id = 1";//Give those id you want to update
$query = mysqli_query($conn, $sql);
if($query){
    echo "Data has been updated!";
}else{
    echo "Data has not been updated!";
}


