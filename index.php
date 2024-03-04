<?php

require "functions.php";
require "Database.php";
$config = require "config.php";

echo "<form>";
echo "<input name='id' />";
echo "<button>Submit</button>";
echo "</form>";

// $id = $_GET["id"];
// dd($id);


echo "<h1>Posts</h1>";

$query = "SELECT * FROM posts";

if(isset($_GET["id"]))
{
    // $meow = 0;
    $id = $_GET["id"];
    if($id == "all"){
        $query = "SELECT * FROM posts";
        // $meow = 1; 
    }else if($id == ""){
        $query = "SELECT * FROM posts"; 
        // $meow = 1;
    }else{
        $query = "SELECT * FROM posts WHERE id=$id";
    }

    // if($meow == 0){
    //     $query = "SELECT * FROM posts";
    // }
}

$db = new DataBase($config);
$posts = $db->execute($query)->fetchALL();

// $cats = $db->execute("SELECT * FROM cats")->fetchALL();

// $days = $db->execute("SELECT * FROM days")->fetchALL();

echo "<pre>" . "<ul>";
foreach ($posts as $data) {
    echo "<li>" . $data["title"] . "</li>";
}
echo "</pre>" . "</ul>";



