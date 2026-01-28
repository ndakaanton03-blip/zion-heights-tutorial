<?php
include 'db.php';

$grade=$_POST['grade'];
$subject=$_POST['subject'];
$day=$_POST['day'];
$time=$_POST['time'];
$room=$_POST['room'];

mysqli_query($conn,
"INSERT INTO timetable(grade,subject,day,time,room)
VALUES('$grade','$subject','$day','$time','$room')");

header("Location: ../admin/timetable.php");
?>
