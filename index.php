<?php

include 'include/conn.php';

$sql = 'SELECT * FROM users';
$query = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($query)) {
    echo 'Name: '.$row['name'].', Age: '.$row['age'].', Sex: '.$row['sex'].'<br>';
}
