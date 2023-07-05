<?php
    $conn = mysqli_connect("localhost", "root", "", "formhandling1");
    if (!$conn) {
        echo "connection refuse";
    } else{
        echo "connection established";

    $id = $_POST['id'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];

    $query = "UPDATE `user_details` SET `id`='$id',`firstname`='$fname',`lastname`='$lname' WHERE `id`=$id";
    $q = mysqli_query($conn, $query);
    if (!$q) {
        echo "bye";
    } else {
        echo "hi";
    }
}
?>
<script>
    window.location.assign("showdata.php");
</script>