<!-- <button type="button" class="btn btn-primary btn_create" data-toggle="modal" data-target="#exampleModalCenter">
                            Uitslag invullen
                            </button> -->
<div>
    <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Match pleannen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      @if ($errors->any())
              <div class="alert alert-danger">
                <P><b>Let op!</b> Er is iets mis gegaan!</P>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('generate.store')}}" method="POST" enctype="mulitpart/form-data">
          @csrf
                                        
            <select name="teamA" id="teamA_id" class="mt-4 block w-full">
            <option value="">--Kies team 1--</option>
              @foreach($plan_teams as $plan_team)
              <option value="{{$plan_team->id}}">{{$plan_team->team_name}}</option>
              @endforeach     
            </select>

            <select name="teamB" id="teamB_id" class="mt-4 block w-full">
            <option value="">--Kies team 2--</option>
              @foreach($plan_teams as $plan_team)
              <option value="{{$plan_team->id}}">{{$plan_team->team_name}}</option>        
              @endforeach     
            </select>
                        
            <x-text-input id="field" name="field" type="text" class="mt-4 block w-full" placeholder="Veld" value=""/>
                    
            <input type="datetime-local"  class="mt-4 block w-full" id="match_date" name="match_date">


            <div class="modal-footer">
              <button type="submit" class="btn btn-danger">Plannen</button>
          </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
</div>
