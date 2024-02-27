<?php

require "functions.php";
require "Database.php";

// echo "he";

$db = new DataBase();
$posts = $db->execute("SELECT * FROM posts")->fetchALL();

// $cats = $db->execute("SELECT * FROM cats")->fetchALL();

// $days = $db->execute("SELECT * FROM days")->fetchALL();

dd($posts);
