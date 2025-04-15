<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert using php</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="form-group">
        <form action="" method="post">
            <h2 class="text">form for insert</h2>
            <div class="form-floating md-4 mb-3">
                <input type="text" name="name" class="form-control">
                <label for="name">name</label>
            </div>
            <div class="form-floating md-4 mb-3">
                <input type="password" name="password" class="form-control">
                <label for="name">password</label>
            </div>
            <div class="form-floating md-4 mb-3">
                <input type="text" name="age" class="form-control">
                <label for="name">age</label>
            </div>
            <button type="submit" class="btn btn-success form-control" name="submit">submit</button>
        </form>
    </div>
</body>
</html>
<?php
include('conn.php');
 if (isset($_POST['submit'])) {
     $name=$_POST['name'];
     $password=$_POST['password'];
     $age=$_POST['age'];
     $insert="INSERT INTO class (name,password,age) VALUES('$name','$password','$age')";
     if (mysqli_query($conn,$insert)) {
        echo"data inserted";

     }
     else {
        echo"data uninserted";
     }
 }

?>