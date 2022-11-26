<?php
include'connect.php';
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM student WHERE id=$id";
    $result=mysqli_query($conn,$sql);

if ($result) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
} 
 ?>