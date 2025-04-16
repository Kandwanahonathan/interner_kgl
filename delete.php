<?php
include('conn.php');
$id=$_GET['id'];

$query=mysqli_query($conn,"DELETE FROM `knax` WHERE id=$id");
if ($query) {
    header("location:select.php");

}
else {
    echo "not deleted";
}
?>