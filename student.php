<?php
include '../backend/db.php';
$grade = "Grade 11";
?>

<h2><?= $grade ?> Timetable</h2>

<table border="1" cellpadding="10">
<tr>
<th>Day</th><th>Time</th><th>Subject</th><th>Room</th>
</tr>

<?php
$result = mysqli_query($conn,"SELECT * FROM timetable WHERE grade='$grade'");
while($row=mysqli_fetch_assoc($result)){
echo "<tr>
<td>{$row['day']}</td>
<td>{$row['time']}</td>
<td>{$row['subject']}</td>
<td>{$row['room']}</td>
</tr>";
}
?>
</table>
