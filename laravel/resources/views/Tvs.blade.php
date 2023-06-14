<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Television</title>

    <style>
    .card {
        border-radius: 10px;
        overflow: hidden;
        border: 1.5px solid black;
    }
    </style>
</head>
<body>
    <a href="/Tvs/create4">add Tvs</a>
    <h1>Our Televisions that available :</h1>
    <div>
        @foreach($Tvs as $Tvs)
        <div class="card">
            <div>
                <div>
                    <img src="{{asset('storage/images/'. $Tvs->namePicture)}}" style="width: 25%; height: auto; object-fit: cover;">
                </div>
                    <div style="padding:10px">
                        <div>Type: {{$Tvs->type}}</div>
                        <div>{{$Tvs->size}}</div>
                        <div>{{$Tvs->color}}</div>
                        <div>{{$Tvs->price}}</div>
                        <div>{{$Tvs->description}}</div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div><br><br>
    <h4>If you want to see the comparison of the above two data, click on compare</h4>
    <button>
        <a href="/Tvs/compare">Compare</a>
    </button>



</body>
</html>