<?php require "components/head.php" ?>
<?php require "components/navbar.php" ?>
    <h1>Create posts</h1>
    <form method="POST">
        <label>
            Add title:
            <input type="text" name="matiss" >
        </label>
        <label>
            Category ID:
            <input type="text" name="category-id">
        </label>
        <button>Save</button>
    </form>
    <ul>
        <li>1 - sport</li>
        <li>2 - music</li>
        <li>3 - food</li>
    </ul>
<?php require "components/footer.php" ?>