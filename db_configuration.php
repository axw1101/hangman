<?php
DEFINE('DB_SERVER', 'localhost');
DEFINE('DB_NAME', 'icsbinco_hangman_db');
DEFINE('DB_USER', 'icsbinco_hangman_user');
DEFINE('DB_PASS', 'ics499_fall2022');

# connects to the mysql database
function dbConnect(){
    
    $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}
?>