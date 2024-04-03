<?php
require "Database.php";
$config = require "config.php";






$query = "SELECT * FROM posts WHERE id = :id"; 
$params = [":id" => $_GET["id"]];
$db = new Database($config);
$post = $db->execute($query, $params)->fetch();

$page_title = "Showing blog ".$_GET["id"];
require "views/posts/show.view.php";