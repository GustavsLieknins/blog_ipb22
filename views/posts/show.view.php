<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
    <h1><?= htmlspecialchars($post["title"]) ?></h1>
    <p><?= htmlspecialchars($post["content"] ?? "")  ?></p>
    <a href=<?= "/edit?id=".$post["id"] ?>>Edit!</a>
    <a href="/">Back!</a>
<?php require "views/components/footer.php" ?>