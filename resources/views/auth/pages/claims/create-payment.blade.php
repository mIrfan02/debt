 <!-- Modal -->
 <div class="modal fade" id="createPaymentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Payment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('payments.store') }}" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="payment_method">Payment Method</label>
                        <input type="text" name="payment_method" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="amount">Amount</label>
                        <input type="text" name="amount" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="comment">Comment</label>
                        <input type="text" name="comment" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="date_paid">Date Paid</label>
                        <input type="text" name="date_paid" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="category">Category</label>
                        <input type="text" name="category" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="debtor_claim_number">Debtor Claim Number</label>
                        <input type="text" name="debtor_claim_number" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="client_name">Client Name</label>
                        <input type="text" name="client_name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="payment_type">Payment Type</label>
                        <input type="text" name="payment_type" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="paid_by">Paid By</label>
                        <input type="text" name="paid_by" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="paid_to">Paid To</label>
                        <input type="text" name="paid_to" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="final_payment">Final Payment</label>
                        <input type="text" name="final_payment" class="form-control">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Create Payment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
