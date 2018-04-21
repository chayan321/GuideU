<?php
    $conn = mysqli_connect("localhost", "root", "pallab123");
    if(!$conn) {
        die("Connection Failed !!!");
    }

    $db = mysqli_query($conn, "USE chayan");
    if(!$db) {
        die("Database NOT found !!!");
    }
?>
