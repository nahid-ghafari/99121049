<?php
//$id = $_GET['id'];
//dd($id); 
require('Database.php');
$config = require('Config.php');
$db = new Database($config);
$id = $_GET['id'];
$currentUserid = 3;
$query = "SELECT * FROM notes WHERE id= :id";
// $note = $db->query($query,['id'=>$id])
//             ->fetch(PDO::FETCH_ASSOC);

// if(! $note)
// {
//     abort();
// }
// if($currentUserid != $note['user_id'])
// {
//     abort(403);
// }
// dd($note);        
$note = $db->query($query,['id'=>$id])
->findOrFail(PDO::FETCH_ASSOC);
authorize($currentUserid == $note['user_id']);  
require 'views/note.view.php';
?>