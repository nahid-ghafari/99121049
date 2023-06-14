<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Tablet</title>

    <style>
    .card {
        border-radius: 10px;
        overflow: hidden;
        border: 1.5px solid black;
    }
    </style>
</head>
<body>
    <a href="/tablets/create2">add tablet</a>
    <h1>Our Tablets that available :</h1>
    <div>
        @foreach($tablets as $tablets)
        <div class="card">
            <div>
                <div>
                    <img src="{{asset('storage/images/'. $tablets->namePicture)}}" style="width: 25%; height: auto; object-fit: cover;">
                </div>
                    <div style="padding:10px">
                        <div>Type: {{$tablets->type}}</div>
                        <div>{{$tablets->size}}</div>
                        <div>{{$tablets->color}}</div>
                        <div>{{$tablets->price}}</div>
                        <div>{{$tablets->description}}</div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div><br><br>
    <h4>If you want to see the comparison of the above two data, click on compare</h4>
    <button>
        <a href="/tablets/compare">Compare</a>
    </button>



</body>
</html>