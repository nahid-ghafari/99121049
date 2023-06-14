<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        
<form action="addDigitalProducts" method="post" enctype="multipart/form-data">
            @csrf
            <label for="picture">Choose Your picture:</label></br></br>
            <input type="file" name="picture" id="picture"></br></br>
            <input type="text" name="type" placeholder="type"></br></br>
            <input type="text" name="size" placeholder="size"></br></br>
            <input type="text" name="color" placeholder="color"></br></br>
            <input type="text" name="price" placeholder="price"></br></br>
            <textarea name="description" cols="30" rows="10">description</textarea></br></br>
            <input type="submit" name="submit" value="save">
        </form>
    </div>
</body>
</html>