<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Lesson 1</title>
</head>
<body>
    <?php
    $books = [
        [
            'title' => 'The first book',
            'Author' => 'Author1',
            'publish_date' => '1395',
            'price' => '100000'
        ],
        [
            'title' => 'The new first book',
            'Author' => 'Author1',
            'publish_date' => '1395',
            'price' => '100000'
        ],
        [
            'title' => 'The second book',
            'Author' => 'The second Author',
            'publish_date' => '1399',
            'price' => '200000'
        ],
        [
            'title' => 'The third book',
            'Author' => 'The third Author',
            'publish_date' => '1395',
            'price' => '150000'
        ]
    ];
    function filterByAuthor($books,$author)
    {
        $filteredbook = [];
        foreach($books as $book)
        {
            if($book['Author']==$author)
            {
                $filteredbook[] = $book;
            }
        }
        return $filteredbook;
    }
    ?>
    <h3>Books list</h3>
    <table class="table table-bordered table-dark">
        <thead>
            <th>Title</th>
            <th>Author</th>
            <th>Publish Date</th>
            <th>Price</th>
        </thead>
        <tbody>
        <?php foreach(filterByAuthor($books,'The third Author') as $book): ?>
            <tr>
                <?php foreach($book as $key=>$value): ?>
                    <td><?= $value ?></td>
                <?php endforeach ?>    
            </tr>    

        <?php endforeach ?>
        </tbody>
    </table>
</body>