<x-front.card>

    <h4>Add Advanced Cost</h4>

    <form action="{{ route('advancedcosts.store') }}" method="POST">

        @csrf

        <input type="hidden" name="claim_id" value="{{ $data->id }}">

        <div class="row">
            <div class="mb-3 col-md-6">
                <label for="category" class="form-label">Category</label>
                <select name="category" id="category" class="form-control">
                    <option value="none">None</option>
                    <option value="Cost">Cost</option>
                    <option value="Adjustment">Adjustment</option>
                    <option value="Balance">Balance</option>
                    <option value="Non-Chargeable">Non-Chargeable</option>
                    <option value="Original Amount">Original Amount</option>
                    <option value="Payment">Payment</option>
                    <option value="Rate Change Post-Judgment">Rate Change Post-Judgment</option>
                    <option value="Rate Change Pre-Judgment">Rate Change Pre-Judgment</option>
                </select>
                @error('category')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            </div>


            <div class="mb-3 col-md-6">
                <label for="debtor_claim_number" class="form-label">Debtor-Claim Number</label>
                <select name="debtor_claim_number" id="debtor_claim_number" class="form-control">
                    <option value="none">None</option>
                    <option value="GigaBytes Computers -2023-0001-0">GigaBytes Computers -2023-0001-0</option>
                    <!-- Add other options as needed -->
                </select>
                @error('debtor_claim_number')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            </div>

            <div class="form-group col-md-6">
                <label for="client_name">Client Name</label>
                <input type="text" class="form-control" name="client_name" placeholder="(Not Assigned)">
                @error('client_name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3 col-md-6">
                <label for="cost_type" class="form-label">Cost Type</label>
                <select name="cost_type" id="cost_type" class="form-control">
                    <option value="None">None</option>
                    <option value="Abstract of judgment, issue">Abstract of judgment, issue</option>
                    <option value="Abstract of judgment, record">Abstract of judgment, record</option>
                    <option value="Complaint filing fee">Complaint filing fee</option>
                    <option value="Cost of Service">Cost of Service</option>
                    <option value="Costs, post-judgment">Costs, post-judgment</option>
                    <option value="Costs, pre-judgment">Costs, pre-judgment</option>
                    <option value="Docket Fee">Docket Fee</option>
                    <option value="Docket Fee">Docket Fee</option>
                    <option value="EWO, issue">EWO, issue</option>
                    <option value="EWO, serve">EWO, serve</option>
                    <option value="Index No Fee">Index No Fee</option>
                    <option value="Motion filing fee">Motion filing fee</option>
                    <option value="Summons/complaint service">Summons/complaint service</option>
                    <option value="Transcript Fee">Transcript Fee</option>
                    <option value="Writ of execution, issue">Writ of execution, issue</option>
                </select>
                @error('cost_type')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            </div>


            <div class="mb-3 col-md-6">
                <label for="cost_date" class="form-label">Cost Date:</label>
                <input type="date" name="cost_date" id="cost_date" class="form-control">
                @error('cost_date')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            </div>

            <div class="mb-3 col-md-6">
                <label for="effective_date" class="form-label">Effective Date:</label>
                <input type="date" name="effective_date" id="effective_date" class="form-control">

                @error('effective_date')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            </div>

            <div class="form-group col-md-12">
                <label for="cost_amount">Cost Amount</label>
                <input type="number" class="form-control" name="cost_amount">
                <!-- Add validation and error handling if needed -->
                @error('cost_amount')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            </div>

            <div class="mb-3 col-md-6">
                <label for="cost_method" class="form-label">Cost Method</label>
                <select name="cost_method" id="cost_method" class="form-control">
                    <option value="None">None</option>
                    <option value="Cash">Cash</option>
                    <option value="Check">Check</option>
                    <option value="Credit Card">Credit Card</option>
                    <option value="Direct Debit">Direct Debit</option>
                    <option value="Money Order">Money Order</option>
                    <option value="Cashier's Check">Cashier's Check</option>
                    <option value="Government Check">Government Check</option>
                    <option value="Garnishment">Garnishment</option>
                </select>

                @error('cost_method')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            </div>


            <div class="form-group col-md-6">
                <label for="check_no">Check No</label>
                <input type="text" class="form-control" name="check_no">
                @error('check_no')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            </div>

            <div class="mb-3 col-md-6">
                <label for="advanced_by" class="form-label">Advanced by</label>
                <select name="advanced_by" id="advanced_by" class="form-control">
                    <option>Totality 5Demo</option>
                    <!-- Add other options as needed -->
                </select>
                @error('advanced_by')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            </div>

            <div class="mb-3 col-md-6">
                <label for="charged_to" class="form-label">Charged To</label>
                <select name="charged_to" id="charged_to" class="form-control">
                    <option>GigaBytes Computer</option>
                    <!-- Add other options as needed -->
                </select>
                @error('charged_to')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            </div>

            <div class="form-group col-md-12">
                <label for="remarks">Remarks:</label>
                <textarea class="form-control" name="remarks" id="remarks"></textarea>
                <span style="color: #a49b9b;">Applied To Agreement</span>
                @error('remarks')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            </div>

            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </div>
    </form>


</x-front.card>
