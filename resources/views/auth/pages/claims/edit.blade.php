{{-- <x-auth-layout pageTitle="Update Claim">

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <x-front.card>

                    <form action="{{ route('claims.update', $data['id']) }}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <!-- Debtor Person -->
                            <div class="mb-3 col-md-6">
                                <label for="debtor_person" class="form-label">Debtor Person</label>
                                <input type="text" class="form-control @error('debtor_person') is-invalid @enderror" name="debtor_person" value="{{ $data['debtor_person'] }}" required>
                                @error('debtor_person')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Portfolio -->
                            <div class="mb-3 col-md-6">
                                <label for="portfolio" class="form-label">Portfolio</label>
                                <input type="text" class="form-control @error('portfolio') is-invalid @enderror" name="portfolio" value="{{ $data['portfolio'] }}" required>
                                @error('portfolio')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <!-- Debtor Organization -->
                            <div class="mb-3 col-md-6">
                                <label for="debtor_organization" class="form-label">Debtor Organization</label>
                                <input type="text" class="form-control @error('debtor_organization') is-invalid @enderror" name="debtor_organization" value="{{ $data['debtor_organization'] }}" required>
                                @error('debtor_organization')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Type of Debt -->
                            <div class="mb-3 col-md-6">
                                <label for="type_of_debt" class="form-label">Type of Debt</label>
                                <input type="text" class="form-control @error('type_of_debt') is-invalid @enderror" name="type_of_debt" value="{{ $data['type_of_debt'] }}" required>
                                @error('type_of_debt')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <!-- Placement Amount -->
                            <div class="mb-3 col-md-6">
                                <label for="placement_amount" class="form-label">Placement Amount</label>
                                <input type="number" class="form-control @error('placement_amount') is-invalid @enderror" name="placement_amount" step="0.01" value="{{ $data['placement_amount'] }}" required>
                                @error('placement_amount')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Collector -->
                            <div class="mb-3 col-md-6">
                                <label for="collector" class="form-label">Collector</label>
                                <input type="text" class="form-control @error('collector') is-invalid @enderror" name="collector" value="{{ $data['collector'] }}" required>
                                @error('collector')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <!-- Interest Start Date -->
                            <div class="mb-3 col-md-6">
                                <label for="interest_start_date" class="form-label">Interest Start Date</label>
                                <input type="date" class="form-control @error('interest_start_date') is-invalid @enderror" name="interest_start_date" value="{{ $data['interest_start_date'] }}" required>
                                @error('interest_start_date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Pre-Judgment Interest -->
                            <div class="mb-3 col-md-6">
                                <label for="pre_judgment_interest" class="form-label">Pre-Judgment Interest</label>
                                <input type="number" class="form-control @error('pre_judgment_interest') is-invalid @enderror" name="pre_judgment_interest" step="0.01" value="{{ $data['pre_judgment_interest'] }}" required>
                                @error('pre_judgment_interest')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <!-- Post-Judgment Interest -->
                            <div class="mb-3 col-md-6">
                                <label for="post_judgment_interest" class="form-label">Post-Judgment Interest</label>
                                <input type="number" class="form-control @error('post_judgment_interest') is-invalid @enderror" name="post_judgment_interest" step="0.01" value="{{ $data['post_judgment_interest'] }}" required>
                                @error('post_judgment_interest')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Client -->
                            <div class="mb-3 col-md-6">
                                <label for="client" class="form-label">Client</label>
                                <input type="text" class="form-control @error('client') is-invalid @enderror" name="client" value="{{ $data['client'] }}" required>
                                @error('client')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <!-- Creditor -->
                            <div class="mb-3 col-md-6">
                                <label for="creditor" class="form-label">Creditor</label>
                                <input type="text" class="form-control @error('creditor') is-invalid @enderror" name="creditor" value="{{ $data['creditor'] }}" required>
                                @error('creditor')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Claim Number -->
                            <div class="mb-3 col-md-6">
                                <label for="claim_number" class="form-label">Claim Number</label>
                                <input type="text" class="form-control @error('claim_number') is-invalid @enderror" name="claim_number" value="{{ $data['claim_number'] }}" required>
                                @error('claim_number')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <!-- Date Assigned -->
                            <div class="mb-3 col-md-6">
                                <label for="date_assigned" class="form-label">Date Assigned</label>
                                <input type="date" class="form-control @error('date_assigned') is-invalid @enderror" name="date_assigned" value="{{ $data['date_assigned'] }}" required>
                                @error('date_assigned')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Status -->
                            <div class="mb-3 col-md-6">
                                <label for="status" class="form-label">Status</label>
                                <input type="text" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ $data['status'] }}" required>
                                @error('status')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <!-- Method Contingency -->
                            <div class="mb-3 col-md-6">
                                <label for="method_contingency" class="form-label">Method Contingency</label>
                                <input type="text" class="form-control @error('method_contingency') is-invalid @enderror" name="method_contingency" value="{{ $data['method_contingency'] }}" required>
                                @error('method_contingency')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Remarks -->
                            <div class="mb-3 col-md-6">
                                <label for="remarks" class="form-label">Remarks</label>
                                <textarea class="form-control @error('remarks') is-invalid @enderror" name="remarks" required>{{ $data['remarks'] }}</textarea>
                                @error('remarks')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Update Claim</button>
                    </form>


                </x-front.card>

            </div>
        </div>
    </div>
</x-auth-layout> --}}
