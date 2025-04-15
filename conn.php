<?php
$conn=mysqli_connect ("localhost","root","","internership");
if ($conn) {
    echo"connected sucessfully";
}
else {
    echo "not connected";
}
?>