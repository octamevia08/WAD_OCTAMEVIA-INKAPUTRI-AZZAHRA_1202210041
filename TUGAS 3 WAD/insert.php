<?php

require 'dbconnect.php';

if(isset($_POST['submit'])) {
    $title = $_POST["title"];
    $artist = $_POST["artist"];
    $numsongs = $_POST["numsongs"];
    $releasedate = $_POST["releasedate"];
    $releaseyear = $_POST["releaseyear"];
    $label = $_POST["label"];
    $length = $_POST["length"];

    $sql = "INSERT INTO album VALUES ('', '$title', '$artist', '$numsongs', '$releasedate', '$releaseyear', '$label', '$length')";
    $result = mysqli_query($conn, $sql);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .mb-3 {
            margin: 30px;
        }
        .form-control {
            width: 600px;
        }
    </style>
    <title>Input Album</title>
</head>
<body>
    <div class="container">
        <h1>INPUT ALBUM</h1>
    </div>
    <div class="container">
        <form action="" method="post">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="artist" class="form-label">Artist</label>
                <input type="text" class="form-control" id="artist" name="artist">
            </div>
            <div class="mb-3">
                <label for="numsongs" class="form-label">Number of Songs</label>
                <input type="number" class="form-control" id="numsongs" name="numsongs">
            </div>
            <div class="mb-3">
                <label for="releasedate" class="form-label">Date Released</label>
                <input type="date" class="form-control" id="releasedate" name="releasedate">
            </div>
            <div class="mb-3">
                <label for="releaseyear" class="form-label">Year Released</label>
                <input type="number" class="form-control" id="releaseyear" name="releaseyear">
            </div>
            <div class="mb-3">
                <label for="label" class="form-label">Label</label>
                <input type="text" class="form-control" id="label" name="label">
            </div>
            <div class="mb-3">
                <label for="length" class="form-label">Length</label>
                <input type="text" class="form-control" id="length" name="length" placeholder="e.g., 2h 30m">
            </div>
            <div class="mb-3">
                <input type="submit" class="form-control" value="submit" id="submit" name="submit">
            </div>
        </form>
    </div>
    <div class="container">
        <?php if(isset($_POST['submit'])) : ?>
            <?php if( $result ) : ?>
                <div class="alert alert-success" role="alert">
                    Data berhasil ditambahkan!
                </div>
            <?php else : ?>
                <div class="alert alert-danger" role="alert">
                    Data gagal ditambahkan!
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
    <div class="container">
        <a href="index.php" class="btn btn-primary">Tampilkan Daftar Album</a>
    </div>
</body>
</html>