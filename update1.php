<?php
include 'connect1.php';
$id = $_GET['updateid'];
$sql = "Select * from crud where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$first_name = $row['Firstname'];
$last_name = $row['Lastname'];
$email = $row['Email'];
$pass = $row['Password'];
if (isset($_POST['submit'])) {
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['myemail'];
    $pass = $_POST['mypassword'];
    $sql = "update crud set id=$id,Firstname='$first_name',Lastname='$last_name',Email='$email',Password='$pass' where id=$id";

    
    $result = mysqli_query($con, $sql);
    if ($result) {
        header("location:display1.php");
    } else {
        die(mysqli_error($con));
    }
}




?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div>
        <form method="post">
            <h1 id="h1">Sign up</h1>
            <label for="lastname" id="labellastname"><b>First Name</b></label>
            <br>
            <input type="text" id="lastname" name="lastname"  size="32" min="10" max="64" required value="<?php echo $first_name;?>"><br><br>
            <label for="firstname" id="labelfirstname"><b>Last Name</b></label>
            <br>
            <input type="text" id="firstname" name="firstname"  size="32" min="10" max="64" required value="<?php echo $last_name;?>"><br><br>
            <label for="email" id="labelemail"><b>Email</b></label>
            <br>
            <input type="email" id="email" name="myemail"  size="32" min="10" max="64" required value="<?php echo $email;?>"><br><br>
            <label for="password" id="labelpassword"><b>Password</b></label><br>
            <input type="password" id="mypassword" name="mypassword"  size="32" min="8" max="64" required value="<?php echo $pass;?>"><br><br>
            <input type="submit" value="update" name="submit" id="submit">

        </form>
    </div>
</body>
</html>