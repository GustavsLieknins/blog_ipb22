<?php

// require "functions.php";

// dd($_SERVER["REQUEST_URI"]);
$url_array = parse_url($_SERVER["REQUEST_URI"]);
$url = $url_array["path"];

// dd(parse_url($_SERVER["REQUEST_URI"]));

if($url == "/about")
{
    require "controllers/about.php";
}
if($url == "/index")
{
    require "controllers/index.php";   
}
if($url == "/story")
{
    require "controllers/story.php";   
}

// echo "Page not found :(";

?>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pornhub</title>
</head>
<body>
    <form >
        <label>
        Gimme ur google password
            <input type="password" name="password">
        </label>
        <button>Submit</button>
    </form> -->
    <!-- <?= $_GET["password"] ?? ''  ?> -->
<!-- </body>
</html> -->