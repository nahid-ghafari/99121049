<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- links -->
        
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .container {
            width: 100%;
            padding: 10px;
            }
            /* text-align:center;baray inke linkemon vasat gharar begire */
            .toppane  {
            width: 100%;
            height: 60vh;
            }
            #Mobile {text-align:center;
            background-position: center center;
            background-image: url('{{URL('/picture/Mobiles.jpg')}}');
            background-size: cover;
            background-position: center;
            }
            #Laptop {text-align:center;
            background-position: center center;
            background-image: url('{{URL('/picture/laptop 1.jpg')}}');
            background-size: cover;
            background-position: center;
            }
            #Tablet {text-align:center;
            background-position: center center;
            background-image: url('{{URL('/picture/tablet.jpg')}}');
            background-size: cover;
            background-position: center;
            }
            #Camera {text-align:center;
            background-position: center center;
            background-image: url('{{URL('/picture/cameras 1.jpg')}}');
            background-size: cover;
            background-position: center;
            }
            #Television {text-align:center;
            background-position: center center;
            background-image: url('{{URL('/picture/television.jpg')}}');
            background-size: cover;
            background-position: center;
            height: 65vh;
            }



            body {
            margin: 0!important;
            }

        </style>
    </head>
    <body class="antialiased">
        <h1 style="text-align:center;">Welcome To Our Digital Products Shop</h1>
        <div class="container">
            <div class="toppane" id="Mobile">
                Click
                <a style="color:red" href="http://127.0.0.1:8000/DigitalProducts">here</a>
                to see our Mobile
            </div>
            <div class="toppane"id="Laptop">
                Click
                <a style="color:red" href="http://127.0.0.1:8000/Laptops">here</a>
                to see our Laptop
           </div>
            <div class="toppane" id="Tablet">
                Click
                <a style="color:red" href="http://127.0.0.1:8000/tablets">here</a>
                to see our Tablets
           </div>
           <div class="toppane" id="Television">
                Click
                <a style="color:red" href="http://127.0.0.1:8000/Tvs">here</a>
                to see our Televisions
           </div>
            <<div class="toppane" id="Camera">
                Click
                <a style="color:red" href="http://127.0.0.1:8000/cameras">here</a>
                to see our Camera
           </div>
        </div>
        

    </body>
</html>
