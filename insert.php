<?php

include 'include/conn.php';

$sql = "INSERT INTO users (name, age, sex) VALUES ('Alex', 15, 'female')";
$query = mysqli_query($conn, $sql);
if($query){
    echo "Data has been inserted!";
}else{
    echo "Data has not been inserted!";
}


