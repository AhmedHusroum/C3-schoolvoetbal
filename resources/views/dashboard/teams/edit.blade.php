<x-app-layout>
    <!-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('teams') }}
        </h2>
    </x-slot> -->

    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                   <h2 class="text-lg h2_create"><strong>Team aanpassen</strong></h2>
                   <p><i class="fa-solid fa-pen-to-square"></i> <i><b> {{$team->team_name}}</b></i></p>
                  
                 
                   <form action="{{route('teams.update', $team->id)}}" method="POST" enctype="mulitpart/form-data">
                    @csrf
                    @method("PUT")

                    
                    <x-text-input id="team_name" name="team_name" type="text" class="mt-4 block w-full" placeholder="Vul hier je team naam in" value="{{$team->team_name}}"/>
                
                    <x-text-input id="school_name" name="school_name" type="text" class="mt-4 block w-full" placeholder="Vul hier je school naam in" value="{{$team->school_name}}"/>

                    <!-- <x-text-input id="players" name="players" type="text" class="mt-4 block w-full" placeholder="Voeg speler toe"/> -->
                
                    <!-- <x-text-input id="number_players" name="number_players" type="number" class="mt-4 block w-full" placeholder="Vul hier aantal spelers in"/> -->

                    <x-text-input id="locatie" name="locatie" type="text" class="mt-4 block w-full" placeholder="Vul hier de locatie in" value="{{$team->locatie}}"/>

                    <label for="players" class="mt-4 block w-full">Spelers toevoegen:</label>
                    @foreach($teams as $team)
                        <input type="checkbox" value="{{$team->name}}" id="players" name="players" checked><label for="test">{{$team->name}}</label>
                    @endforeach

                    <button type="submit" class="btn btn-success btn_create mt-4 block" valu>Opslaan</button>
                   </form>
                   
                   <!-- <button type="submit" class="btn btn-primary btn_create mt-4 block" valu>extra speler toevoegen</button> -->
                    
                   <!-- <p>Speler toevoegen</p>
                    <span></span>
                    </div>
                    <div class="crate_img">
                        <div class="shrink-0 flex items-center">
                            <img src="{{ asset('img/logo.png')}}" alt="logo" class="">
                         </div> -->
                </div>
            </div>
          
        </div>
    </div>
    <!-- <script type="text/javascript">
    $(document).ready(function() {
        $('select').selectpicker();
    });
</script> -->



<!-- <script>
var count = 0;
$( "body" ).on( "click", "p", function() {
  $( this ).after( "<option>" + (++count) + "</option>" );
});
</script> -->
    
</x-app-layout>
