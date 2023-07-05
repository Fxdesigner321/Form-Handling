<?php
    $conn = mysqli_connect("localhost", "root", "", "formhandling1");
    if (!$conn) {
        echo "connection refuse";
    } else{
        echo "connection established";
    }

    $query = "select * from user_details";
    $q = mysqli_query($conn, $query);
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
        <h1>TABLE DATA</h1>
        <table border="2pc solid black" width="80%">
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Update data</th>
            </tr>

            <?php while ($row = mysqli_fetch_assoc($q)) { ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['firstname'] ?></td>
                    <td><?php echo $row['lastname'] ?></td>
                    <td><a href="edit.php?id=<?php echo $row["id"]; ?>"> Edit</a>----------<a href="delete.php?id=<?php echo $row["id"]; ?>"> Delete</a></td>
                    <?php } ?>
                </tr>
            
        </table>
    </center>
</body>
</html>