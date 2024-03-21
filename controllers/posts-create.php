<?php
require "functions.php";
require "Database.php";
$config = require "config.php";


if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $postTitle = $_POST["post-title"];
    $postCategoryId = $_POST["post-category-id"];
    $query = "INSERT INTO 
    posts (title, category_id) 
    VALUE 
    (:title, :category_id);";
    $params = [":title" => $postTitle, ":category_id" => $postCategoryId];
    $db = new DataBase($config);
    $posts = $db->execute($query, $params)->fetchALL();
    header("Location: /");
    die();
}


$page_title = "Create";
require "views/posts-create.view.php";

