<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
</head>
<body>
    <center>
    <form action="index.php" method="post" style="margin-top: 15%;">
        <h1 style="font-family: sans-serif;">FORM HANDLING</h1>
        <input type="text" style="width: 20%;  border-radius: 5px;" name="firstname" placeholder="Enter Your First Name">
        <br><br>
        <input type="text" style="width: 20%; border-radius: 5px;" name="lastname" placeholder="Enter Your Last Name">
        <br><br>
        <input type="submit" style="width: 10%; background-color: green; color: white; border-radius: 5px; border: none; height: 40px; cursor: pointer;">
    </form>
</center>

<?php
    error_reporting(0);
    $id = $_POST['id'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];

    $conn = mysqli_connect("localhost", "root", "", "formhandling1");
    if (!$conn) {
        echo "connection refuse";
    }

    $query = "INSERT INTO `user_details` VALUES ('null','$fname','$lname')";
    $q = mysqli_query($conn, $query);
    if (!$q) {
        echo "query not exectired";
    } else {
        echo "query success";
    }
?>
</body>
</html>