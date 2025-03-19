<?php
include('config.php');

$query = "SELECT * FROM comments";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İnternet Kafe</title>
</head>
<body>

    <h1>İnternet Kafemize Hoşgeldiniz!</h1>

    <section class="comments">
        <h2>Yorumlar</h2>
        <div id="comments-section">
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="comment">
                    <p><?php echo $row['comment_text']; ?></p>
                </div>
            <?php } ?>
        </div>
    </section>

    <form action="comments.php" method="POST">
        <textarea name="comment" placeholder="Yorumunuzu yazın..." required></textarea>
        <button type="submit">Yorum Yap</button>
    </form>

</body>
</html>
