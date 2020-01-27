<?php
include('config.php');
?>

<?php 
if (isset($_POST['btn'])){
 echo "Dear, ".$_POST['username']." Your details are".'<br>';
 echo 'ID - '.$_POST['id'].'<br>';
 echo 'Username - '.$_POST['username'].'<br>';
 echo 'Age - '.$_POST['age'].'<br>';
 echo 'Contact - '.$_POST['contact'].'<br>';
 echo 'Email - '.$_POST['email']; 
}
else{
    echo "Welcome Guest";
}
?>
<html>
    <head>
    <title>Input Form</title>
    </head>
    
    <body>
    <form action="details.php" method="post">
      ID: <input name="id", type="text" placeholder="Enter ID"><br>
      Name: <input type="text" name="username"><br>
      Age:<input type="text" name="age" placeholder="Enter Age"><br>
      Contact:<input type="text" name="contact" placeholder="Enter Contact"><br>
      Email: <input type="text" name="email" placeholder="Enter email"><br>
      <input type="submit" name='btn'>
    </form>
    </body>
</html>