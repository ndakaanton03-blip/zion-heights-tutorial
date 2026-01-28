<?php include '../backend/db.php'; ?>

<h2>Admin Timetable</h2>

<form action="../backend/save_timetable.php" method="POST">
  <input name="grade" placeholder="Grade"><br><br>
  <input name="subject" placeholder="Subject"><br><br>
  <input name="day" placeholder="Day"><br><br>
  <input name="time" placeholder="Time"><br><br>
  <input name="room" placeholder="Room"><br><br>
  <button>Add</button>
</form>

<hr>

<table border="1" cellpadding="10">
<tr>
<th>Grade</th><th>Day</th><th>Time</th><th>Subject</th><th>Room</th>
</tr>

<?php
$result = mysqli_query($conn,"SELECT * FROM timetable");
while($row=mysqli_fetch_assoc($result)){
echo "<tr>
<td>{$row['grade']}</td>
<td>{$row['day']}</td>
<td>{$row['time']}</td>
<td>{$row['subject']}</td>
<td>{$row['room']}</td>
</tr>";
}
?>
</table>
