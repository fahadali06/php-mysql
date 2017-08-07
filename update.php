<?php

include 'include/conn.php';

$sql = "UPDATE users SET name = 'Hayee', age = 45, sex = 'male' WHERE id = 1";//Give those id you want to update
$query = mysqli_query($conn, $sql);
if($query){
    echo "Data has been updated!";
}else{
    echo "Data has not been updated!";
}


