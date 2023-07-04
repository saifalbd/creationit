<x-admin-layout>
    <main>
        <div class="container-fluid">
            <div class="mt-3 page-title">SMS <i class="fas fa-angle-right"></i> Send Dues SMS</div>
            <div class="card mb-4">
                <div class="card-body">
                    <form name="frmUser" method="get" action="{{route('message.dueForm')}}">
                      

                        *** Click on the button below to send a mobile message informing the trainees about the dues
                        fee.<br>
                        *** Charges will be applicable at regular rate for each SMS.
                        <hr>
                        <div class="input-group mb-3" style="max-width: 400px">
                            <div class="input-group-prepend">
                              <span class="input-group-text">Batch</span>
                            </div>
                            <select name="batch" class="form-control @error('batch') is-invalid @enderror">
                                <option value="">Select Batch</option>
                                @foreach ($batches as $item)
                                <option value="{{$item->id}}">{{$item->title}}</option> 
                                @endforeach
                            </select>
                            @error('batch')<div class="invalid-feedback">{{ $message }}</div>@enderror
                          </div>
                          <hr>

                        <label for="terms_and_conditions"> I agree to send sms</label>
                        <input type="checkbox" id="terms_and_conditions" value="1" onclick="terms_changed(this)" />
                        <br><br>
                        <button type="submit" id="submit_button" disabled class="btn btn-primary"><i
                                class="fa fa-paper-plane"></i> Send SMS</button>




                    </form>
                </div>

            </div>
        </div>

    </main>

    @slot('script')
    <script>

const crudeAlert = (property)=>{
  const queryString = window.location.search;
const parameters = new URLSearchParams(queryString);
const success = parameters.get(property);
if(success){
    swal({
        position: 'center',
        icon: 'success',
        title: success,
        showConfirmButton: false,
        timer: 1500
      })
      parameters.delete(property)
      const newUrl = `${window.location.origin}${window.location.pathname}?${parameters.toString()}`;
window.history.replaceState(null, null, newUrl);
}
}


crudeAlert('success');

        //JavaScript function that enables or disables a submit button depending
        //on whether a checkbox has been ticked or not.
        function terms_changed(termsCheckBox){
            //If the checkbox has been checked
            if(termsCheckBox.checked){
                //Set the disabled property to FALSE and enable the button.
                document.getElementById("submit_button").disabled = false;
            } else{
                //Otherwise, disable the submit button.
                document.getElementById("submit_button").disabled = true;
            }
        }
        </script>
    @endslot
</x-admin-layout>
