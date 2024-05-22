<x-auth-layout pageTitle="Create Agreement">
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <x-front.card>

                    <div class="d-flex justify-content-end">
                        <a href="{{ route('agreements.index') }}">
                            <button type="button" class="btn btn-info mt-2">All Agreements</button>
                        </a>
                    </div>

                    <form method="POST" action="{{ route('agreements.store') }}">
                        @csrf

                        <input type="hidden" name="debtor_id" value="{{ $debtorId }}">
                        <label for="Agreement" style="font-weight: bold;" class="mb-3">Agreement:</label>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="status">Status:</label>
                                    <input type="text" class="form-control" name="status" id="status" placeholder="Enter status">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="type">Type:</label>
                                    <input type="text" class="form-control" name="type" id="type" placeholder="Enter type">
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="reason">Reason:</label>
                                    <input type="text" class="form-control" name="reason" id="reason" placeholder="Enter reason">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class form-group">
                                    <label for="authority">Authority:</label>
                                    <input type="text" class="form-control" name="authority" id="authority" placeholder="Enter authority">
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="amount">Amount:</label>
                                    <input type="number" class="form-control" name="amount" id="amount" placeholder="Enter amount">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="interest_rate">Interest Rate:</label>
                                    <input type="number" class="form-control" name="interest_rate" id="interest_rate" placeholder="Enter interest rate">
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="interest_amount">Interest Amount:</label>
                                    <input type="number" class="form-control" name="interest_amount" id="interest_amount" placeholder="Enter interest amount">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="total_to_pay">Total to Pay:</label>
                                    <input type="number" class="form-control" name="total_to_pay" id="total_to_pay" placeholder="Enter total to pay">
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="agreement_date">Agreement Date:</label>
                                    <input type="date" class="form-control" name="agreement_date" id="agreement_date" placeholder="Select agreement date">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="interest_from">Interest From:</label>
                                    <input type="date" class="form-control" name="interest_from" id="interest_from" placeholder="Select interest from date">
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="last_pay">Last Pay:</label>
                                    <input type="date" class="form-control" name="last_pay" id="last_pay" placeholder="Select last pay date">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="next_pay">Next Pay:</label>
                                    <input type="date" class="form-control" name="next_pay" id="next_pay" placeholder="Select next pay date">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="remarks">Remarks:</label>
                            <textarea class="form-control" name="remarks" id="remarks" placeholder="Enter remarks"></textarea>
                        </div>


                        <label for="Agreement_Stage:" style="font-weight: bold;" class="mt-3">Agreement Stage:</label>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="stage">Stage:</label>
                                    <input type="text" class="form-control" name="stage" id="stage" placeholder="Enter stage">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="pay_freq">Pay Frequency:</label>
                                    <input type="text" class="form-control" name="pay_freq" id="pay_freq" placeholder="Enter pay frequency">
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="no_of_pay">Number of Payments:</label>
                                    <input type="number" class="form-control" name="no_of_pay" id="no_of_pay" placeholder="Enter number of payments">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="pay_amount">Payment Amount:</label>
                                    <input type="number" step="0.01" class="form-control" name="pay_amount" id="pay_amount" placeholder="Enter payment amount">
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="stage_total">Stage Total:</label>
                                    <input type="number" step="0.01" class="form-control" name="stage_total" id="stage_total" placeholder="Enter stage total">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="first_pay_date">First Payment Date:</label>
                                    <input type="date" class="form-control" name="first_pay_date" id="first_pay_date">
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="last_pay_date">Last Payment Date:</label>
                                    <input type="date" class="form-control" name="last_pay_date" id="last_pay_date">
                                </div>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="remarks">Remarks:</label>
                                <textarea class="form-control" name="stage_remarks" id="remarks" placeholder="Enter remarks"></textarea>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary mt-3">Save</button>
                        </div>
                    </form>
                </x-front.card>
            </div>
        </div>
    </div>
</x-auth-layout>
