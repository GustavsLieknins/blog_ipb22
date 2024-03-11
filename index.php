<?php

require "functions.php";
require "Database.php";
$config = require "config.php";

echo "<form>";
echo "<input name='id' value='" . ($_GET["id"] ?? '') . "'/>";
echo "<br>";
echo "<button>Submit</button>";
echo "</form>";
echo "<form>";
echo "Category: ";
echo "<select name='category' />";
echo "<option value='sport'" . ($_GET["category"] == 'sport' ? "selected" : '') . "  >Sport</option>";
echo "<option value='music'" . ($_GET["category"] == 'music' ? "selected" : '') . " >Music</option>";
echo "<option value='food'" . ($_GET["category"] == 'food' ? "selected" : '') . "  >Food</option>";
echo "</select>";
echo "<br>";
echo "<button>Submit</button>";
echo "</form>";
// $id = $_GET["id"];
// dd($id);


echo "<h1>Posts</h1>";

if(isset($_GET["category"]))
{
    $categories = $_GET["category"];
    $params = [];
    $query = "SELECT *
    FROM posts 
    JOIN categories ON posts.category_id = categories.id
    WHERE categories.name = :category_name;";
    $params = [":category_name" => $categories];
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

$db = new DataBase($config);
$posts = $db->execute($query, $params)->fetchALL();

// $cats = $db->execute("SELECT * FROM cats")->fetchALL();

// $days = $db->execute("SELECT * FROM days")->fetchALL();

echo "<pre>" . "<ul>";
foreach ($posts as $data) {
    echo "<li>" . $data["title"] . "</li>";
}
echo "</pre>" . "</ul>";



