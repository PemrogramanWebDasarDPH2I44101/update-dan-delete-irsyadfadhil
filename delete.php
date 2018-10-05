<?php
    require_once("db.php");

    $id = $_GET['id'];

    $query = "DELETE FROM siswa WHERE id=$id";

    if (mysqli_query($conn, $query)) {
        header("location: list.php");
    }else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>