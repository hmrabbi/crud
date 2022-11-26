<?php
include'connect.php';
$id = $_GET['updateid'];

$sql = "SELECT * FROM student where id=$id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$name=$row["name"];
$des=$row["dept"];
$address=$row["address"];
$phone=$row["phone"]; 
$email=$row["email"];

if(isset($_POST['submit'])) {
    $name=$_POST['name'];
    $dept=$_POST['dept'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    
    $sql = "UPDATE student SET id=$id,name='$name',dept='$dept',address='$address',phone='$phone',email='$email' WHERE id=$id";

$result=mysqli_query($conn,$sql);
if ($result) {
  //echo "New record created successfully";
  header('location:display.php');
} else {
  echo $conn->error;
}
}
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
                        <h1>Add Student</h1>
                    </div>
                    <div class="card-body">
                    <form method="post">
                       <div class="form-group">
                            <label>Student Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Your Name" value="<?php echo $name; ?>"> 
                       </div>
                       <div class="form-group">
                            <label>Student Department</label>
                            <input type="text" class="form-control" name="dept" placeholder="Enter Your Department" value="<?php echo $des; ?>"> 
                       </div>
                       <div class="form-group">
                            <label>Student Address</label>
                            <input type="text" class="form-control" name="address" placeholder="Enter Your Address" value="<?php echo $address; ?>">
                        </div>
                        <div class="form-group">
                            <label>Student Phone</label>
                            <input type="number" class="form-control" name="phone" placeholder="Enter Your Phone" value="<?php echo $phone; ?>"> 
                       </div>
                       <div class="form-group">
                            <label>Email</label>
                            <input type="eamil" class="form-control" name="email" placeholder="Enter Your Email" value="<?php echo $email; ?>">
                        </div>
                         <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>