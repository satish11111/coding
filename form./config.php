
<?php
    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_DATABASE", "webdemo");

    $db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

if($db->connect_error || $db->error){

echo "error";

}else{

echo "done";

}

?>
