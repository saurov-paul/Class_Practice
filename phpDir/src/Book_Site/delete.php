<?php
include('dbcon.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "delete from `books` where `id` = '$id'";

    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("query Failed". mysqli_error($conn));
    } else {
        header('location:index.php?delete_msg= You have successfully deleted the book');
    }
}
?>


<?php include('footer.php') ?>