<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Mobile</title>

    <style>
    .card {
        border-radius: 10px;
        overflow: hidden;
        border: 1.5px solid black;
    }
    </style>
</head>
<body>
    <a href="/DigitalProducts/create">add Mobile</a>
    <h1>Our Mobiles that available :</h1>
    <div>
        @foreach($DigitalProducts as $DigitalProducts)
        <div class="card">
            <div>
                <div>
                    <img src="{{asset('storage/images/'. $DigitalProducts->namePicture)}}" style="width: 25%; height: auto; object-fit: cover;">
                </div>
                    <div style="padding:10px">

                        <div>Type: {{$DigitalProducts->type}}</div>
                        <div>{{$DigitalProducts->size}}</div>
                        <div>{{$DigitalProducts->color}}</div>
                        <div>{{$DigitalProducts->price}}</div>
                        <div>{{$DigitalProducts->description}}</div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div><br><br>
    <h4>If you want to see the comparison of the above two data, click on compare</h4>
    <button>
        <a href="/DigitalProducts/compare">Compare</a>
    </button>



</body>
</html>