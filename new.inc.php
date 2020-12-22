<?php 
if (isset($_POST['submit_event'])) {
// connect to database
require_once('../connection.php');
// get all data from the form
$name = $_POST['name'];
$image = $_POST['image'];
$price = $_POST['price'];
$description = $_POST['description'];

// insert the data into the database
$sql = "INSERT INTO event(name, image, price, description) VALUES('$name', '$image', $price, '$description')";

if (mysqli_query($conn, $sql)) {
    header('Location: ../view-event.php');
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
    

// redirect to the events page
}else{
    header('Location: ../view-event.php');
    exit();
}
?>
