<?php
    $conn = mysqli_connect("localhost", "root", "", "formhandling1");
    if (!$conn) {
        echo "connection refuse";
    } else{
        echo "connection established";
    }

    $id = $_GET["id"];

    $query = "DELETE FROM `user_details` WHERE `id` = $id";

    mysqli_query($conn, $query);

    ?>

<script>
    window.location.assign("showdata.php");
</script>