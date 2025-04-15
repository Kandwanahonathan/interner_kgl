<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>select data</title>
</head>
<body>
    <table border='2'>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Password</th>
            <th>Age</th>
            <th colspan='2'>operator</th>
        </tr>
        <?php
        include('conn.php');
        $select="SELECT * FROM class";
        $query=mysqli_query($conn,$select);
        while ($row=mysqli_fetch_assoc($query)) {
            ?>
            <tr>
                <td><?php echo$row['id']?></td>
                <td><?php echo$row['name']?></td>
                <td><?php echo$row['password']?></td>
                <td><?php echo$row['age']?></td>
                <td><a href="">Update</a></td>
                <td><a href="#">Delete</a></td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>