<?php
$servername = "localhost";
$username = "root";
$password = "ABD&20160752";
$dbname = "web_db";

$repeat_password = $name = $successful_message = '';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if DB is exists
$query = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$dbname'";
$result = $conn->query($query);


if ($result->num_rows == 0) {
    $sql = "CREATE DATABASE web_db";
    if ($conn->query($sql) === TRUE) {
        $sql = "CREATE table 
        users(id int primary key auto_increment, 
        first_name varchar(23),
        last_name varchar(12),
        username varchar(343),
        user_password varchar(100))";
        if ($conn->query($sql) === TRUE) {
            $successful_message = "The user table was created";
        } else {
            $error_message = "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Error creating database: " . $conn->error;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['user-password'];
    $repeat_password = $_POST['repeat-password'];
    $name = $_POST['Name'];
    $photographer_checker = $_POST['photographer-checker'];

    if (!empty($repeat_password)) {
        $sql = "SELECT username FROM users where username = '$username'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            header("Location: logIn.php?error_message=The+user+name+is+already+exists");
            exit;
        } else {
            if ($password != $repeat_password) {
                header("Location: logIn.php?error_message=Passwords+don't+match");
                exit;
            } else {
                $sql = "INSERT INTO users (first_name, username, user_password, role_id) VALUES ($name, $username, $password, $photographer_checker)";
                if ($conn->query($sql) === TRUE) {
                    if ($photographer_checker == 0) {
                        setcookie('username', $username, time() + (86400 * 30), "/");
                        header("Location: logIn_home.php");
                        exit;
                    } else {
                        session_start();
                        $_SESSION['username'] = $username;
                        header("Location: logIn_home.php");
                        exit;
                    }
                }
            }
        }
    } else {
        $sql = "SELECT username,user_password 
        from users where 
        username = '$username' and user_password = '$password'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $sql = "SELECT role_id from users where username = '$username'";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
                if ($row['role_id'] == 0) {
                    setcookie('username', $username, time() + (86400 * 30), "/");
                    header("Location: logIn_home.php");
                    exit;
                } else {
                    session_start();
                    $_SESSION['username'] = $username;
                    header("Location: logIn_home.php");
                    exit;
                }
            }
        } else {
            header("Location: logIn.php?error_message=the+username+or+password+incorrect+!!!");
            exit;
        }
    }
}
$conn->close();
?>