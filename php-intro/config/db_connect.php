<?php 

// Connect to database
$conn = mysqli_connect('localhost', 'username', 'pwd', 'database-name');

// check connection
if(!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}

?>