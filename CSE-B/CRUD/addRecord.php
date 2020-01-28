<?php
include('config.php');
?>

<?php 
if (isset($_POST['btn'])){
 echo "Dear, ".$_POST['username']." You are Welcome.".'<br>';
 $id = $_POST['id'];
 $username = $_POST['username'];
 $age = $_POST['age'];
 $contact = $_POST['contact'];
 $email = $_POST['email']; 
}
else{
    echo "Welcome Guest";
}
?>
<?php 
$sql  = "INSERT INTO `users` VALUES ('$id' ,'$username', '$age', '$contact', '$email')";
    $query=mysqli_query($conn, $sql);
?>
