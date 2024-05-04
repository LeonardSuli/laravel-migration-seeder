@extends('layouts.app')

@section('content')

<section class="houses py-5">
    <div class="container">

        <div class="row row-cols-1 g-4">
    
            @forelse ($trains as $train)
                
            <div class="col">
    
                <div class="card position-relative h-100">

                    <div class="card-header text-center bg-danger strong text-white">

                        <strong>{{$train->company}}</strong>

                    </div>

                    <div class="card-body d-flex space-between justify-content-between text-center align-items-center">
                        
                        <div class="departure">

                            <p>Partenze</p>

                            <div class="time text-primary fs-2">
                                {{$train->departure_time}}
                            </div>

                            <div class="station">
                                <strong>{{$train->departure_station}}</strong>
                            </div>

                        </div>

                        <div class="date">

                            {{$train->departure_date}}

                        </div>

                        <div class="arrival">

                            <p>Arrivi</p>

                            <div class="time text-primary fs-2">
                                {{$train->arrival_time}}
                            </div>

                            <div class="station">
                                <strong>{{$train->arrival_station}}</strong>
                            </div>

                        </div>

                        <div class="price">

                            <p>Prezzo</p>

                            <div class="text-danger fs-1">
                                € {{$train->price_ticket}}
                            </div>
                            
                        </div>


                    </div>
    
                </div>
    
            </div>
    
            @empty
    
            <div class="col-12">
    
                <p>Nessun risultato</p>
    
            </div>
    
    
            @endforelse
        </div>
    </div>
</section>
    
@endsection