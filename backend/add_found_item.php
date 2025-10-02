<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $title = $_POST['title'];
  $description = $_POST['description'];
  $location = $_POST['location'];
  $date = $_POST['date'];

  $stmt = $conn->prepare("INSERT INTO found_items (title, description, location, date_found) VALUES (?, ?, ?, ?)");
  $stmt->bind_param("ssss", $title, $description, $location, $date);

  if ($stmt->execute()) {
    echo "<script>alert('Found item reported successfully!'); window.location='found.html';</script>";
  } else {
    echo "Error: " . $stmt->error;
  }

  $stmt->close();
  $conn->close();
}
?>
