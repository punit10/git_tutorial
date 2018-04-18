<?php
$con = mysqli_connect("localhost", "root", "java@123", "punit")
or die('Database Not Connected. Please Fix the Issue! ' . mysql_error());
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$date = $_POST['date'];
if ($id) {
    $qry = "UPDATE `messages` SET `name`='$name',`email`='$email',
        `message`='$message',`date`='$date' WHERE `id`='$id' ";
} else {
    $qry = "INSERT INTO `messages`(`name`, `email`, `message`, `date`)
    VALUES ('$name','$email','$message','$date') ";
}
$result = mysqli_query($con, $qry);
