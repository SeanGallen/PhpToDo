<?php

include 'secrets.php';

$con = mysqli_connect($LOCALHOST, $USER_NAME, $PASSWORD, $DB_NAME);
if (!$con) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql1 = "create table toDo(id int not null AUTO_INCREMENT PRIMARY KEY, item text not null)";
$sql2 = "insert into toDo(item) value ('Code More')";
$sql3 = "Select * from toDo";

/* $sql1 = "create table toDo(id int not null auto_increment, item text)"; */
/* $sql2 = "insert into toDo(id, item) value (1, 'Code more')"; */
/* $sql3 = "Select * from toDo"; */

mysqli_query($con,$sql1);
mysqli_query($con,$sql2);

$ans = mysqli_query($con,$sql3);

printf("Select returned %d rows.\n", mysqli_num_rows($ans));

mysqli_close($con);
?>
