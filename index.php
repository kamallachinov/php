<?php
require("functions.php");
require("Database.php");

$config = require ("config.php");



$db = new Database($config['Database']);

$posts =$db->query("SELECT * FROM posts")->fetchAll();

dd($posts);


require("router.php");

