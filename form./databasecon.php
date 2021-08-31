$host="localhost";
$user="root";
$password="";
$con=mysql_connect($host,$user,$password);
if(!$con) {
  echo '<h1>Connected to MySQL</h1>';
  //if connected then Select Database.
  $db=mysql_select_db("webdemo",$con);
  $query=mysql_query("YOUR_MYSQL_QUERY",$db);
}
else {
  echo '<h1>MySQL Server is not connected</h1>';
}