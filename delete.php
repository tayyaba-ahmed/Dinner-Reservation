<?php
include 'connection.php';
$id = $_GET['id'];
$q = "DELETE FROM reservation_table WHERE id='$id'";
$res = mysqli_query($con, $q);
if ($res) {
    echo "<script> 
        alert('Record deleted'); 
        window.location.href='read.php'; 
    </script>";
} else {
    echo "<script> 
        alert('Error'); 
    </script>";
}
?>
