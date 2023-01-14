<?php
$servername = "localhost";
$username = "root";
$password = "ABD&20160752";
$dbname = "web_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Check if DB is exists
$query = "SELECT role_id FROM users where id = 1 ";
$result = $conn->query($query);

if ($result){
    if(mysqli_num_rows($result) > 0){
        echo "The DataBase was created before !!";
    }else{
        $sql = "CREATE DATABASE myDB";
        if ($conn->query($sql) === TRUE) {
            echo "Database created successfully";
        } else {
            echo "Error creating database: " . $conn->error;
        }
    }
}else{
    echo 'Error: ' . mysqli_error($conn);
}
$conn->close();
?>