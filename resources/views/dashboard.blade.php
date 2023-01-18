 <x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Schooltoernooi') }}
            @auth 
                 @if(Auth::user()->isAdmin)
                   
                @endif
            @endauth
        </h2>
    </x-slot>
    

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-sm">
                <!-- <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                
                </div> -->
                
            </div>
            @if(session('status'))
                    <h6 class="alert alert-success"><i class="fa-solid fa-check"></i> {{ session('status') }}</h6>
                @endif
        </div>
    </div>

    <!-- <img src="img/navbar_img.jpg" alt=""> -->

     <div class="p-4 sm:p-8 bg-gray shadow sm:rounded-lg">
        <div class="container">
            <div class="row">
                <div class="col-xl">
                    <h3 class="text-lg h2_index py-4">Top 5 teams</h3>
                    <!--  -->
                    <table id="table_dash">
                        <thead>
                            <tr>
                                <th colspan="4">Teams</th>
                                <th>Goals</th>
                                <th>Punten</th>
                            </tr>
                            @foreach($teams_dashs as $team)
                                <tr>
                                    <td colspan="4">{{$team->team_name}}</td>
                                    <td>{{$team->goals_for}}</td>
                                    <td>{{$team->pts}}</td>
                                </tr>
                            @endforeach
                        </thead>
                    </table>

                    <!--  -->
                </div>

            <div class="col-sm">
                <div class="shrink-0 flex items-center dashboard_img">
                    <img src="{{ asset('img/soccer_winning.jpg')}}" alt="img" class="dashboardd_img">
                </div>
            </div>
        </div>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-sm">                   
                        <div class="container">
                            <div class="row">
                                <div class="col-sm">
                                   <div class="h5_dashboard">
                                        <h5 class="text-lg h2_index py-4"><i class="fa-solid fa-ranking-star"></i> Top 3 spelers met de meeste goals</h5>
                                   </div>
                                   <div class="grid_dashboard">
                                    <h1>speler 1</h1>
                                    <h1>speler 2</h1>
                                    <h1>speler 3</h1>
                                   </div>
                                   <div class="grid_dashboard">
                                    <h1>5 goals</h1>
                                    <h1>4 goals</h1>
                                    <h1>3 gaols</h1>
                                   </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>

        <!-- new -->

       
            <!-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">           
                <div class="row row_dashboard"> 
                    <div class="col-sm"> -->
                        <!-- <h3 class="text-lg h2_index py-4">Wedstrijden</h3> -->
                    <!-- </div>
                    <div class="col-sm"> -->
                        <!-- <h3 class="text-lg h2_index py-4">Mijn teams</h3>
                        @foreach($teams as $team)
                            <p>{{$team->team_name}}</p>
                        @endforeach -->
                        
                    <!-- </div>
                </div>
            </div>    -->


                
            <div class="sidenav">
                <div class="grid1">
                    <h3 class="text-lg h2_index py-4">Aanstaande wedstrijd <i class="fa-solid fa-medal"></i></h3>
                    @foreach($coming_match as $coming)
                    <a href="{{route('generate.index')}}">
                        <p class="vs">{{$coming->teamA_id}} <img src="img/vs.png" style="width: 16%;"> {{$coming->teamB_id}}</p>
                    </a>
                    @endforeach
                    
                </div>
                <div class="grid2">
                    <h3 class="text-lg h2_index py-4">Mijn Teams<i class="fa-sharp fa-solid fa-people-group"></i></h3>
                    @foreach($teams as $team)
                        <p>{{$team->team_name}}</p>
                    @endforeach
                </div>
            </div>

            

            
    
</x-app-layout>



















































<!-- ////////////////////////// -->
<!-- save codes -->

 <!-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> -->

<!-- /////////////////////////// -->