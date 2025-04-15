<?php

$conn=mysqli_connect("localhost","root","","internership");
if ($conn) {
    echo"db connected successfully";
}
else{
    echo"unsuccess";
}
?>