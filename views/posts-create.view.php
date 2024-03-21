<?php require "components/head.php" ?>
<?php require "components/navbar.php" ?>
    <h1>Create posts</h1>
    <form method="POST">
        <label>
            Add title:
            <input type="text" name="post-title" >
        </label>
            <!-- <input type="text" name="post-category-id"> -->
        <label>
        Category ID:
            <select name='post-category-id' class="dropdown-input">
                <option value='1'>Sport</option>
                <option value='2'>Music</option>
                <option value='3'>Food</option>
            </select>
        <label>
        <button>Save</button>
    </form>
<?php require "components/footer.php" ?>