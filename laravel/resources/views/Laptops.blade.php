<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Laptops</title>

    <style>
    .card {
        border-radius: 10px;
        overflow: hidden;
        border: 1.5px solid black;
    }
    </style>
</head>
<body>
    <a href="/Laptops/create1">add Laptops </a>
    <h1>Our Laptops that available :</h1>
    <div>
        @foreach($Laptops as $Laptops)
        <div class="card">
            <div>
                <div>
                    <img src="{{asset('storage/images/'. $Laptops->namePicture)}}" style="width: 25%; height: auto; object-fit: cover;">
                </div>
                    <div style="padding:10px">
                        <div>Type: {{$Laptops->type}}</div>
                        <div>{{$Laptops->size}}</div>
                        <div>{{$Laptops->color}}</div>
                        <div>{{$Laptops->price}}</div>
                        <div>{{$Laptops->description}}</div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div><br><br>
    <h4>If you want to see the comparison of the above two data, click on compare</h4>
    <button>
        <a href="/Laptops/compare">Compare</a>
    </button>



</body>
</html>