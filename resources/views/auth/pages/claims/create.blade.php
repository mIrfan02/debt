<x-auth-layout pageTitle="Create Claim">

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12 mx-auto">
                {{-- <div class="row">
                    <div class="col-md-12 mx-auto"> --}}

                <x-front.card>

                    @php

                        if ($debtorId != null) {
                            $debtor = \App\Models\Debtor::findOrFail($debtorId);
                        }
                    @endphp

                        <a href="{{ route('claims.index') }}" class="btn btn-primary mb-3">Back to claims</a>

                    <form action="{{ route('claims.store') }}" method="post">
                        @csrf

                        <input type="hidden" name="debtor_id" id="debtor_id" class="form-control"
                            value="{{ $debtorId }}">

                        <!-- Debtor Person -->
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                @if ($debtorId != null)
                                    <label for="debtor_person" class="form-label">Debtor Person <span
                                            class="text-danger">*</span></label>
                                    <input type="text"
                                        class="form-control @error('debtor_person') is-invalid @enderror"
                                        name="debtor_person"
                                        value="{{ old('debtor_person') }} {{ isset($debtor->name) ? $debtor->name : '' }}">

                                    @error('debtor_person')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                @else
                                    <label for="debtor_person" class="form-label">Debtor Person <span
                                            class="text-danger">*</span></label>

                                    <select class="form-control @error('debtor_person') is-invalid @enderror"
                                        name="debtor_person">
                                        <option value="">Select Debtor Person</option>

                                        @foreach ($debtorInfo as $debtor)
                                            <option value="{{ $debtor['id'] }}"
                                                {{ old('debtor_person') == $debtor['name'] ? 'selected' : '' }}>
                                                {{ $debtor['name'] }}
                                            </option>
                                        @endforeach
                                    </select>

                                    @error('debtor_person')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror



                                @endif
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="portfolio" class="form-label">Portfolio</label>
                                <input type="text" class="form-control @error('portfolio') is-invalid @enderror"
                                    name="portfolio" value="{{ old('portfolio') }}" required>
                                @error('portfolio')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Debtor Organization -->
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="debtor_organization" class="form-label">Debtor Organization</label>
                                <input type="text"
                                    class="form-control @error('debtor_organization') is-invalid @enderror"
                                    name="debtor_organization"
                                    value="{{ old('debtor_organization') }} {{ $debtor->organization }}" required>
                                @error('debtor_organization')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="type_of_debt" class="form-label">Type of Debt</label>
                                <select name="type_of_debt" id="type_of_debt"
                                    class="form-control @error('type_of_debt') is-invalid @enderror" required>
                                    <option value="">Select Type of Debt</option>
                                    <option value="Not Assigned">Not Assigned</option>
                                    <option value="Ambulance">Ambulance</option>
                                    <option value="Auto lease">Auto lease</option>
                                    <option value="Auto loan">Auto loan</option>
                                    <option value="Car loan">Car loan</option>
                                    <option value="Charge card">Charge card</option>
                                    <option value="Child support">Child support</option>
                                    <option value="Commercial">Commercial</option>
                                    <option value="Consumer">Consumer</option>
                                    <option value="Credit card">Credit card</option>
                                    <option value="Dental">Dental</option>
                                    <option value="Doctor">Doctor</option>
                                    <option value="Home loan">Home loan</option>
                                    <option value="Hospital">Hospital</option>
                                    <option value="Legal services">Legal services</option>
                                    <option value="Loan">Loan</option>
                                    <option value="Medical">Medical</option>
                                    <option value="Rent">Rent</option>
                                    <option value="Secured loan">Secured loan</option>
                                    <option value="Services rendered">Services rendered</option>
                                    <option value="Spousal support">Spousal support</option>
                                    <option value="Student loan">Student loan</option>
                                    <option value="Unsecured loan">Unsecured loan</option>
                                    <option value="Utility">Utility</option>
                                </select>
                                @error('type_of_debt')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                        <!-- Placement Amount -->
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="placement_amount" class="form-label">Placement Amount <span
                                        class="text-danger">*</span></label>
                                <input type="number"
                                    class="form-control @error('placement_amount') is-invalid @enderror"
                                    name="placement_amount" step="0.01" value="{{ old('placement_amount') }}"
                                    required>
                                @error('placement_amount')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="collector" class="form-label">Collector</label>
                                <input type="text" class="form-control @error('collector') is-invalid @enderror"
                                    name="collector" value="{{ old('collector') }}" required>
                                @error('collector')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Interest Start Date and Pre-Judgment Interest -->
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="interest_start_date" class="form-label">Interest Start Date <span
                                        class="text-danger">*</span></label>
                                <input type="date"
                                    class="form-control @error('interest_start_date') is-invalid @enderror"
                                    name="interest_start_date" value="{{ old('interest_start_date') }}" required>
                                @error('interest_start_date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="pre_judgment_interest" class="form-label">Pre-Judgment Interest</label>
                                <input type="number"
                                    class="form-control @error('pre_judgment_interest') is-invalid @enderror"
                                    name="pre_judgment_interest" step="0.01"
                                    value="{{ old('pre_judgment_interest') }}" required>
                                @error('pre_judgment_interest')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Post-Judgment Interest and Client -->
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="post_judgment_interest" class="form-label">Post-Judgment Interest</label>
                                <input type="number"
                                    class="form-control @error('post_judgment_interest') is-invalid @enderror"
                                    name="post_judgment_interest" step="0.01"
                                    value="{{ old('post_judgment_interest') }}" required>
                                @error('post_judgment_interest')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="client_id" class="form-label">Client <span
                                        class="text-danger">*</span></label>
                                <select name="client_id" id="client_id"
                                    class="form-control @error('client_id') is-invalid @enderror" required>
                                    <option value="">Select Client</option>
                                    @foreach ($clients as $client)
                                        <option value="{{ $client->id }}">{{ $client->person }}</option>
                                    @endforeach
                                </select>
                                @error('client_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                        <!-- Creditor and Claim Number -->
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="creditor" class="form-label">Creditor</label>
                                <input type="text" class="form-control @error('creditor') is-invalid @enderror"
                                    name="creditor" value="{{ old('creditor') }}" required>
                                @error('creditor')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>


                            {{-- <div class="mb-3 col-md-6">
                                <label for="claim_number" class="form-label">Claim Number</label>
                                <input type="text"
                                    class="form-control @error('claim_number') is-invalid @enderror"
                                    name="claim_number"
                                    value="{{ isset($data['claim_number']) ? $data['claim_number'] : old('claim_number') }}"
                                    required>
                                @error('claim_number')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div> --}}


                            <div class="mb-3 col-md-6">
                                <label for="claim_number" class="form-label">Claim Number</label>
                                @php
                                    // Generate the claim number based on the latest record in the database
                                    $latestRecord = app\Models\Claim::latest('claim_number')->first();

                                    if ($latestRecord) {
                                        $lastClaimNumber = intval(substr($latestRecord->claim_number, -2));
                                        $nextClaimNumber = $lastClaimNumber + 1 > 9 ? 1 : $lastClaimNumber + 1;

                                        $lastMiddlePart = intval(substr($latestRecord->claim_number, 5, 4));
                                        $nextMiddlePart = $lastMiddlePart;

                                        if ($nextClaimNumber === 1) {
                                            // If the last part resets to 1, increment the middle part and reset the last part to 1
                                            $nextMiddlePart += 1;
                                        }

                                        // Format the claim number with exactly four digits in the middle part
                                        $generatedClaimNumber = sprintf(
                                            '%s-%04d-%02d',
                                            now()->year,
                                            $nextMiddlePart,
                                            $nextClaimNumber,
                                        );
                                    } else {
                                        // If there are no existing records, start with 1 and middle part as 0
                                        $generatedClaimNumber = sprintf('%s-%04d-%02d', now()->year, 0, 1);
                                    }

                                    // Replace double dash with a single dash
                                    $generatedClaimNumber = str_replace('--', '-', $generatedClaimNumber);
                                    // @dd($generatedClaimNumber);
                                @endphp



                                <input type="text"
                                    class="form-control @error('claim_number') is-invalid @enderror"
                                    name="claim_number" value="{{ $generatedClaimNumber ?? old('claim_number') }}"
                                    required readonly>
                                @error('claim_number')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                            </div>



                        </div>

                        <!-- Date Assigned and Status -->
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="date_assigned" class="form-label">Date Assigned</label>
                                <input type="date"
                                    class="form-control @error('date_assigned') is-invalid @enderror"
                                    name="date_assigned" value="{{ old('date_assigned') }}" required>
                                @error('date_assigned')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="status" class="form-label">Status</label>
                                <select name="status" id="status"
                                    class="form-control @error('status') is-invalid @enderror" required>
                                    <option value="">Select Status</option>
                                    <option value="A. Claim received">A. Claim received</option>
                                    <option value="B. Demand letter sent">B. Demand letter sent</option>
                                    <option value="C. Payments received">C. Payments received</option>
                                    <option value="C1. Receiving payments on note">C1. Receiving payments on note
                                    </option>
                                    <option value="Case Suspend">Case Suspend</option>
                                    <option value="E. Complaint served">E. Complaint served</option>
                                    <option value="F. Answer filed">F. Answer filed</option>
                                    <option value="F1. Discovery">F1. Discovery</option>
                                    <option value="First Demand Letter">First Demand Letter</option>
                                    <option value="G. Judgment entered">G. Judgment entered</option>
                                    <option value="I. Levy underway">I. Levy underway</option>
                                    <option value="J. Garnishment">J. Garnishment</option>
                                    <option value="L. Case closed">L. Case closed</option>
                                    <option value="M. Bankruptcy Chapter 7">M. Bankruptcy Chapter 7</option>
                                    <option value="Q. Opened File">Q. Opened File</option>
                                </select>
                                @error('status')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                        <!-- Method Contingency and Remarks -->
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="method_contingency" class="form-label">Method Contingency <span class="text-danger">*</span></label>
                                <select name="method_contingency" id="contingency_method" class="form-control">
                                    <option value="none">None</option>
                                    <option value="sliding_scale">Sliding scale</option>
                                    <option value="fixed_rate">Fixed rate</option>
                                    <option value="flat_fee">Flat Fee</option>
                                    {{-- <option value="full_amount">Full Amount </option>
                                    <option value="hourly_rate">Hourly Rate </option> --}}
                                </select>
                                @error('method_contingency')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>






                            <div class="mb-3 col-md-6">
                                <label for="remarks" class="form-label">Remarks</label>
                                <textarea class="form-control @error('remarks') is-invalid @enderror" name="remarks" required>{{ old('remarks') }}</textarea>
                                @error('remarks')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Create Claim</button>
                    </form>



                </x-front.card>
            </div>
        </div>
    </div>
</x-auth-layout>
