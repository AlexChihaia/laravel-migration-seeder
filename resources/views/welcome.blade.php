<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Migration Seeder Trains</title>

    @vite('resources/js/app.js')
</head>

<body>

    <div class="container">
        <div class="row py-5">
            @foreach ($trains as $train)
           <div class="col">
            <div class="card bg-success" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Azienda: {{$train->agency}}</h5>
                  <h6 class="card-subtitle mb-2 text-body-secondary">Partenza: {{$train->departure_station}} --- Arrivo:{{$train->arrival_station}}</h6>
                  <p class="card-text">Orario di partenza: {{$train->departure_time}}</p>
                  <p class="card-text">Orario di arrivo: {{$train->arrival_time}}</p>
                  
                </div>
              </div>
            </div> 
            @endforeach
        </div>
    </div>

</body>

</html>