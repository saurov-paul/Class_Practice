<?php
include('dbcon.php');

if (isset($_POST['add_book'])) {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $year = $_POST['year'];
    $genre = $_POST['genre'];
    $description = $_POST['description'];

    if (empty($title) || empty($author) || empty($year) || empty($genre) || empty($description)) {
        header('location:index.php?message=You need to fill Up all field');
    } else {
        $query = "INSERT INTO `books`(`title`, `author`, `publishing_year`, `genre`, `description`) values ('$title','$author', '$year','$genre','$description' )";

        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Query Faild");
        } else {
            header('location:index.php?insert_message=Your Book has been added successfully');
        }
    }
};
