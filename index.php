<?php


// echo "he";

$connection_string = "mysql:host=localhost;dbname=blog_lieknins;user=root;password=;charset=utf8mb4";
$pdo = new PDO($connection_string);


$query = $pdo->prepare("SELECT * FROM posts"); //sagatavo SQL izspildei
$query->execute();
$posts = $query->fetchALL(PDO::FETCH_ASSOC);

echo "<pre>";
echo $posts[0]["title"];
echo "<br>";
echo $posts[1]["title"];
echo "</pre>";