<?php

require "functions.php";
require "Database.php";
$config = require "config.php";

echo "Hello world";


$db = new DataBase($config);
$posts = $db->execute("SELECT * FROM posts")->fetchALL();

// $cats = $db->execute("SELECT * FROM cats")->fetchALL();

// $days = $db->execute("SELECT * FROM days")->fetchALL();

dd($posts);
