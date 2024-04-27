<?php include('dbcon.php'); ?>

<?php
include('header.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $conn->prepare("SELECT * FROM `books` WHERE `id` = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        die("query Failed 1: Invalid book ID");
    }
} 

if (isset($_POST['update_book'])) {
    if (isset($_GET['id_new'])) {
        $idnew = $_GET['id_new'];
    } else {
        die("query Failed 2: Missing new book ID");
    }

    $title = $_POST['title'];
    $author = $_POST['author'];
    $year = $_POST['year'];
    $genre = $_POST['genre'];
    $description = $_POST['description'];

    $stmt = $conn->prepare("UPDATE `books` SET `title` = ?, `author` = ?, `publishing_year` = ?, `genre` = ?, `description` = ? WHERE `id` = ?");
    $stmt->bind_param("sssisi", $title, $author, $year, $genre, $description, $idnew);

    if ($stmt->execute()) {
        header('location:index.php?update_msg= You have successfully updated the information');
    } else {
        die("query Failed 2: " . $conn->error);
    }
}
?>

<form action="update.php?id_new=<?php echo $id; ?>" method="post">

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" value="<?php echo htmlspecialchars($row['title']) ?>">
    </div>

    <div class="form-group">
        <label for="author">Author</label>
        <input type="text" name="author" class="form-control" value="<?php echo htmlspecialchars($row['author']) ?>">
    </div>

    <div class="form-group">
        <label for="year">Year</label>
        <input type="number" name="year" class="form-control" value="<?php echo htmlspecialchars($row['publishing_year']) ?>">
    </div>

    <div class="form-group">
        <label for="genre">Genre</label>
        <input type="text" name="genre" class="form-control" value="<?php echo htmlspecialchars($row['genre']) ?>">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" name="description" class="form-control" value="<?php echo htmlspecialchars($row['description']) ?>">
    </div>

    <input type="submit" class="btn btn-success" name="update_book" value="Update">

</form>

<?php include('footer.php') ?>