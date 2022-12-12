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
        <h2>ARCHIVO REV</h2>
            <form action="{{ route('file.send')}}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label class="col-md-4 control-label">Archivo</label>
                        <div class="col-md-6">
                            <input type="file"  class="form-control-file" name="file"/>
                        </div>
                </div> 
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button class="btn btn-primary">
                            Procesar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>