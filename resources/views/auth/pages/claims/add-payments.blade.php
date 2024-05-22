 <!-- Modal for Adding Payment -->
 <div class="modal fade" id="addPaymentModal" tabindex="-1" aria-labelledby="addPaymentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addPaymentModalLabel">Add Payment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Add Payment Form -->
                <form action="{{ route('payments.store') }}" method="POST">
                    @csrf
                    @method('POST')
                    <input type="hidden" name="claim_id" value="{{ $data->id }}">
                    <div class="mb-3">
                        <label for="payment_method" class="form-label">Payment Method</label>
                        <input type="text" class="form-control @error('payment_method') is-invalid @enderror" id="payment_method" name="payment_method" required>
                        @error('payment_method')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="amount" class="form-label">Amount</label>
                        <input type="text" class="form-control @error('amount') is-invalid @enderror" id="amount" name="amount" required>
                        @error('amount')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="comment" class="form-label">Comment</label>
                        <textarea class="form-control @error('comment') is-invalid @enderror" id="comment" name="comment" rows="3" required></textarea>
                        @error('comment')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="date_paid" class="form-label">Date Paid</label>
                        <input type="date" class="form-control @error('date_paid') is-invalid @enderror" id="date_paid" name="date_paid" required>
                        @error('date_paid')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Add Payment</button>
                </form>

            </div>
        </div>
    </div>
</div>
