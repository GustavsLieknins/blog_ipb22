<?php require "components/head.php" ?>
<?php require "components/navbar.php" ?>
<div class="div-for-input-divs">
    <div class="dropdown-input-div">
        <p>Select by category:</p>
        <form>
            <select name='category' class="dropdown-input" onchange="this.form.submit();">
                <option value='show_all' <?= (isset($_GET["category"]) && $_GET["category"] == 'show_all' ? "selected" : '') ?> >All categories</option>
                <option value='sport' <?= (isset($_GET["category"]) && $_GET["category"] == 'sport' ? "selected" : '') ?> >Sport</option>
                <option value='music' <?= (isset($_GET["category"]) && $_GET["category"] == 'music' ? "selected" : '') ?> >Music</option>
                <option value='food'  <?= (isset($_GET["category"]) && $_GET["category"] == 'food' ? "selected" : '') ?> >Food</option>
            </select>
        </form>
    </div>    
    <div class="numbered-input-div">
        <p>Select by index:</p>
        <form>
            <input class="numbered-input" name='id' value="<?= ($_GET["id"] ?? '') ?>" />
            <br>
            <button class="submit-numbered-index">Submit</button>
        </form>
    </div>
</div>
<div class="output-index">
    <h1>Posts</h1>
    <?php foreach ($posts as $data) { ?>
        <p> <?= htmlspecialchars($data["title"]) ?> </p>
    <?php } ?>
</div>
<?php require "components/footer.php" ?>