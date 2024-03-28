<?php
require "functions.php";
require "Database.php";
$config = require "config.php";


if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $post = $_POST["post-selected"];
    $query = "DELETE FROM posts WHERE id = :id";
    $params = [":id" => $post];
    $db = new DataBase($config);
    $posts = $db->execute($query, $params)->fetchALL();
}
$query = "SELECT * FROM posts"; 
$params = [];
$db = new DataBase($config);
$posts = $db->execute($query, $params)->fetchALL();

$page_title = "Delete";
require "views/posts/delete.view.php";
