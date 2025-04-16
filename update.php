<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>to update knax student</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="form-group col-md-5">
        <form action="" method="post">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="name">
                <label for="">name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="level">
                <label for="">level</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="number">
                <label for="">number</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="amount">
                <label for="">amount</label>
            </div>
            <button type="submit" name="submit" class="btn btn-success form-control">submit</button>
        </form>
    </div>
    <?php
    include('conn.php');
    if (isset($_POST['submit'])) {
        $id=$_GET['id'];
        $name=$_POST['name'];
        $level=$_POST['level'];
        $number=$_POST['number'];
        $amount=$_POST['amount'];
        $update="UPDATE knax SET st_name='$name',level='$level',number='$number',amount='$amount' where id='$id'";
        $query=mysqli_query($conn,$update);
        if ($query) {
            echo "data updated";

        }
        else {
            echo" data not updated";
        }
    }
    ?>
</body>
</html>