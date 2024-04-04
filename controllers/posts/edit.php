<?php
require "Database.php";
$config = require "config.php";




$page_title = "Edit blog ".$_GET["id"];
require "views/posts/edit.view.php";