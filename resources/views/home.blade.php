<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>BoolTrain filtrati</h2>
            </div>

            @foreach ($filtered_trains as $train)
                <div class="col-3 my-5">
                    <h5> Company: {{ $train->company }}</h5>
                    <p>
                        Departure station: {{ $train->departure_station }}
                        Arrival station: {{ $train->arrival_station }}
                    </p>
                    <p>
                        Departure date: {{ $train->departure_date }} at {{ $train->departure_time }} <br>
                        Arrival date: {{ $train->arrival_date }} at {{ $train->arrival_time }}
                    </p>
                    <p>Train identification code: {{ $train->train_code }}</p>
                    <p>Train carriages number: {{ $train->carriages_number }}</p>
                    <p>In time: {{ $train->in_time === 1 ? 'In time' : 'Delayed' }}</p>
                    <p>state: {{ $train->deleted === 1 ? 'Trip cancelled ' : 'Normal' }}</p>

                </div>
            @endforeach

            <div class="col-12 py-5">
                <h2>BoolTrain non filtrati</h2>
            </div>

            @foreach ($trains as $train)
                <div class="col-3 my-5">
                    <h5> Company: {{ $train->company }}</h5>
                    <p>
                        Departure station: {{ $train->departure_station }}
                        Arrival station: {{ $train->arrival_station }}
                    </p>
                    <p>
                        Departure date: {{ $train->departure_date }} at {{ $train->departure_time }} <br>
                        Arrival date: {{ $train->arrival_date }} at {{ $train->arrival_time }}
                    </p>
                    <p>Train identification code: {{ $train->train_code }}</p>
                    <p>Train carriages number: {{ $train->carriages_number }}</p>
                    <p>In time: {{ $train->in_time === 1 ? 'In time' : 'Delayed' }}</p>
                    <p>state: {{ $train->deleted === 1 ? 'Trip cancelled ' : 'Normal' }}</p>

                </div>
            @endforeach
        </div>
    </div>

</body>

</html>
