<?php



if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $query = "INSERT INTO 
    posts (title, category_id) 
    VALUE 
    (:title, :category_id);";

    
}


$page_title = "Create";
require "views/posts-create.view.php";

