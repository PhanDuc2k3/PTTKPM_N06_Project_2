
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "mysql_todolist";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


// Thực hiện việc đăng ký và thêm thông tin người dùng
$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['name'];


$sql = "INSERT INTO tbl_user (email, password, name) VALUES ('$email', '$password', '$name')";

if ($conn->query($sql) === TRUE) {
    echo "Đăng ký thành công!";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}
?>