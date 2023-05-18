<?php

require('Database.php');
$config=require('config.php');
$db = new Database($config);
//$id = $_GET['id'];
$query="SELECT * FROM notes WHERE user_id=1";
$notes = $db ->query($query)
        ->fetchAll();
require 'views/notes.view.php';