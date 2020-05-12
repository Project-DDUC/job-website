<!DOCTYPE html>
<?php
// Create connection
include("config.php");
// Check connection
if (!$connect) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
// $remove = "DROP TABLE users";
// if (mysqli_query($connect, $remove)) {

// } else {
//   echo "Error in connection " . mysqli_error($connect);
// }
$sql = "CREATE TABLE IF NOT EXISTS `users` (
    `user_id` int(11) NOT NULL,
    `username` varchar(30) NOT NULL,
    `password` varchar(30) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
    `email` varchar(30) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1
  ";

if (mysqli_query($connect, $sql)) {

} else {
  echo "Error in connection " . mysqli_error($connect);
}

mysqli_close($connect);
?>