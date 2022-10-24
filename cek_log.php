<?php
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];
$queries=sprintf("SELECT role FROM Login where username='%s' and password='%s'",
    mysqli_real_escape_string($con, $username),
    mysqli_real_escape_string($con, $password));
$ceklogin=mysqli_query($con,$queries);
$result=mysqli_fetch_array($ceklogin);

if(mysqli_num_rows($ceklogin) == null) {
    include 'login.html';
} else {
    printf("Select returned %d rows.\n", mysqli_num_rows($ceklogin)); echo '<br>';
    echo "role = ", $result[0];
}
?>