<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $title = $_POST['title'];
  $description = $_POST['description'];
  $location = $_POST['location'];
  $date = $_POST['date'];

  $stmt = $conn->prepare("INSERT INTO lost_items (title, description, location, date_lost) VALUES (?, ?, ?, ?)");
  $stmt->bind_param("ssss", $title, $description, $location, $date);

  if ($stmt->execute()) {
    echo "<script>alert('Lost item reported successfully!'); window.location='lost.html';</script>";
  } else {
    echo "Error: " . $stmt->error;
  }

  $stmt->close();
  $conn->close();
}
?>
