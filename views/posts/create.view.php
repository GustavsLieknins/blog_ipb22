<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
    <h1>Create posts</h1>
    <form method="POST">
        <label>
            Add title:
            <input type="text" name="post-title" value='<?= $_POST["post-title"] ?? "" ?>' required>
            <?php if(isset($errors["title"])){ ?>
            <p class="invalid-data"><?= $errors["title"] ?></p>
            <?php } ?>
        </label>

            <!-- <input type="text" name="post-category-id"> -->
        <label>
        Category ID:
            <select name='post-category-id' class="dropdown-input" required>
                <option value='1'>Sport</option>
                <option value='2'>Music</option>
                <option value='3'>Food</option>
            </select>
            <?php if(isset($errors["category-id"])){ ?>
            <p class="invalid-data"><?= $errors["category-id"] ?></p>
            <?php } ?>
        </label>
        <button>Save</button>
    </form>
<?php require "views/components/footer.php" ?>