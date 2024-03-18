<?php

require "functions.php";
require "Database.php";
$config = require "config.php";

// $id = $_GET["id"];



if(isset($_GET["category"]))
{
    if($_GET["category"] == "show_all"){
        $categories = $_GET["category"];
        $params = [];
        $query = "SELECT *
        FROM posts 
        JOIN categories ON posts.category_id = categories.id";
    }else{
        $categories = $_GET["category"];
        $params = [];
        $query = "SELECT *
        FROM posts 
        JOIN categories ON posts.category_id = categories.id
        WHERE categories.name = :category_name;";
        $params = [":category_name" => $categories];
    }
};





// $query = "SELECT * FROM posts";

if(isset($_GET["id"]))
{
    // $meow = 0;
    $id = $_GET["id"];
    $params = [];
    if($id == "all")
    {
        $query = "SELECT * FROM posts";
        // $meow = 1; 
    }else if(is_numeric($id))
    {
        $id = $_GET["id"];
        $query = "SELECT * FROM posts WHERE id=:id";
        $params = [":id" => $id];
    }else if($id != "meow")
    {
        if($id == "")
        {
            $query = "SELECT * FROM posts"; 
        }else
        {
            echo "Not found " . $id;
            $query = "SELECT * FROM posts"; 
        }
        // $meow = 1;
    }else
    {
        $query = "SELECT * FROM posts"; 
    }

    // if($meow == 0){
    //     $query = "SELECT * FROM posts";
    // }
}//else
// {
//     $query = "SELECT * FROM posts"; 
// }

if(isset($query) || isset($params) ){
    $db = new DataBase($config);
    $posts = $db->execute($query, $params)->fetchALL();
}else{
    $query = "SELECT * FROM posts"; 
    $params = [];
    $db = new DataBase($config);
    $posts = $db->execute($query, $params)->fetchALL();
}


// $cats = $db->execute("SELECT * FROM cats")->fetchALL();

// $days = $db->execute("SELECT * FROM days")->fetchALL();



$page_title = "Main pager";
require "views/posts.view.php";
?>
