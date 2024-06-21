<x-auth-layout pageTitle="Create Payment">
    <a href="{{ route('claims.show', $claimId) }}" title="View claims details"
    class="btn btn-sm btn-outline-info">
   Back To Claim Detail
</a>

    <x-front.card>
        <a href="{{ route('claims.show', $claimId) }}" title="View claims details"
                class="btn btn-outline-info">
               Back To Claim Detail
            </a>
        <div class="container">


            <form action="{{ route('payments.store') }}" method="post">
                @csrf
                <input type="hidden" name="claim_id" value="{{ $claimId }}">

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="payment_method">Payment Method </label>
                        <select name="payment_method" class="form-control">
                            <option value="">Select Payment Method</option>
                            @foreach (['Cash', 'Check', 'Credit Card', 'Direct Debit', 'Money Order', 'Cashier\'s Check', 'Government Check', 'Garnishment'] as $method)
                                <option value="{{ $method }}">{{ $method }}</option>
                            @endforeach
                        </select>
                        @error('payment_method')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for="amount">Amount <span class="text-danger">*</span></label>
                        <input type="number" name="amount" class="form-control">
                        @error('amount')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="comment">Comment</label>
                        <input type="text" name="comment" class="form-control">
                        @error('comment')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for="date_paid">Date Paid <span class="text-danger">*</span></label>
                        <input type="date" name="date_paid" class="form-control">
                        @error('date_paid')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="category">Category</label>
                        <select name="category" class="form-control">
                            <option value="">Select Category</option>
                            <option value="(Not Specified)">(Not Specified)</option>
                            <option value="Adjustment">Adjustment</option>
                            <option value="Balance">Balance</option>
                            <option value="Cost">Cost</option>
                            <option value="Non-Chargeable">Non-Chargeable</option>
                            <option value="Original Amount">Original Amount</option>
                            <option value="Payment">Payment</option>
                            <option value="Rate Change Post-judgment">Rate Change Post-judgment</option>
                            <option value="Rate Change Pre-judgment">Rate Change Pre-judgment</option>
                        </select>
                        @error('category')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for="debtor_claim_number">Debtor Claim Number</label>
                        <input type="text" name="debtor_claim_number" class="form-control">
                        @error('debtor_claim_number')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="client_name">Client Name</label>
                        <input type="text" name="client_name" class="form-control">
                        @error('client_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for="payment_type">Payment Type</label>
                        <select name="payment_type" class="form-control">
                            <option value="">Select Payment Type</option>
                            <option value="(All)">All</option>
                            <option value="Cash payment">Cash payment</option>
                            <option value="Cashier's check payment">Cashier's check payment</option>
                            <option value="Check payment (hold)">Check payment (hold)</option>
                            <option value="Check payment">Check payment</option>
                            <option value="Credit agency payment">Credit agency payment</option>
                            <option value="DIRECT PAYMENT TO CLIENT">DIRECT PAYMENT TO CLIENT</option>
                            <option value="Garnishment/levy">Garnishment/levy</option>
                            <option value="Money order payment">Money order payment</option>
                            <option value="Payment Direct to Client">Payment Direct to Client</option>
                            <option value="Payment made to creditor (hold)">Payment made to creditor (hold)</option>
                            <option value="Payment made to creditor">Payment made to creditor</option>
                            <option value="Payments, post-judgment">Payments, post-judgment</option>
                            <option value="Payments, pre-judgment">Payments, pre-judgment</option>
                            <option value="Settlement of balance">Settlement of balance</option>
                            <option value="Third-party cash">Third-party cash</option>
                            <option value="Third-party check (hold)">Third-party check (hold)</option>
                            <option value="Third-party check">Third-party check</option>
                        </select>
                        @error('payment_type')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="paid_by">Paid By</label>
                        <input type="text" name="paid_by" class="form-control">
                        @error('paid_by')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for="paid_to">Paid To</label>
                        <input type="text" name="paid_to" class="form-control">
                        @error('paid_to')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="final_payment">Final Payment</label>
                        <input type="text" name="final_payment" class="form-control">
                        @error('final_payment')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group mt-3 text-center">
                    <button type="submit" class="btn btn-primary">Create Payment</button>
                </div>
            </form>

        </div>


    </x-front.card>
</x-auth-layout>
