<?php
    $conn = mysqli_connect("localhost", "root", "", "formhandling1");
    if (!$conn) {
        echo "connection refuse";
    } else{
        echo "connection established";
    }

    $id = $_GET['id'];
    $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT `id`, `firstname`, `lastname` FROM `user_details` WHERE id='$id'"));

    ?>

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
    <form action="update.php" method="post" style="margin-top: 15%;">
        <h1 style="font-family: sans-serif;">FORM HANDLING</h1>
        <input type="text" style="width: 20%;  border-radius: 5px;" value="<?= $row['id'] ?>" name="id">
        <br><br>
        <input type="text" style="width: 20%;  border-radius: 5px;" value="<?= $row['firstname'] ?>" name="firstname" placeholder="Enter Your First Name">
        <br><br>
        <input type="text" style="width: 20%; border-radius: 5px;" value="<?= $row['lastname'] ?>" name="lastname" placeholder="Enter Your Last Name">
        <br><br>
        <input type="submit" style="width: 10%; background-color: green; color: white; border-radius: 5px; border: none; height: 40px; cursor: pointer;">
    </form>
</center>
    </body>
    </html>