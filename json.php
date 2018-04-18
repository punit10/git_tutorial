<?php
$con = mysqli_connect("localhost", "root", "java@123", "punit")
or die('Database Not Connected. Please Fix the Issue! ' . mysql_error());

$qry = "SELECT * FROM messages ORDER BY id DESC";
$res = mysqli_query($con, $qry);
if (mysqli_num_rows($res) > 0) {
    $data_array = array();
    while ($rows = mysqli_fetch_assoc($res)) {
        $data_array[] = $rows;
    }
}
echo (json_encode($data_array));
