<style>
    .form-group {
        margin-bottom: 20px;
    }

    .sec {
        display: flex;
        justify-content: space-between;
    }

    input {
        width: 100%;
    }
</style>

<x-front.card>
    <form action="" method="POST" id="myForm">
        @method('put')
        @csrf

        <!-- Client Details -->

        <h4 class="mb-3">Court</h4>
        <div class="form-group">
            <div class="row">
                <div class="col-md-4">
                    <div>
                        <label for="chapter">Jurisdiction</label>
                        <input type="text" class="form-control" name="Jurisdiction" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div>
                        <label for="ClosedDate">Country</label>
                        <input type="text" class="form-control" name="Country" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div>
                        <label for="reAffirmationAmmount">Case no</label>
                        <input type="text" class="form-control" name="case-no" required>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-md-4">
                    <div>
                        <label for="chapter">District</label>
                        <input type="text" class="form-control" name="District" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div>
                        <label for="ClosedDate">Department</label>
                        <input type="text" class="form-control" name="Department" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div>
                        <label for="reAffirmationAmmount">Transcript no</label>
                        <input type="text" class="form-control" name="Transcript-no" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group col-md-12">
            <label for="remarks">Remarks:</label>
            <textarea class="form-control" name="remarks" id="remarks"></textarea>
            @error('remarks')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="row">
            <div class="mb-3 col-md-2">
                <label for="principal_name" class="form-label"> Action:</label>
                <input type="text" name="Action[]" id="principal_name" class="form-control">
            </div>
            <div class="mb-3 col-md-2">
                <label for="principal_amount" class="form-label"> Action Date:</label>
                <input type="number" name="Action-Date[]" id="principal_amount" class="form-control">
            </div>

            <div class="mb-3 col-md-2">
                <label for="principal_rate" class="form-label"> Recipient</label>
                <input type="number" name="Recipient[]" id="principal_rate" class="form-control" min="0"
                    max="100" step="0.01">
            </div>

            <div class="mb-3 col-md-2">
                <label for="principal_date" class="form-label">Due Date:</label>
                <input type="date" name="due-date[]" id="principal_date" class="form-control">
            </div>

            <div class="mb-3 col-md-2">
                <label for="principal_comments" class="form-label"> Completed:</label>
                <input type="text" name="Completed[]" id="principal_comments" class="form-control" />
            </div>
            <div class="mb-3 col-md-2">
                <label for="principal_comments" class="form-label"> Comments:</label>
                <input type="text" name="Comments[]" id="principal_comments" class="form-control" />
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-md-2">
                <input type="text" name="name[]" id="cost_name" class="form-control">
            </div>

            <div class="mb-3 col-md-2">
                <input type="number" name="amount[]" id="cost_amount" class="form-control">
            </div>

            <div class="mb-3 col-md-2">
                <input type="number" name="rate[]" id="cost_rate" class="form-control" min="0"
                    max="100" step="0.01">
            </div>

            <div class="mb-3 col-md-2">
                <input type="date" name="date[]" id="cost_date" class="form-control">
            </div>

            <div class="mb-3 col-md-2">
                <input type="text" name="comments[]" id="cost_comments" class="form-control" />
            </div>
            <div class="mb-3 col-md-2">
                <input type="text" name="comments[]" id="cost_comments" class="form-control" />
            </div>
        </div>


        <div class="row">
            <div class="mb-3 col-md-2">
                <input type="text" name="name[]" id="cost_name" class="form-control">
            </div>

            <div class="mb-3 col-md-2">
                <input type="number" name="amount[]" id="cost_amount" class="form-control">
            </div>

            <div class="mb-3 col-md-2">
                <input type="number" name="rate[]" id="cost_rate" class="form-control" min="0"
                    max="100" step="0.01">
            </div>

            <div class="mb-3 col-md-2">
                <input type="date" name="date[]" id="cost_date" class="form-control">
            </div>

            <div class="mb-3 col-md-2">
                <input type="text" name="comments[]" id="cost_comments" class="form-control" />
            </div>
            <div class="mb-3 col-md-2">
                <input type="text" name="comments[]" id="cost_comments" class="form-control" />
            </div>
        </div>


        <div class="row">
            <div class="mb-3 col-md-2">
                <input type="text" name="name[]" id="cost_name" class="form-control">
            </div>

            <div class="mb-3 col-md-2">
                <input type="number" name="amount[]" id="cost_amount" class="form-control">
            </div>

            <div class="mb-3 col-md-2">
                <input type="number" name="rate[]" id="cost_rate" class="form-control" min="0"
                    max="100" step="0.01">
            </div>

            <div class="mb-3 col-md-2">
                <input type="date" name="date[]" id="cost_date" class="form-control">
            </div>

            <div class="mb-3 col-md-2">
                <input type="text" name="comments[]" id="cost_comments" class="form-control" />
            </div>
            <div class="mb-3 col-md-2">
                <input type="text" name="comments[]" id="cost_comments" class="form-control" />
            </div>
        </div>



        <h4 class="mb-3">Judgment</h4>
        <div class="form-group">
            <div class="row">
                <div class="col-md-3">
                    <div>
                        <label for="chapter">Judgment Date</label>
                        <input type="date" class="form-control" name="Judgment-date" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div>
                        <label for="ClosedDate">Judgment no</label>
                        <input type="no" class="form-control" name="Judgment-no" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div>
                        <label for="reAffirmationAmmount">Judgment Expiration</label>
                        <input type="date" class="form-control" name="Judgment-Expiration" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div>
                        <label for="reAffirmationAmmount">Judgment Interest Rate</label>
                        <input type="no" class="form-control" name="Judgment-Interest-Rate" required>
                    </div>
                </div>
            </div>
        </div>

        <h4 class="mb-3">judgment Components</h4>
        <div class="row">
            <div class="mb-3 col-md-2">
                <label for="principal_name" class="form-label"> Name:</label>
                <input type="text" name="name[]" id="principal_name" class="form-control" value="principal"
                    readonly>
            </div>
            <div class="mb-3 col-md-2">
                <label for="principal_amount" class="form-label"> Amount:</label>
                <input type="number" name="amount[]" id="principal_amount" class="form-control">
            </div>

            <div class="mb-3 col-md-2">
                <label for="principal_rate" class="form-label"> Rate:</label>
                <input type="number" name="rate[]" id="principal_rate" class="form-control" min="0"
                    max="100" step="0.01">
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
                <input type="number" name="rate[]" id="cost_rate" class="form-control" min="0"
                    max="100" step="0.01">
            </div>

            <div class="mb-3 col-md-2">
                <input type="date" name="date[]" id="cost_date" class="form-control">
            </div>

            <div class="mb-3 col-md-2">
                <input type="text" name="comments[]" id="cost_comments" class="form-control" />
            </div>

        </div>

        <!-- Attorney -->
        <div class="row">
            <div class="mb-3  col-md-2">
                <input type="text" name="name[]" id="attorney_name" class="form-control" value="Attorney"
                    readonly>
            </div>

            <div class="mb-3  col-md-2">
                <input type="number" name="amount[]" id="attorney_amount" class="form-control">
            </div>

            <div class="mb-3  col-md-2">
                <input type="number" name="rate[]" id="attorney_rate" class="form-control" min="0"
                    max="100" step="0.01">
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
                <input type="text" name="name[]" id="interest_name" class="form-control" value="Interest"
                    readonly>
            </div>

            <div class="mb-3 col-md-2">
                <input type="number" name="amount[]" id="interest_amount" class="form-control">
            </div>

            <div class="mb-3 col-md-2">
                <input type="number" name="rate[]" id="interest_rate" class="form-control" min="0"
                    max="100" step="0.01">
            </div>

            <div class="mb-3 col-md-2">
                <input type="date" name="date[]" id="interest_date" class="form-control">
            </div>

            <div class="mb-3 col-md-2">
                <input type="text" name="comments[]" id="interest_comments" class="form-control" />
            </div>
        </div>


        <div class="mb-3 col-md-12">
            <label for="total-additionammount">Judgment Ammount</label>
            <input type="text" name="total-additionammount" id="total-additionammount" class="form-control" />
        </div>

        <h4 class="mb-3">Additions to judgment</h4>

        <div class="row">
            <div class="mb-3 col-md-2">

            </div>
            <div class="mb-3 col-md-2">
                <label for="principal_amount" class="form-label"> Amount:</label>
                {{-- <input type="number" name="amount[]" id="principal_amount" class="form-control"> --}}
            </div>

            <div class="mb-3 col-md-2">
                <label for="principal_rate" class="form-label"> Rate:</label>
                {{-- <input type="number" name="rate[]" id="principal_rate" class="form-control" min="0" --}}
                {{-- max="100" step="0.01"> --}}
            </div>

            <div class="mb-3 col-md-2">
                <label for="principal_date" class="form-label"> Date:</label>
                {{-- <input type="date" name="date[]" id="principal_date" class="form-control"> --}}
            </div>

            <div class="mb-3 col-md-2">
                <label for="principal_comments" class="form-label"> Comments:</label>
                {{-- <input type="text" name="comments[]" id="principal_comments" class="form-control" /> --}}
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-md-2">
                <input type="text" name="name[]" id="cost_name" class="form-control" value="Addition#01"
                    readonly>
            </div>

            <div class="mb-3 col-md-2">
                <input type="number" name="amount[]" id="cost_amount" class="form-control">
            </div>

            <div class="mb-3 col-md-2">
                <input type="number" name="rate[]" id="cost_rate" class="form-control" min="0"
                    max="100" step="0.01">
            </div>

            <div class="mb-3 col-md-2">
                <input type="date" name="date[]" id="cost_date" class="form-control">
            </div>

            <div class="mb-3 col-md-2">
                <input type="text" name="comments[]" id="cost_comments" class="form-control" />
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-md-2">
                <input type="text" name="name[]" id="cost_name" class="form-control" value="Addition#02"
                    readonly>
            </div>

            <div class="mb-3 col-md-2">
                <input type="number" name="amount[]" id="cost_amount" class="form-control">
            </div>

            <div class="mb-3 col-md-2">
                <input type="number" name="rate[]" id="cost_rate" class="form-control" min="0"
                    max="100" step="0.01">
            </div>

            <div class="mb-3 col-md-2">
                <input type="date" name="date[]" id="cost_date" class="form-control">
            </div>

            <div class="mb-3 col-md-2">
                <input type="text" name="comments[]" id="cost_comments" class="form-control" />
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-md-2">
                <input type="text" name="name[]" id="cost_name" class="form-control" value="Addition#03"
                    readonly>
            </div>

            <div class="mb-3 col-md-2">
                <input type="number" name="amount[]" id="cost_amount" class="form-control">
            </div>

            <div class="mb-3 col-md-2">
                <input type="number" name="rate[]" id="cost_rate" class="form-control" min="0"
                    max="100" step="0.01">
            </div>

            <div class="mb-3 col-md-2">
                <input type="date" name="date[]" id="cost_date" class="form-control">
            </div>

            <div class="mb-3 col-md-2">
                <input type="text" name="comments[]" id="cost_comments" class="form-control" />
            </div>
        </div>


        <div class="mb-3 col-md-12">
            <label for="total-additionammount">Total Addition Ammount</label>
            <input type="text" name="total-additionammount" id="total-additionammount" class="form-control" />
        </div>




        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-front.card>
