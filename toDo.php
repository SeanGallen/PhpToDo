<?php

include 'secrets.php';

$con = mysqli_connect($LOCALHOST, $USER_NAME, $PASSWORD, $DB_NAME);
if (!$con) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql1 = "create table People(id int not null, username text not null)";
$sql2 = "insert into People(id, username) value (1, 'bob')";
$sql3 = "Select * from People";

mysqli_query($con,$sql1);
mysqli_query($con,$sql2);

$ans = mysqli_query($con,$sql3);

printf("Select returned %d rows.\n", mysqli_num_rows($ans));

mysqli_close($con);
?>
