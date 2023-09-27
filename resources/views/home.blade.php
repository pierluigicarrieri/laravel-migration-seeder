@extends('layouts.public')

@section('content')

<main>

    <div class="container">

        <h1 class="py-5 text-center text-primary">Treni che partono oggi dopo le ore 12:00:00</h1>

            <ul class="text-center">
                @foreach($trains as $train)

                <li>{{$train->azienda}} - {{$train->stazione_di_partenza}} - {{$train->orario_di_partenza}}</li>

                @endforeach
            </ul>

    </div>

</main>

@endsection
