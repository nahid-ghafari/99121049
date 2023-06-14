<!DOCTYPE html>
<html>
<head>
    <title>Price Comparison</title>
    <style>
    .card {
        border-radius: 10px;
        overflow: hidden;
        border: 1px solid black;
    }
    </style>
</head>
<body>
    <h1>Price Comparison</h1>
    <!-- <div>
        {{ $mostExpensive->namePicture }} is the most expensive item with a price of {{ $mostExpensive->price }}
    </div> -->

    <!-- baraye ike aks gerantarin dade neshon bede -->
    <div class="card">
    <div>
        <img src="{{ asset('storage/images/'.$mostExpensive->namePicture) }}" style="width: 25%; height: auto; object-fit: cover;">
    </div>
    <div style="padding:10px">
        <div>Type: {{ $mostExpensive->type }}</div>
        <div>Color: {{ $mostExpensive->color }}</div>
        <div>Price: {{ $mostExpensive->price }}</div>
        <div>Description: {{ $mostExpensive->description }}</div>
    </div>


</body>
</html>