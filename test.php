<?php
    //include 'student.php';
    include 'functions.php';

    require('Database.php');
    $db = new Database();
    $students = $db ->query("SELECT * FROM students WHERE Name='Ahmad Gholami'")
    ->fetch(PDO::FETCH_ASSOC);
    dd($students);
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