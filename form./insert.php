 <?php
define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_DATABASE", "webdemo");

    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
// Check connection
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO student (regno, name, gpa,email)
VALUES (1046, 'satish',8.23, 'satish@gmail.com')";
$sql = "INSERT INTO student (regno, name, gpa,email)
VALUES (1048, 'abru',7.23, 'abru@gmail.com')";
$sql = "INSERT INTO student (regno, name, gpa,email)
VALUES (1059, 'krishna',7.23, 'krishna@gmail.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 