<div>
    <!-- Modal -->
<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Uitslagen invullen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{route('generate.update', $match_result->id)}}" method="POST" enctype="mulitpart/form-data" id="regForm">
          @csrf
          @method("PUT")

                          <!-- One "tab" for each step in the form: -->
                          <div class="tab">
                          <div class="form-row">
                              <div class="col-8">
                                  <input type="text" name="teamA"  value="{{$match_result->team->team_name}}" readonly oninput="this.className = ''">
                              </div>
                              <div class="col">
                                  <input type="number" name="scoreA"  placeholder="score team 1" min="0" oninput="this.className = ''">
                              </div>
                          </div>
                          

                          
                          <div class="form-row py-3">
                                <div class="col-8">
                                    <input type="text" name="teamB" class="form-control" value="{{$match_resultB->team->team_name}}" readonly oninput="this.className = ''">
                                </div>
                                <div class="col">
                                    <input type="number" name="scoreB" class="form-control" placeholder="score team 2" min="0" oninput="this.className = ''">
                                </div>
                            </div>
                          

                          <div class="form-row py-3">
                              <div class="col-10">
                                  <input type="hidden" name="status_match" class="form-control" value="1" min="0">
                              </div>
                          </div>
                          </div>

                          <!-- ================ tot hier worden de gegevens in match table opgeslage-================ -->

                          

                          <div style="overflow:auto;">
                            <div style="float:left;">
                              <button type="button" id="prevBtn" onclick="nextPrev(-1)">Vorige</button>
                            </div>
                          </div>

                          <div style="overflow:auto;">
                            <div style="float:right;">
                              <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                            </div>
                          </div>

                          <!-- Circles which indicates the steps of the form: -->
                          <div style="text-align:center;margin-top:40px;">
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                          </div>
        </form>
        
      </div>
      
    </div>
  </div>
</div>
    
</div>


<script>
  var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Opslaan";
  } else {
    document.getElementById("nextBtn").innerHTML = "Volgende";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}
</script>