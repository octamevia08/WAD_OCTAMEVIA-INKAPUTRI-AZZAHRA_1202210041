<?php

require 'dbconnect.php';

$album = mysqli_query($conn, "SELECT * FROM album");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Daftar Album</title>
</head>
<body>
    <div class="container">
        <h1>Daftar Album</h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Artist</th>
                    <th scope="col">Number of Songs</th>
                    <th scope="col">Date Released</th>
                    <th scope="col">Year Released</th>
                    <th scope="col">Label</th>
                    <th scope="col">Length</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                <?php 
                $i = 1;
                while($row = mysqli_fetch_assoc($album)) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $row["title"]; ?></td>
                    <td><?= $row["artist"]; ?></td>
                    <td><?= $row["num_songs"]; ?></td>
                    <td><?= $row["release_date"]; ?></td>
                    <td><?= $row["release_year"]; ?></td>
                    <td><?= $row["label"]; ?></td>
                    <td><?= $row["length"]; ?></td>
                    <td>
                        <a href="edit.php?id=<?= $row['album_id'] ?>" class="btn btn-warning">Edit</a>
                        <a href="delete.php?id=<?= $row['album_id'] ?>" class="btn btn-danger" onclick="alert('Are you sure want this delete this album?')">Delete</a>
                    </td>
                </tr>
                <?php $i++ ?>
                <?php endwhile; ?>
            </tbody>
        </table>
        <a href="insert.php" class="btn btn-primary">Insert Album</a>
    </div>
</body>
</html>