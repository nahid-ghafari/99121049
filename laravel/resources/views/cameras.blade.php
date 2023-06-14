<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Camera</title>

    <style>
    .card {
        border-radius: 10px;
        overflow: hidden;
        border: 1.5px solid black;
    }
    </style>
</head>
<body>
    <a href="/cameras/create3">add Camera</a>
    <h1>Our Cameras that available :</h1>
    <div>
        @foreach($cameras as $cameras)
        <div class="card">
            <div>
                <div>
                    <img src="{{asset('storage/images/'. $cameras->namePicture)}}" style="width: 25%; height: auto; object-fit: cover;">
                </div>
                    <div style="padding:10px">
                        <div>Type: {{$cameras->type}}</div>
                        <div>{{$cameras->size}}</div>
                        <div>{{$cameras->color}}</div>
                        <div>{{$cameras->price}}</div>
                        <div>{{$cameras->description}}</div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div><br><br>
    <h4>If you want to see the comparison of the above two data, click on compare</h4>
    <button>
        <a href="/cameras/compare">Compare</a>
    </button>



</body>
</html>