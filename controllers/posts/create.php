<?php
require "functions.php";
require "Database.php";
$config = require "config.php";

// if($_SERVER["REQUEST_METHOD"] == "POST" && trim($_POST["post-title"]) != "" && $_POST["post-category-id"] <= 3 && strlen($_POST["post-title"]) <= 255)
if($_SERVER["REQUEST_METHOD"] == "POST")
{

    $errors = [];
    if(trim($_POST["post-title"]) == "" )
    {
        $errors["title"] = "Title cannot be empty";
    }
    if($_POST["post-category-id"] < 1 || $_POST["post-category-id"] > 3)
    {
        $errors["category-id"] = "There is no sucha id";  
    }
    if(strlen($_POST["post-title"]) > 255)
    {
        $errors["title"] = "This is tooooo long";  
    }

    if(empty($errors))
    {
        $postTitle = $_POST["post-title"];
        $postCategoryId = $_POST["post-category-id"];
        if(isset($_POST["post-content"])  && $_POST["post-content"] != "" ){
            $postContent = $_POST["post-content"];
            $query = "INSERT INTO 
            posts (title, category_id, content) 
            VALUE 
            (:title, :category_id, :content);";
            $params = [":title" => $postTitle, ":category_id" => $postCategoryId, ":content" => $postContent];
            $db = new DataBase($config);
            $posts = $db->execute($query, $params)->fetchALL();
            header("Location: /");
            die();   
        }else{

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
    }


}
// else if($_SERVER["REQUEST_METHOD"] == "POST")
// {
//     echo "Pidars or Cat. Id wrong or too long";
// }


$page_title = "Create";
require "views/posts/create.view.php";

