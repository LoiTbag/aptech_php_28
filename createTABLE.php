<?php
include 'connetdatabase.php';
// chuẩn bị câu lệnh sql để tạo bảng

$sql = "CREATE TABLE user(
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
 )";
 
if($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
 
$conn->close();
?>