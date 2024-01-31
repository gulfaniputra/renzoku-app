<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <title>Renzoku App</title>
    </head>

    <body>
        <div class="container">
            <div class="row">

                @foreach ($popularSerials as $serial)
                <div class="col-md-4 mt-3 col-lg-3">
                    <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$serial['poster_path'] }}" alt="poster"
                        class="img-fluid">
                </div>
                @endforeach

            </div>
        </div>
    </body>

</html>
