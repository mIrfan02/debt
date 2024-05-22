<x-auth-layout pageTitle="Update Legal">

    <x-front.card>

        <form action="{{ route('legals.update',$data->id) }}" method="POST" id="myForm">
            @method('PUT')
            @csrf


            <!-- Client Details -->
            <h4 style="padding-bottom: 1rem;">Legal captions</h4>

            <!-- Plaintiff Fields -->
            <div class="form-group" id="plaintiffContainer">
                <div class="sec">
                    <h4>Plaintiffs</h4>

                </div>

                @foreach($data->plaintiff as $plaintiffIndex => $plaintiffArray)
        @foreach($plaintiffArray as $index => $plaintiff)
            <div>
                <label for="plaintiff{{ $plaintiffIndex + 1 }}">Plaintiff {{ $plaintiffIndex + 1 - $index-1}}:</label>
                <input type="text" class="form-control" name="plaintiff[{{ $plaintiffIndex  }}][]" value="{{ $plaintiff }}" required>
            </div>
        @endforeach
    @endforeach
            </div>

            <!-- Defendant Fields -->
            <div class="form-group" id="defendantContainer">
                <div class="sec">
                    <h4>Defendants</h4>

                </div>
                @foreach($data->defendant as $defendantIndex => $defendantArray)
                @foreach($defendantArray as $index => $defendant)
                    <div>
                        <label for="defendant{{ $defendantIndex + 1 }}">Defendant {{ $defendantIndex + 1 - $index-1 }}:</label>
                        <input type="text" class="form-control" name="defendant[{{ $defendantIndex  }}][]" value="{{ $defendant }}" required>
                    </div>
                @endforeach
            @endforeach
            </div>

            <h4>Bankruptcy</h4>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <div>
                            <label for="chapter">chapter</label>
                            <input type="text" class="form-control" name="chapter" value="{{ $data->chapter }}" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label for="ClosedDate">Closed Date</label>
                            <input type="date" class="form-control" name="closed_date" value="{{ $data->closed_date }}" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label for="reAffirmationAmmount">Re-Affirmation Amount</label>
                            <input type="number" class="form-control" name="re_affirmation_amount" value="{{ $data->re_affirmation_amount  }}" required>
                        </div>
                    </div>
                </div>
            </div>



            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <div>
                            <label for="chapter">Case No</label>
                            <input type="text" class="form-control" name="case_number"  value="{{$data->case_number }}" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label for="ClosedDate">Converted Date</label>
                            <input type="date" class="form-control" name="converted_date" value="{{ $data->converted_date }}" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label for="reAffirmationAmmount">Re-Affirmation Date</label>
                            <input type="date" class="form-control" name="re_affirmation_date"  value="{{ $data->re_affirmation_date }}" required>
                        </div>
                    </div>
                </div>
            </div>


            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <div>
                            <label for="chapter">Location</label>
                            <input type="text" class="form-control" name="location" value="{{ $data->location }}" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label for="ClosedDate">341 Date</label>
                            <input type="date" class="form-control" name="date_341" value="{{ $data->date_341 }}" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label for="reAffirmationAmmount">Arrangment Amount</label>
                            <input type="number" class="form-control" name="arrangement_amount" value="{{ $data->arrangement_amount }}" required>
                        </div>
                    </div>
                </div>
            </div>


            <h4>Probate</h4>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <div>
                            <label for="chapter">Probate Case Number</label>
                            <input type="text" class="form-control" name="probate_case_number" value="{{ $data->probate_case_number }}" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label for="ClosedDate">Court Name</label>
                            <input type="text" class="form-control" name="court_name" value="{{ $data->court_name }}" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label for="reAffirmationAmmount">Date Field</label>
                            <input type="date" class="form-control" name="date_filed"  value="{{ $data->date_filed }}" required>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <div>
                            <label for="chapter">Date of Death</label>
                            <input type="date" class="form-control" name="date_of_death" value="{{ $data->date_of_death }}" required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div>
                            <label for="ClosedDate">Country</label>
                            <input type="text" class="form-control" name="county"  value="{{ $data->county }}" required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div>
                            <label for="reAffirmationAmmount">State</label>
                            <input type="text" class="form-control" name="state" value="{{ $data->state }}" required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div>
                            <label for="reAffirmationAmmount">Date Expires</label>
                            <input type="date" class="form-control" name="date_expires" value="{{ $data->date_expires }}" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-12">
                <label for="remarks">Remarks:</label>
                <textarea class="form-control" name="remarks" id="remarks">{{ $data->remarks }}</textarea>
                @error('remarks')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>



        {{-- <script>
            function addFormField(group) {
                var container = document.getElementById(group + "Container");
                var div = document.createElement("div");
                var groupCount = container.querySelectorAll('[name^="' + group + '"]').length + 1;

                div.innerHTML = '<label for="' + group + groupCount + '">' + group.charAt(0).toUpperCase() + group.slice(1) +
                    ' ' + groupCount + ':</label>' +
                    '<input type="text" name="' + group + '[' + groupCount + '][]" class="form-control" required>' +
                    '<button type="button" class="minus btn btn-danger mt-2" onclick="removeFormField(this)">-</button>';

                container.appendChild(div);
            }

            function removeFormField(button) {
                var div = button.parentNode;
                div.parentNode.removeChild(div);
            }
        </script>
 --}}

    </x-front.card>
</x-auth-layout>
