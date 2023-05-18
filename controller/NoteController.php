<?php
//$id = $_GET['id'];
//dd($id);
require('Database.php');
$config=require('config.php');
$db = new Database($config);
$id = $_GET['id'];
$query="SELECT * FROM notes WHERE id=:id";
$note = $db ->query($query,['id'=>$id])
    ->fetch(PDO::FETCH_ASSOC);
//dd($note);
require 'views/note.view.php';

?>