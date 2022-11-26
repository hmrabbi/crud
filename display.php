<?php 
include'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Crud</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
       
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1> <button class="btn btn-success"><a class="text-light" href="insert.php">Add Student</a></button></h1>
                    </div>
                    <div class="card-body">
                    <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl No</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Address</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $sql = "SELECT * FROM student";
    $result = mysqli_query($conn,$sql);
    
    if ($result){
     // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
        $id=$row["id"];
        $name=$row["name"];
        $des=$row["dept"];
        $address=$row["address"];
        $phone=$row["phone"]; 
        $email=$row["email"];

        echo '<tr>
        <td>'.$id.'</td>
        <td>'.$name.'</td>
        <td>'.$des.'</td>
        <td>'.$address.'</td>
        <td>'.$phone.'</td>
        <td>'.$email.'</td>

        <td>
        <button class="btn btn-success"><a class="text-light" href="update.php?updateid='.$id.'">Update</a></button>
        <button class="btn btn-danger"><a class="text-light" href="delete.php?deleteid='.$id.'">Delete</a></button>
        </td>
       
        </tr>';
     }
    } 
    ?>
    
  </tbody>
</table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>