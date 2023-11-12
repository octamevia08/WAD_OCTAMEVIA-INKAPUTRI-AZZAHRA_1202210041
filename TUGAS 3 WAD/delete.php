<?php

require 'dbconnect.php';

$id = $_GET["id"];
$delete = mysqli_query($conn, "DELETE FROM album WHERE album_id=$id");

if($delete) {
    header("Location: index.php");
}