<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>
    <body class="container">
        <h2>TEST COBRO DIGITAL</h2>
                  
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Lista</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('cob/create')}}">Procesar rend-cob</a>
                    </li>
                </ul>
    </body>
</html>