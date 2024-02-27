<?php

function dd($datas)
{
    echo "<pre>" . "<ul>";
    foreach ($datas as $data) {
        echo "<li>" . $data["title"] . "</li>";
    }
    echo "</pre>" . "</ul>";
    die();
};