<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
    <h1>Edit posts</h1>
    <form method="POST" class="form-create">
        <label>
            Edit title:
            <input type="text" name="post-title" value='<?= $_POST["post-title"] ?? $post["title"] ?>'>
            <?php if(isset($errors["title"])){ ?>
            <p class="invalid-data"><?= $errors["title"] ?></p>
            <?php } ?>
        </label>
        <label>
        Edit content:
            <textarea name="post-content"  ><?= htmlspecialchars($post["content"] ?? "")?></textarea>
            <?php if(isset($errors["content"])){ ?>
            <p class="invalid-data"><?= $errors["content"] ?></p>
            <?php } ?>
        </label>

            <!-- <input type="text" name="post-category-id"> -->
        <label>
        Edit category ID:
            <select name='post-category-id' class="dropdown-input" required>
                <option value='1' <?= ($_POST["post-category-id"] ?? $post["category_id"]) == 1 ? "selected" : "" ?>>Sport</option>
                <option value='2' <?= ($_POST["post-category-id"] ?? $post["category_id"]) == 2 ? "selected" : "" ?>>Music</option>
                <option value='3' <?= ($_POST["post-category-id"] ?? $post["category_id"]) == 3 ? "selected" : "" ?>>Food</option>
            </select>
            <?php if(isset($errors["category-id"])){ ?>
            <p class="invalid-data"><?= $errors["category-id"] ?></p>
            <?php } ?>
        </label>
        <button>Save</button>
    </form>
    <h2>Post ID: <?= $_GET["id"] ?></h2>
    <a href="/">Back!</a>
<?php require "views/components/footer.php" ?>


