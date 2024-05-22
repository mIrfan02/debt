 <!-- Modal for Adding cost -->
 <div class="modal fade" id="addcostModal" tabindex="-1" aria-labelledby="addcostModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="addcostModalLabel">Add cost</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <!-- Add cost Form -->
                 <form action="{{ route('costs.store') }}" method="POST">
                     @csrf
                     @method('POST')
                     <input type="hidden" name="claim_id" value="{{ $data->id }}">
                     <div class="mb-3">
                         <label for="cost_method" class="form-label">cost Method</label>
                         <input type="text" class="form-control @error('cost') is-invalid @enderror" id="cost"
                             name="cost" required>
                         @error('cost')
                             <div class="invalid-feedback">{{ $message }}</div>
                         @enderror
                     </div>
                     <div class="mb-3">
                         <label for="amount" class="form-label">Amount</label>
                         <input type="text" class="form-control @error('amount') is-invalid @enderror" id="amount"
                             name="amount" required>
                         @error('amount')
                             <div class="invalid-feedback">{{ $message }}</div>
                         @enderror
                     </div>
                     <div class="mb-3">
                         <label for="comment" class="form-label">Comment</label>
                         <textarea class="form-control @error('comment') is-invalid @enderror" id="comment" name="comment" rows="3"
                             required></textarea>
                         @error('comment')
                             <div class="invalid-feedback">{{ $message }}</div>
                         @enderror
                     </div>
                     <div class="mb-3">
                         <label for="date_incurred" class="form-label">Date Paid</label>
                         <input type="date" class="form-control @error('date_incurred') is-invalid @enderror"
                             id="date_incurred" name="date_incurred" required>
                         @error('date_incurred')
                             <div class="invalid-feedback">{{ $message }}</div>
                         @enderror
                     </div>

                     <button type="submit" class="btn btn-primary">Add cost</button>
                 </form>

             </div>
         </div>
     </div>
 </div>
