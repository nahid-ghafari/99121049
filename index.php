<?php
//connect to postgres and creat db'web'and table 'students'
    // function connectToDB() {

    //     $host= 'localhost';
    //     $db = 'web';
    //     $user = 'postgres';
    //     $password = 'password'; // enter  your password
    
    //     try {
    //         $dsn = "pgsql:host=" . $host . ";port=5432;dbname=" . $db . ";";
    //         $pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
            
    //         if ($pdo) {
    //             echo "Connected to the $db database successfully!";
    //         }
    
    //         return $pdo;
    //     } catch (PDOException $e) {

    //         die($e->getMessage());

    //     } finally {

    //         if ($pdo) {
    //             $pdo = null;
    //         }
    //     }
    // }
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "web";
    
    //  //Create connection
    //  $conn = new mysqli($servername, $username, $password,$dbname);
    
    // // Check connection
    //  if ($conn->connect_error) {
    //    die("Connection failed: " . $conn->connect_error);
    //  }
    //  exit("Connected successfully");
    
    // $students = [
    //     [
    //         'Name' => 'Yasi Ghafari',
    //         'Age' => 21,
    //         'Id' => 1234,
    //         'Major' => 'engineering'
    //     ],
    //     [
    //         'Name' => 'Ahmad Gholami',
    //         'Age' => 20,
    //         'Id' => 4321,
    //         'Major' => 'art'
    //     ],
    //     [
    //         'Name' => 'Mobina Abbasi',
    //         'Age' => 23,
    //         'Id' => 4567,
    //         'Major' => 'engineering'
    //     ],
    //     [
    //         'Name' => 'Reza Sohrabi',
    //         'Age' => 22,
    //         'Id' => 7890,
    //         'Major' => 'medical'
    //     ]
    // ];
    // function filter($students,$fn)
    // {
    //     $filteredstudent = [];
    //     foreach($students as $student)
    //     {
    //         if($fn($student))
    //         {
    //             $filteredstudent[] = $student;
    //         }
    //     }
    //     return $filteredstudent;
    // }
    // $filteredstudent = filter($students,function($student){
    //     if($student['Age'] <=23)
    //     {
    //         return true;
    //     }
    //     return false;

    // });
    // require("index.show.php");

    require('functions.php');
    require('route.php');

?>