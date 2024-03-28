<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
    <h1>Delete posts</h1>
    <form method="POST">
        <?php foreach ($posts as $post) { ?>
            <button class="delete-button" name="post-selected" value='<?= $post["id"] ?>'><?= $post["title"] ?></button>
        <?php } ?>
    </form>
<?php require "views/components/footer.php" ?>