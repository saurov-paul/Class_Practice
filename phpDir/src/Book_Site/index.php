<?php include('dbcon.php'); ?>
<?php include('header.php'); ?>


<div class="box1">
    <h2>All Books</h2>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Book</button>

</div>
<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Year</th>
            <th>Genre</th>
            <th>Description</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
    </thead>

    <tbody>

        <?php
        $query = "select * from `books`";

        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("query Failed" . mysqli_error($conn));
        } else {

            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <tr>
                    <th><?php echo $row['id'] ?></th>
                    <th><?php echo $row['title'] ?></th>
                    <th><?php echo $row['author'] ?></th>
                    <th><?php echo $row['publishing_year'] ?></th>
                    <th><?php echo $row['genre'] ?></th>
                    <th><?php echo $row['description'] ?></th>
                    <td><a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-success">Update</a></td>
                    <td><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-danger">Delete</a></td>
                </tr>
        <?php
            }
        }


        ?>

    </tbody>
</table>

<?php

if (isset($_GET['message'])) {
    echo "<h6>" . $_GET['message'] . "</h6>";
}

?>

<?php

if (isset($_GET['insert_message'])) {
    echo "<h5>" . $_GET['insert_message'] . "</h5>";
}

?>

<?php

if (isset($_GET['update_msg'])) {
    echo "<h5>" . $_GET['update_msg'] . "</h5>";
}

?>

<?php

if (isset($_GET['delete_msg'])) {
    echo "<h5>" . $_GET['delete_msg'] . "</h5>";
}

?>



<form action="insert_data.php" method="post">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Book</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="author">Author</label>
                        <input type="text" name="author" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="year">Year</label>
                        <input type="number" name="year" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="genre">Genre</label>
                        <input type="text" name="genre" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" name="description" class="form-control">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-outline-success" name="add_book" value="ADD">
                </div>
            </div>
        </div>
    </div>
</form>
<?php include('footer.php') ?>