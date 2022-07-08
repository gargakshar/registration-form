<?php

include 'connection.php';

$selectquery="SELECT * FROM `uni admission form`";
$query=mysqli_query($con,$selectquery);
$res=mysqli_fetch_array($query);






?>