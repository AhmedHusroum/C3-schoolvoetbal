
<!-- // voor codes bewaren -->
<!-- //geen onderdeel van de website -->




<div class="index-table">
                        <div class="row">
                            <table class="table table-sm">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Team naam</th>
                                    </tr>
                                </thead>
                                @foreach($teams as $team)
                                    <tr>
                                        <td class="card-name">{{$team->team_name}}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>






                    <!-- result -->

                    @foreach($results as $result)
                    <ul>        
                        <li>
                            <div class="vs1">
                                <h3 class="date_match"> <img src="/img/date.png" style="width: 19%;"> {{$result->teamA}}<br></h3>
                                <h3 class="field_match"> <img src="/img/field.png" style="width: 49%;"> {{$result->field}}</h3>
                            </div>
                           
                                <span class="vs">{{$result->teamA}} <img src="/img/vs1.png" style="width: 17%;"> {{$result->teamB}}</span>                     
                    </ul>
                @endforeach


                <table border="1">
  <thead>
    <tr>
      <th>Month</th>
      <th>Savings</th>
    </tr>
  </thead>
  <tfoot>
    <tr>
      <td>Sum</td>
      <td>$180</td>
    </tr>
  </tfoot>
  <tbody style="overflow-y:scroll; height:100px;"> <!-- wont work -->
    <tr>
      <td>January</td>
      <td>$100</td>
    </tr>
    <tr>
      <td>February</td>
      <td>$80</td>
    </tr>
          <tr>
      <td>January</td>
      <td>$100</td>
    </tr>
    <tr>
      <td>February</td>
      <td>$80</td>
    </tr>
          <tr>
      <td>January</td>
      <td>$100</td>
    </tr>
    <tr>
      <td>February</td>
      <td>$80</td>
    </tr>
          <tr>
      <td>January</td>
      <td>$100</td>
    </tr>
    <tr>
      <td>February</td>
      <td>$80</td>
    </tr>
          <tr>
      <td>January</td>
      <td>$100</td>
    </tr>
    <tr>
      <td>February</td>
      <td>$80</td>
    </tr>
          <tr>
      <td>January</td>
      <td>$100</td>
    </tr>
    <tr>
      <td>February</td>
      <td>$80</td>
    </tr>
          <tr>
      <td>January</td>
      <td>$100</td>
    </tr>
    <tr>
      <td>February</td>
      <td>$80</td>
    </tr>
          <tr>
      <td>January</td>
      <td>$100</td>
    </tr>
    <tr>
      <td>February</td>
      <td>$80</td>
    </tr>
          <tr>
      <td>January</td>
      <td>$100</td>
    </tr>
    <tr>
      <td>February</td>
      <td>$80</td>
    </tr>
          <tr>
      <td>January</td>
      <td>$100</td>
    </tr>
    <tr>
      <td>February</td>
      <td>$80</td>
    </tr>
          <tr>
      <td>January</td>
      <td>$100</td>
    </tr>
    <tr>
      <td>February</td>
      <td>$80</td>
    </tr>
          <tr>
      <td>January</td>
      <td>$100</td>
    </tr>
    <tr>
      <td>February</td>
      <td>$80</td>
    </tr>
          <tr>
      <td>January</td>
      <td>$100</td>
    </tr>
    <tr>
      <td>February</td>
      <td>$80</td>
    </tr>
          <tr>
      <td>January</td>
      <td>$100</td>
    </tr>
    <tr>
      <td>February</td>
      <td>$80</td>
    </tr>
          <tr>
      <td>January</td>
      <td>$100</td>
    </tr>
    <tr>
      <td>February</td>
      <td>$80</td>
    </tr>
          <tr>
      <td>January</td>
      <td>$100</td>
    </tr>
    <tr>
      <td>February</td>
      <td>$80</td>
    </tr>
          <tr>
      <td>January</td>
      <td>$100</td>
    </tr>
    <tr>
      <td>February</td>
      <td>$80</td>
    </tr>
  </tbody>
</table>









<div class="tab">
            <div class="form-row">
                <div class="col-8">
                    <input type="text" name="teamA" class="form-control" value="{{$match_result->teamA}}" readonly oninput="this.className = ''">
                </div>
                <div class="col">
                    <input type="number" name="scoreA" class="form-control" placeholder="score team 1" min="0" oninput="this.className = ''">
                </div>
            </div>
            

            <!-- TEAM2 -->
            <div class="form-row py-3">
                <div class="col-8">
                    <input type="text" name="teamB" class="form-control" value="{{$match_result->teamB}}" readonly oninput="this.className = ''">
                </div>
                <div class="col">
                    <input type="number" name="scoreB" class="form-control" placeholder="score team 2" min="0" oninput="this.className = ''">
                </div>
            </div>
            
        
            <!-- MATCH_STATUS-->
            <!-- <div class="form-row py-1">
                <div class="col-10">
                    <input type="checkbox" name="status_match[]" class="form-check-input check_input" checked disabled>
                    <label for="status_match" class="form-check-label">Wedstrijd Gespeeld</label>
                </div>
            </div> -->

            <div class="form-row py-3">
                <div class="col-10">
                    <input type="hidden" name="status_match" class="form-control" value="1" min="0">
                </div>
            </div>

            <div style="overflow:auto;">
  <div style="float:right;">
    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
  </div>
</div>
<div style="text-align:center;margin-top:40px;">
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
</div>

            <div class="modal-footer">
              <!-- <button type="submit" class="btn btn-danger">Opslaan</button> -->
          </div>