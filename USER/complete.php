<?php

session_start();
if(!isset($_SESSION['loggedinuser']))
{
    echo "<script type='text/javascript'>alert('You need to login first.');
    window.location='login-user.php';
    </script>";

}

$con=mysqli_connect('localhost','diens','user');
mysqli_select_db($con,'dien');

$wid = $_POST['wid'];
$statt="Completed";
$s="UPDATE Booking SET status='$statt' WHERE ID='$wid'";

$result = mysqli_query($con, $s);
if($result){
    echo "<script type='text/javascript'>alert('Hurrah! you completed your work.');
    window.location='booking.php';
    </script>";
}
else{
    echo "<script type='text/javascript'>alert('Not able to Connect.Try again');
    window.location='booking.php';
    </script>";
}
?>