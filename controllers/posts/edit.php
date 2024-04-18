<?php

auth();

require "Database.php";
require "Validator.php";
$config = require "config.php";


$query = "SELECT * FROM posts WHERE id = :id"; 
$params = [":id" => $_GET["id"]];
$db = new Database($config);
$post = $db->execute($query, $params)->fetch();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $postTitle = $_POST["post-title"];
    $postContent = $_POST["post-content"];
    $CatId = $_POST["post-category-id"];
    $errors = [];
    if(!Validator::string($_POST["post-title"], min_len: 1, max_len: 255))
    {
        $errors["title"] = "Title cannot be empty or too long";
    }
    if(!Validator::string($_POST["post-content"], min_len: 1, max_len: 255))
    {
        $errors["content"] = "Content cannot be empty or too long";
    }
    if(!Validator::number($_POST["post-category-id"], min: 1, max: 3))
    {
        $errors["category-id"] = "There is no sucha id or not number at all";  
    } 
    if(empty($errors))
    {
        $query = "UPDATE posts SET title = :title, content = :content, category_id = :category_id WHERE id = :id";
        $params = [":title" => $_POST["post-title"], ":content" => $_POST["post-content"], ":category_id" => $_POST["post-category-id"], ":id" => $_GET["id"]];
        // $db = new Database($config);
        $post = $db->execute($query, $params)->fetch();
        header("Location: /");
    }
}



$page_title = "Edit blog ".$_GET["id"];
require "views/posts/edit.view.php";