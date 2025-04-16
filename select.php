<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>select data from knax</title>
</head>
<body>
   <table border='2' style="border-collapse:none;">
      <th>Id</th>
      <th>Student_Name</th>
      <th>Level</th>
      <th>Number</th>
      <th>Amount</th>
      <th colspan="2">operator</th>
      <?php
      include('conn.php');
      $select="SELECT * FROM knax";
      $query=mysqli_query($conn,$select);
      while ($row=mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td><?php echo$row['id']?></td>
            <td><?php echo$row['st_name']?></td>
            <td><?php echo$row['level']?></td>
            <td><?php echo$row['number']?></td>
            <td><?php echo$row['amount']?></td>
           
            <?php echo "<td>  <a href='update.php?id=".$row['id']."'>update</a></td>"?>
            <?php echo "<td> <a href='delete.php? id=".$row['id']."'>Delete</a><td>"?>
        </tr>
        <?php
      }
      ?>
   </table> 
</body>
</html>