<?php

include 'secrets.php';

$con = mysqli_connect($LOCALHOST, $USER_NAME, $PASSWORD, $DB_NAME);
if (!$con) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql1 = "create table To_DO(id int not null auto_increment, item text, primary_key (`id`)
)";
$sql2 = "insert into To_DO(id, item) value (1, 'Code more')";
$sql3 = "Select * from To_DO";

mysqli_query($con,$sql1);
mysqli_query($con,$sql2);

$ans = mysqli_query($con,$sql3);

printf("Select returned %d rows.\n", mysqli_num_rows($ans));

mysqli_close($con);
?>
