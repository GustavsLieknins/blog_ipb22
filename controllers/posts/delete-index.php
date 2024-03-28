<?php


require "Database.php";
$config = require "config.php";
$db = new DataBase($config);

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    // $post = $_POST["post-selected"];
    $query = "DELETE FROM posts WHERE id = :id";
    $params = [":id" => $_POST["id"]];
    $db->execute($query, $params);
    header("Location: /");
    die();
    // echo $_POST["id"];
};
