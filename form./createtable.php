 <?php
define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_DATABASE", "webdemo");

    $db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
// Check connection
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}

// sql to create table
$sql = "CREATE TABLE student (
regno INT(6) ,
name VARCHAR(30) ,
gpa INT(30) ,
email VARCHAR(50)
)";

if ($db->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $db->error;
}
$db->close();
?> 