<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- exercise array -->
    <?php
    $books = [
       [
            "title" => " The first book",
            "Author" =>" The first author",
            "Publish-date" =>" 1395",
            "price" =>" 100000",


       ],
       [
            "title" => " The second book",
            "Author" =>" The second author",
            "Publish-date" =>" 1399",
            "price" =>" 200000",


       ],
       [
            "title" => " The third book",
            "Author" =>" The third author",
            "Publish-date" =>" 1396",
            "price" =>" 300000",

       ],

    ];
    var_dump($books);
    //die(); it means the end .stop
    ?>
    <h1> This is the third session coding</h1>
    <h3>book list :</h3>
    <table>
        <?php foreach($books as $key => $value){ ?>
            <tr>
                <td>
                    <?= $key ?>
                    <?php var_dump($value) ?>

                </td>
            </tr>
            
        <?php }?>
        
        
    </table>
</body>
</html>