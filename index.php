<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- exercise if -->
<?php
    $message="first meeting with Nahid Ghafari";
    //$is_read=false;
    $is_read=true;
    if($is_read)
    {
        $message=" first meeting with Nahid Ghafari was done.";
    }
    else{
        $message=" I must set meeting with Nahid Ghafari.";
    }
    ?>
    <h1>this is the second session coding</h1>
    <h3>Hello<?= $message ?></h3>
</body>
</html>