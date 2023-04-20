<?php
    //include 'student.php';
    include 'functions.php';

    require('Database.php');
    $config=require('config.php');
    $db = new Database($config,'root','');
    $id = $_GET['id'];
    $query="SELECT * FROM users WHERE id=:id";
    $user = $db ->query($query,['id'=>$id])
    ->fetch(PDO::FETCH_ASSOC);
    dd($user);
    //dd($students['Name']);
    //$students = $db ->query("SELECT * FROM students WHERE Name LIKE '%Yasi%'")->fetchAll();

    // $student = new student();
    // $student -> Name = 'Yasi Ghafari';
    // $student -> Age = 21;
    // $student -> Major = 'engineering';
    // dd($student);
    // echo('<pre>');
    // var_dump($student);
    //$student->about();

    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "web";
    // $dsn = 'mysql:host=localhost;port=3306;dbname=web;charset=utf8mb4';
    // $pdo = new PDO($dsn,'root');
    // $statement = $pdo -> prepare('SELECT * FROM students');
    // $statement -> execute();
    // $students = $statement -> fetchAll();
?>