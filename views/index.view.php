<?php require "components/head.php" ?>
<?php require "components/navbar.php" ?>
<form>
    <input name='id' value="<?= ($_GET["id"] ?? '') ?>" />
    <br>
    <button>Submit</button>
</form>
<form>
    Category: 
    <select name='category' >
    <option value='show_all' <?= (isset($_GET["category"]) && $_GET["category"] == 'show_all' ? "selected" : '') ?> >All categories</option>
    <option value='sport' <?= (isset($_GET["category"]) && $_GET["category"] == 'sport' ? "selected" : '') ?> >Sport</option>
    <option value='music' <?= (isset($_GET["category"]) && $_GET["category"] == 'music' ? "selected" : '') ?> >Music</option>
    <option value='food'  <?= (isset($_GET["category"]) && $_GET["category"] == 'food' ? "selected" : '') ?> >Food</option>
    </select>
    <br>
    <button>Submit</button>
</form>
<hr>
<h1>Posts</h1>
<ul>
<?php foreach ($posts as $data) { ?>
    <li> <?= $data["title"] ?> </li>
<?php } ?>
</ul>
<?php require "components/footer.php" ?>