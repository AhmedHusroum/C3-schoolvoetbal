        <x-app-layout>
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                  <div class="admin_buttons_teams">
                  @auth 
                     @if(Auth::user()->isAdmin)
                    <a href="{{route('view.index')}}" class="btn btn-info" id="btn-account">Bekijk alle accounts</a>
                    <button type="button" class="btn btn-primary btn_create" data-toggle="modal" data-target="#exampleModalCenter">
                            Match plannen
                            </button>
                    @endif
                        @endauth
                  </div>
                </h2>
            </x-slot>
            @include('modal.generate.create')
            

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                    
                        <div class="max-w-m">
                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Zoek op naam...">

                            <h2 class="text-lg h2_index py-8"><strong>Aangemeld teams</strong></h2>
                            <div class="index-table">
                                <div class="row">
                                    <table class="table table striped" id="myTable">
                                        <thead class="table-dark">
                                            <tr>
                                                <th>Team naam</th>
                                                <th>School naam</th>
                                                <th>Aantal leden</th>
                                                <th>Locatie</th>
                                                <th>Gemaakt door</th>
                                                @auth 
                                                    @if(Auth::user()->isAdmin)
                                                <th>#</th>
                                                    @endif
                                                @endauth
                                            </tr>
                                        </thead>
                                        @foreach($teams as $team)
                                        <tr id="search">
                                            <td class="card-name"><a href="{{route('teams.edit', $team->id)}}"><i>{{$team->team_name}}</i></a></td>
                                            <td class="card-school">{{$team->school_name}}</td>
                                            <td class="card-player">{{$team->number_players}}</td>
                                            <td class="card-location">{{$team->locatie}}</td>
                                            <td class="card-creator">{{$team->creator_id}}</td>
                                            
                                            @auth 
                                                @if(Auth::user()->isAdmin)
                                            <td><form action="{{route('teams.destroy',$team->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="Verwijderen" class="btn btn-outline-danger">
                                        </form></td>
                                            @endif
                                        @endauth
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                            <!-- <button type="submit" class="btn btn-primary btn_create mt-4 block" valu id="button">Genereren</button> -->
                            <!-- <a href="#" class="btn btn-primary btn_create" data-bs-toggle="modal" data-bs-toggle="myModal">Genereren</a> -->
                           
                            
                            <!-- <a href="{{route('generate.create')}}" class="btn btn-primary btn_create">Genereren</a> -->
                            <!-- <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Testen</button> -->
                            <div class="modal" id="myModal"></div>
                                                   
                        </div>
                    </div>
                </div>
            </div>
    <!-- script1 -->
<script>
    function myFunction() {
    // Declare variables
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
        } else {
            tr[i].style.display = "none";

        }
        }
    }
}
</script>

        </x-app-layout>