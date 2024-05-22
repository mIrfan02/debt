<x-auth-layout pageTitle="Update Placement">

    <x-front.card>
        <form action="{{ route('placements.update',$data->id) }}" method="POST">
            @csrf
            @method('PUT')
            @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> Please fix the following issues:
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif




            <!-- Placement Details -->
            <h4>Placements</h4>
            <div class="row">
            <div class="mb-3 col-md-6">
                <label for="placement_date" class="form-label">Placement Date:</label>
                <input type="date" name="placement_date" id="placement_date" class="form-control" value="{{ $data->placement_date }}">
            </div>

            {{-- <div class="mb-3 col-md-6">
                <label for="contingency_method" class="form-label">Contingency Method:</label>
                <input type="text" name="contigency_method" id="contingency_method" class="form-control">
            </div> --}}

            <div class="mb-3 col-md-6">
                <label for="contingency_method" class="form-label">Contingency Method:</label>
                <select name="contigency_method" id="contingency_method" class="form-control">
                    <option value="none" {{ $data->contigency_method == 'none' ? 'selected' : '' }}>None</option>
                    <option value="option2" {{ $data->contigency_method == 'option2' ? 'selected' : '' }}>Option 2</option>
                </select>
            </div>



        </div>
        <div class="row">
            <div class="mb-3 col-md-12" id="method_rate">
                <label for="method_rate" class="form-label">Method Rate:</label>
                <input type="text" name="method_rate"  class="form-control" value="{{ $data->method_rate }}">
            </div>
        </div>

        <div class="row">



            <div class="mb-3 col-md-6">
                <label for="interest_start_date" class="form-label">Interest Start Date:</label>
                <input type="date" name="interest_start_date" id="interest_start_date" class="form-control" value="{{ $data->interest_start_date }}">
            </div>


            <div class="mb-3 col-md-6">
                <label for="allocation_method" class="form-label">Allocation Method:</label>
                <input type="text" name="allocation_method" id="allocation_method" class="form-control" value="{{ $data->allocation_method }}">
            </div>

        </div>

        <div class="row">



            <div class="mb-3 col-md-6">
                <label for="interest_rate" class="form-label">Interest Rate:</label>
                <input type="text" name="interest_rate" id="interest_rate" class="form-control" value="{{ $data->interest_rate }}">
            </div>


            <div class="mb-3 col-md-6">
                <label for="debt_type" class="form-label">Debt Type:</label>
                <input type="text" name="debt_type" id="debt_type" class="form-control" value="{{ $data->debt_type }}">
            </div>

        </div>



            <!-- Placement Components Details -->
            <h4>Placement Components</h4>

            @foreach($data->placementComponent as $component)
            <div class="row">
                <div class="mb-3 col-md-2">
                    <label for="{{ $component->name }}_name" class="form-label"> Name:</label>
                    <input type="text" name="name[]" id="{{ $component->name }}_name" class="form-control" value="{{ $component->name }}" readonly>
                </div>
                <div class="mb-3 col-md-2">
                    <label for="{{ $component->name }}_amount" class="form-label"> Amount:</label>
                    <input type="number" name="amount[]" id="{{ $component->name }}_amount" class="form-control" value="{{ $component->amount }}">
                </div>
                <div class="mb-3 col-md-2">
                    <label for="{{ $component->name }}_rate" class="form-label"> Rate:</label>
                    <input type="number" name="rate[]" id="{{ $component->name }}_rate" class="form-control" value="{{ $component->rate }}">
                </div>
                <div class="mb-3 col-md-2">
                    <label for="{{ $component->name }}_date" class="form-label"> Date:</label>
                    <input type="date" name="date[]" id="{{ $component->name }}_date" class="form-control" value="{{ $component->date }}">
                </div>
                <div class="mb-3 col-md-2">
                    <label for="{{ $component->name }}_comments" class="form-label"> Comments:</label>
                    <input type="text" name="comments[]" id="{{ $component->name }}_comments" class="form-control" value="{{ $component->comments }}">
                </div>
            </div>
        @endforeach


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </x-front.card>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        // Initially hide the Method Rate field
        $('#method_rate').hide();

        // Show/hide the Method Rate field based on the selected option
        $('#contingency_method').change(function () {
            var selectedOption = $(this).val();
            if (selectedOption !== 'none') {
                $('#method_rate').show();
            } else {
                $('#method_rate').hide();
            }
        });
    });
</script>
</x-auth-layout>
