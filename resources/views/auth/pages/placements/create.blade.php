<x-auth-layout pageTitle="Create Placement">

    <x-front.card>
        <form action="{{ route('placements.store') }}" method="POST">
            @csrf

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
                <input type="date" name="placement_date" id="placement_date" class="form-control">
            </div>

            {{-- <div class="mb-3 col-md-6">
                <label for="contingency_method" class="form-label">Contingency Method:</label>
                <input type="text" name="contigency_method" id="contingency_method" class="form-control">
            </div> --}}

            <div class="mb-3 col-md-6">
                <label for="contingency_method" class="form-label">Contingency Method:</label>
                <select name="contigency_method" id="contingency_method" class="form-control">
                    <option value="none">None</option>
                    <option value="sliding_scale">Sliding scale</option>
                    <option value="fixed_rate">Fixed rate</option>
                    <option value="flat_fee">Flat Fee</option>
                    <option value="fixed_rate">Full Amount </option>
                    <option value="hourly_rate">Hourly Rate </option>
                </select>
            </div>


        </div>
        <div class="row">
            <div class="mb-3 col-md-12" id="method_rate">
                <label for="method_rate" class="form-label">Method Rate:</label>
                <input type="text" name="method_rate"  class="form-control">
            </div>
        </div>

        <div class="row">



            <div class="mb-3 col-md-6">
                <label for="interest_start_date" class="form-label">Interest Start Date:</label>
                <input type="date" name="interest_start_date" id="interest_start_date" class="form-control">
            </div>


            <div class="mb-3 col-md-6">
                <label for="allocation_method" class="form-label">Allocation Method:</label>
                <select name="allocation_method" id="allocation_method" class="form-control">
                    <option value="none">None</option>
                    <option value="CIP">CIP</option>
                    <option value="CPI">CPI</option>
                    <option value="PCI">PCI</option>
                    <option value="PIC">PIC</option>
                    <option value="IPC">IPC</option>
                    <option value="ICP">ICP</option>
                </select>
            </div>


        </div>

        <div class="row">



            <div class="mb-3 col-md-6">
                <label for="interest_rate" class="form-label">Interest Rate:</label>
                <input type="number" name="interest_rate" id="interest_rate" class="form-control" min="0" max="100" step="0.01" oninput="updateInterestRate()">
                <span id="interestRateDisplay"></span>

                <script>
                    function updateInterestRate() {
                        var inputElement = document.getElementById("interest_rate");
                        var displayElement = document.getElementById("interestRateDisplay");
                        var value = inputElement.valueAsNumber;

                        // Check if the entered value is a valid number
                        if (!isNaN(value)) {
                            // Ensure the value is within the specified range
                            value = Math.min(value, 100);
                            inputElement.value = value; // Update the input field in case it was modified
                            displayElement.textContent = value + "%";
                        } else {
                            displayElement.textContent = "Invalid input";
                        }
                    }
                </script>
            </div>



            <div class="mb-3 col-md-6">
                <label for="debt_type" class="form-label">Debt Type:</label>
                <select name="debt_type" id="debt_type" class="form-control">
                    <option value="none">None</option>

                    <option value="Ambulance">Ambulance</option>
                    <option value="Auto lease">Auto Lease</option>
                    <option value="Auto loan">Auto loan</option>
                    <option value="car loan">Car loan</option>
                    <option value="charge card">Charge card</option>
                    <option value="child support">Child support</option>
                    <option value="commercial">Commercial</option>
                    <option value="consumer">Consumer</option>
                    <option value="credit card">Credit card</option>
                    <option value="dental">Dental</option>
                    <option value="doctor">Doctor</option>
                    <option value="home loan">Home loan</option>
                    <option value="hospital">Hospital</option>
                    <option value="legal services">Legal services</option>
                    <option value="loan">Loan</option>
                    <option value="medical">Medical</option>
                    <option value="rent">Rent</option>
                    <option value="secured loan">Secured loan</option>
                    <option value="services rendered">Services rendered</option>
                    <option value="spousal support">Spousal support</option>
                    <option value="student loan">Student loan</option>
                    <option value="unsecured loan">Unsecured loan</option>
                    <option value="utility">Utility</option>
                </select>
            </div>


        </div>

        <div class="row">

            <input type="hidden" name="debtor_id" id="debtor_id" class="form-control" value="{{ $debtorId }}">


        </div>


            <!-- Placement Components Details -->
            <h4>Placement Components</h4>

            <!-- Principal -->
            <div class="row">
            <div class="mb-3 col-md-2">
                <label for="principal_name" class="form-label"> Name:</label>
                <input type="text" name="name[]" id="principal_name" class="form-control" value="principal" readonly>
            </div>
            <div class="mb-3 col-md-2">
                <label for="principal_amount" class="form-label"> Amount:</label>
                <input type="number" name="amount[]" id="principal_amount" class="form-control">
            </div>

            <div class="mb-3 col-md-2">
                <label for="principal_rate" class="form-label"> Rate:</label>
                <input type="number" name="rate[]" id="principal_rate" class="form-control" min="0" max="100" step="0.01">
            </div>

            <div class="mb-3 col-md-2">
                <label for="principal_date" class="form-label"> Date:</label>
                <input type="date" name="date[]" id="principal_date" class="form-control">
            </div>

            <div class="mb-3 col-md-2">
                <label for="principal_comments" class="form-label"> Comments:</label>
                <input type="text" name="comments[]" id="principal_comments" class="form-control" />
            </div>
        </div>

            <!-- Cost -->
            <div class="row">
            <div class="mb-3 col-md-2">
                <input type="text" name="name[]" id="cost_name" class="form-control" value="Cost" readonly>
            </div>

            <div class="mb-3 col-md-2">
                <input type="number" name="amount[]" id="cost_amount" class="form-control">
            </div>

            <div class="mb-3 col-md-2">
                <input type="number" name="rate[]" id="cost_rate" class="form-control" min="0" max="100" step="0.01">
            </div>

            <div class="mb-3 col-md-2">
                <input type="date" name="date[]" id="cost_date" class="form-control">
            </div>

            <div class="mb-3 col-md-2">
                <input  type="text" name="comments[]" id="cost_comments" class="form-control" />
            </div>
        </div>

            <!-- Attorney -->
            <div class="row">
            <div class="mb-3  col-md-2">
                <input type="text" name="name[]" id="attorney_name" class="form-control"  value="Attorney" readonly>
            </div>

            <div class="mb-3  col-md-2">
                <input type="number" name="amount[]" id="attorney_amount" class="form-control">
            </div>

            <div class="mb-3  col-md-2">
                <input type="number" name="rate[]" id="attorney_rate" class="form-control" min="0" max="100" step="0.01">
            </div>

            <div class="mb-3  col-md-2">
                <input type="date" name="date[]" id="attorney_date" class="form-control">
            </div>

            <div class="mb-3  col-md-2">
                <input type="text" name="comments[]" id="attorney_comments" class="form-control" />
            </div>

        </div>

            <!-- Interest -->
            <div class="row">
            <div class="mb-3 col-md-2">
                <input type="text" name="name[]" id="interest_name" class="form-control" value="Interest" readonly>
            </div>

            <div class="mb-3 col-md-2">
                <input type="number" name="amount[]" id="interest_amount" class="form-control">
            </div>

            <div class="mb-3 col-md-2">
                <input type="number" name="rate[]" id="interest_rate" class="form-control" min="0" max="100" step="0.01">
            </div>

            <div class="mb-3 col-md-2">
                <input type="date" name="date[]" id="interest_date" class="form-control">
            </div>

            <div class="mb-3 col-md-2">
                <input type="text" name="comments[]" id="interest_comments" class="form-control" />
            </div>
        </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </x-front.card>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        function updateRate(rateFieldId) {
            var inputElement = document.getElementById(rateFieldId);
            var value = inputElement.valueAsNumber;

            // Check if the entered value is a valid number
            if (!isNaN(value)) {
                // Ensure the value is within the specified range
                value = Math.min(value, 100);
                inputElement.value = value; // Update the input field in case it was modified
            }
        }

        // Select all elements with the name attribute starting with "rate[]"
        var rateFields = document.querySelectorAll('input[name^="rate[]"]');

        // Attach the updateRate function to each rate field
        rateFields.forEach(function (field) {
            field.addEventListener('input', function () {
                updateRate(field.id);
            });
        });
    </script>
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
