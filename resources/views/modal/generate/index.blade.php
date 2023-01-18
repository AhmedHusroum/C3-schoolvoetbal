<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Wedstrijden') }}
        </h2>
    </x-slot>

    
   
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="wrapper">
                @foreach($plan_matches as $match)
                
                    <ul>        
                        <li>
                            <div class="vs1">
                                <h3 class="date_match"> <img src="/img/date.png" style="width: 19%;"> {{$match->match_date}}<br></h3>
                                <h3 class="field_match"> <img src="/img/field.png" style="width: 49%;"> {{$match->field}}</h3>
                            </div>
                            <a href="{{route('matches.matchShow', $match->id)}}">
                                    <span class="vs">{{$match->team->team_name}} <img src="/img/vs1.png" style="width: 17%;"> {{$match->team->team_name}}</span>                               
                            </a>  
                    </ul>
                @endforeach
            </div>
        </div>     
    </div>
</x-app-layout>

