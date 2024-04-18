<?php

session_start();

require "functions.php";
require "router.php";
// dd($_SERVER["REQUEST_URI"]);

// echo "NO!";
// $data = [
//     "name" => "Railijs",
//     "age" => 6.9,
//     "height" => "5'6"
// ];
// $data2 = [
//     "name" => "Aldis",
//     // "age" => 13,
//     "height" => "6'9"
// ];

// // echo "<br>" . $data["height"];
// // echo "<br>" . $data2["height"];
// echo "<br>" . $data["age"];

// // echo "<br>" . $data2["age"];

// if(array_key_exists("age", $data2))
// {
//     echo $data2["age"];
// }

// echo isset($data2["age"]) ?? "Not exists";

// dd(parse_url($_SERVER["REQUEST_URI"]));





// if($url == "/about")
// {
//     require "controllers/about.php";
// }else if($url == "/")
// {
//     require "controllers/index.php";   
// }else if($url == "/story")
// {
//     require "controllers/story.php";   
// }else
// {
//     http_response_code(404);
//     require "controllers/404.php";  
// }

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