<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $comment = mysqli_real_escape_string($conn, $_POST['comment']);
    $query = "INSERT INTO comments (comment_text) VALUES ('$comment')";
    mysqli_query($conn, $query);
    header("Location: index.php");
}
?>
