<?php
include "backend/db.php"; // database connection
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Lost & Found Reports</title>
<style>
  body { font-family:'Segoe UI', Arial; background:#f4f7fa; color:#333; padding:20px; }
  h1 { text-align:center; color:#2c3e50; }
  table { width:100%; border-collapse:collapse; margin:20px 0; }
  th, td { border:1px solid #ccc; padding:10px; text-align:left; }
  th { background:#2c3e50; color:white; }
  tr:nth-child(even) { background:#f2f2f2; }
  .section-title { margin-top:40px; font-size:1.5rem; color:#16a085; }
</style>
</head>
<body>

<h1>Lost & Found Reports</h1>

<div class="section-title">Lost Items</div>
<table>
<tr>
  <th>ID</th>
  <th>Title</th>
  <th>Description</th>
  <th>Location</th>
  <th>Date Lost</th>
  <th>Reported At</th>
</tr>

<?php
$result = $conn->query("SELECT * FROM lost_items ORDER BY created_at DESC");
while ($row = $result->fetch_assoc()) {
    echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['title']}</td>
    <td>{$row['description']}</td>
    <td>{$row['location']}</td>
    <td>{$row['date']}</td>
    <td>{$row['created_at']}</td>
    </tr>";
}
?>

</table>

<div class="section-title">Found Items</div>
<table>
<tr>
  <th>ID</th>
  <th>Title</th>
  <th>Description</th>
  <th>Location</th>
  <th>Date Found</th>
  <th>Reported At</th>
</tr>

<?php
$result = $conn->query("SELECT * FROM found_items ORDER BY created_at DESC");
while ($row = $result->fetch_assoc()) {
    echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['title']}</td>
    <td>{$row['description']}</td>
    <td>{$row['location']}</td>
    <td>{$row['date_found']}</td>
    <td>{$row['created_at']}</td>
    </tr>";
}
$conn->close();
?>

</table>

</body>
</html>
