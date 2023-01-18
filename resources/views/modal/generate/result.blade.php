<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gespeelde wedstrijden') }}
        </h2>
    </x-slot>
     
    <div class="result_side"> 
            <div class="img_result">
                <div class="img_overlay">
                    <h1 class="text-lg h2_result py-4">Stand</h1>
                    <div class="table_scrol">
                        <table id="table_result">
                            <tr id="header">
                                <th>Teams</th>
                                <th>Gespeelde wedstrijden</th>
                                <th>Gewonnen</th>
                                <th>Gelijk</th>
                                <th>Verloren</th>
                                <th>Punten</th>
                            </tr>
                            @foreach($teams_result as $result)
                                <tr>
                                    <td>{{$result->team_name}}</td>
                                    <td>{{$result->matches_played}}</td>
                                    <td>{{$result->won}}</td>
                                    <td>{{$result->draw}}</td>
                                    <td>{{$result->lost}}</td>
                                    <td>{{$result->pts}}</td>
                                    
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
     
        <div class="match_view">
            <div class="py-12">
            <h1 class="text-lg h2_match_played py-4">Laatste 5 Gespeelde wedstrijden</h1>
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                    <div class="wrapper1">
                        @foreach($plan_matches as $match)
                        
                            <div class="ul_match">      
                            <div class="li_match">
                                    <div class="card_time_status">
                                        <h3 class="date_match_resu">{{date('Y-m-d', strtotime($match->match_date))}}<br></h3>
                                        <h3 class="date_match_resu1">Gespeeld<br></h3>
                                    </div>
                                            <span class="vs3">{{$match->team->team_name}} <b class="vs3_b">{{$match->scoreA}} - {{$match->scoreB}}</b> {{$match->team->team_name}}</span>                               
                                </div>
                            </div>  
                        @endforeach
                    </div>
                </div>     
            </div>
        </div>
    </div>

</x-app-layout>


