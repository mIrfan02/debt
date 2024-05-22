<x-auth-layout pageTitle="Create Client">

    <x-front.card>
        <form action="{{ route('clients.store') }}" method="POST">
            @csrf

            <!-- Client Details -->
            <h4>Client Details</h4>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="person">Person:</label>
                    <input type="text" class="form-control" name="person" id="person">
                    @error('person')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="position">Position:</label>
                    <input type="text" class="form-control" name="position" id="position">
                    @error('position')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="client_number">Client Number:</label>
                    <input type="text" class="form-control" name="client_number" id="client_number">
                    @error('client_number')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="organization">Organization:</label>
                    <input type="text" class="form-control" name="organization" id="organization">
                    @error('organization')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="collector">Collector:</label>
                    <input type="text" class="form-control" name="collector" id="collector">
                    @error('collector')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class ="form-group col-md-6">
                    <label for="display_as">Display As:</label>
                    <input type="text" class="form-control" name="display_as" id="display_as">
                    @error('display_as')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" id="email">
                    @error('email')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="phone">Phone:</label>
                    <input type="tel" class="form-control" name="phone" id="phone">
                    @error('phone')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" name="address" id="address">
                    @error('address')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="cell">Cell:</label>
                    <input type="tel" class="form-control" name="cell" id="cell">
                    @error('cell')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="fax">Fax:</label>
                    <input type="tel" class="form-control" name="fax" id="fax">
                    @error('fax')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="city">City:</label>
                    <input type="text" class="form-control" name="city" id="city">
                    @error('city')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="state">State:</label>
                    <input type="text" class="form-control" name="state" id="state">
                    @error('state')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="zip">Zip:</label>
                    <input type="text" class="form-control" name="zip" id="zip">
                    @error('zip')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row mb-2">
                <div class="form-group col-md-6">
                    <label for="country">Country:</label>
                    <input type="text" class="form-control" name="country" id="country">
                    @error('country')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="remarks">Remarks:</label>
                    <textarea class="form-control" name="remarks" id="remarks"></textarea>
                    @error('remarks')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        <br>

            <hr>
                <!-- Creditor Details -->
                <h4>Creditor Details</h4>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="creditor">Creditor:</label>
                        <input type="text" class="form-control" name="creditor" id="creditor">
                        @error('creditor')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="creditor_number">Creditor Number:</label>
                        <input type="text" class="form-control" name="creditor_number" id="creditor_number">
                        @error('creditor_number')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="creditor_organization">Creditor Organization:</label>
                        <input type="text" class="form-control" name="creditor_organization" id="creditor_organization">
                        @error('creditor_organization')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="creditor_collector">Creditor Collector:</label>
                        <input type="text" class="form-control" name="creditor_collector" id="creditor_collector">
                        @error('creditor_collector')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="creditor_display_as">Creditor Display As:</label>
                        <input type="text" class="form-control" name="creditor_display_as" id="creditor_display_as">
                        @error('creditor_display_as')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="creditor_email">Creditor Email:</label>
                        <input type="email" class="form-control" name="creditor_email" id="creditor_email">
                        @error('creditor_email')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="creditor_phone">Creditor Phone:</label>
                        <input type="tel" class="form-control" name="creditor_phone" id="creditor_phone">
                        @error('creditor_phone')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="creditor_address">Creditor Address:</label>
                        <input type="text" class="form-control" name="creditor_address" id="creditor_address">
                        @error('creditor_address')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="creditor_cell">Creditor Cell:</label>
                        <input type="tel" class="form-control" name="creditor_cell" id="creditor_cell">
                        @error('creditor_cell')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="creditor_fax">Creditor Fax:</label>
                        <input type="tel" class="form-control" name="creditor_fax" id="creditor_fax">
                        @error('creditor_fax')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="creditor_city">Creditor City:</label>
                        <input type="text" class="form-control" name="creditor_city" id="creditor_city">
                        @error('creditor_city')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="creditor_state">Creditor State:</label>
                        <input type="text" class="form-control" name="creditor_state" id="creditor_state">
                        @error('creditor_state')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="creditor_zip">Creditor Zip:</label>
                        <input type="text" class="form-control" name="creditor_zip" id="creditor_zip">
                        @error('creditor_zip')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="creditor_country">Creditor Country:</label>
                        <input type="text" class="form-control" name="creditor_country" id="creditor_country">
                        @error('creditor_country')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="form-group col-md-12">
                        <label for="creditor_remarks">Creditor Remarks:</label>
                        <textarea class="form-control" name="creditor_remarks" id="creditor_remarks"></textarea>
                        @error('creditor_remarks')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                <hr>
                <!-- Original Details -->
                <h4>Original Details</h4>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="creditor_amount">Creditor Amount:</label>
                        <input type="number"  class="form-control" name="creditor_amount" id="creditor_amount">
                        @error('creditor_amount')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="creditor_open_date">Creditor Open Date:</label>
                        <input type="date" class="form-control" name="creditor_open_date" id="creditor_open_date">
                        @error('creditor_open_date')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="creditor_line_2">Creditor Line 2:</label>
                        <input type="text" class="form-control" name ="creditor_line_2" id="creditor_line_2">
                        @error('creditor_line_2')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="interest_amount">Interest Amount:</label>
                        <input type="number"  class="form-control" name="interest_amount" id="interest_amount">
                        @error('interest_amount')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="interest_date">Interest Date:</label>
                        <input type="date" class="form-control" name="interest_date" id="interest_date">
                        @error('interest_date')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class ="form-group col-md-6">
                        <label for="account_no">Account Number:</label>
                        <input type="text" class="form-control" name="account_no" id="account_no">
                        @error('account_no')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="form-group col-md-6">
                        <label for="suit_fee">Suit Fee:</label>
                        <input type="number"  class="form-control" name="suit_fee" id="suit_fee">
                        @error('suit_fee')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="date_stay_lifted">Date Stay Lifted:</label>
                        <input type="date" class="form-control" name="date_stay_lifted" id="date_stay_lifted">
                        @error('date_stay_lifted')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>



                <hr>
                <!-- Credit Bureau Details -->

                <h4>Bureau Details</h4>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="original_open_date">Original Open Date:</label>
                        <input type="date" class="form-control" name="original_open_date" id="original_open_date">
                        @error('original_open_date')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="delinquency_date">Delinquency Date:</label>
                        <input type="date" class="form-control" name="delinquency_date" id="delinquency_date">
                        @error('delinquency_date')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="terms_duration">Terms Duration:</label>
                        <input type="text" class="form-control" name="terms_duration" id="terms_duration">
                        @error('terms_duration')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="credit_limit">Credit Limit:</label>
                        <input type="text" class="form-control" name="credit_limit" id="credit_limit">
                        @error('credit_limit')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="payment_history">Payment History:</label>
                        <input type="text" class="form-control" name="payment_history" id="payment_history">
                        @error('payment_history')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="experian_code">Experian Code:</label>
                        <input type="text" class="form-control" name="experian_code" id="experian_code">
                        @error('experian_code')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="original_amount">Original Amount:</label>
                        <input type="number"  class="form-control" name="original_amount" id="original_amount">
                        @error('original_amount')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="amount_past_due">Amount Past Due:</label>
                        <input type="number"  class="form-control" name="amount_past_due" id="amount_past_due">
                        @error('amount_past_due')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="transUnion_code">TransUnion Code:</label>
                        <input type="text" class="form-control" name="transUnion_code" id="transUnion_code">
                        @error('transUnion_code')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="charge_off_amount">Charge Off Amount:</label>
                        <input type="number" class="form-control" name="charge_off_amount" id="charge_off_amount">
                        @error('charge_off_amount')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="billing_day_of_month">Billing Day of Month:</label>
                        <input type="text" class="form-control" name="billing_day_of_month" id="billing_day_of_month">
                        @error('billing_day_of_month')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="equifax_code">Equifax Code:</label>
                        <input type="text" class="form-control" name="equifax_code" id="equifax_code">
                        @error('equifax_code')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="monthly_payment">Monthly Payment:</label>
                        <input type="number"  class="form-control" name="monthly_payment" id="monthly_payment">
                        @error('monthly_payment')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="residence_code">Residence Code:</label>
                        <input type="text" class="form-control" name="residence_code" id="residence_code">
                        @error('residence_code')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <label for="invoice_code">Invoice Code:</label>
                        <input type="text" class="form-control" name="invoice_code" id="invoice_code">
                        @error('invoice_code')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div>
                     <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </div>
        </form>

    </x-front.card>
</x-auth-layout>
