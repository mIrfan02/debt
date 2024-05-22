<x-auth-layout pageTitle="Debtor Details">


    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <x-front.card>
                    <h3 style="text-decoration:underline;"> Personal Info</h3>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for=""><strong>Name:</strong> {{ $data->name }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for=""><strong>Date of Birth:</strong> {{ $data->dob ?? 'N/A' }}</label>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for=""><strong>Social Security Number (SSN):</strong>
                                {{ $data->ssn ?? 'N/A' }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for=""><strong>Position:</strong> {{ $data->position ?? 'N/A' }}</label>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for=""><strong>Company:</strong> {{ $data->company ?? 'N/A' }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for=""><strong>Driver License 1:</strong>
                                {{ $data->driver_license1 ?? 'N/A' }}</label>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for=""><strong>Organization:</strong>
                                {{ $data->organization ?? 'N/A' }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for=""><strong>Driver License 2:</strong>
                                {{ $data->driver_license2 ?? 'N/A' }}</label>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for=""><strong>Email:</strong> {{ $data->email ?? 'N/A' }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for=""><strong>Phone:</strong> {{ $data->phone ?? 'N/A' }}</label>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for=""><strong>Fax:</strong> {{ $data->fax ?? 'N/A' }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for=""><strong>Alias 1:</strong> {{ $data->alias1 ?? 'N/A' }}</label>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for=""><strong>Cell:</strong> {{ $data->cell ?? 'N/A' }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for=""><strong>Alias 2:</strong> {{ $data->alias2 ?? 'N/A' }}</label>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for=""><strong>Client:</strong> {{ $data->client->person ?? 'N/A' }}</label>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for=""><strong>Remarks:</strong> {{ $data->remarks ?? 'N/A' }}</label>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for=""><strong>Status:</strong>
                                @if ($data->status == 1)
                                    Active
                                @elseif ($data->status == 0)
                                    Inactive
                                @else
                                    N/A
                                @endif
                            </label>
                        </div>
                    </div>
                    @php
                        $index = 1;
                    @endphp
                    @foreach ($data->addresses as $address)
                        <h3 style="text-decoration:underline;"> Address # {{ $index }}</h3>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for=""><strong>Type:</strong> {{ $address->type }}</label>
                            </div>
                            <div class="col-md-6">
                                <label for=""><strong>Status:</strong>
                                    @if ($address->status == 1)
                                        Active
                                    @elseif ($address->status == 0)
                                        Inactive
                                    @else
                                        N/A
                                    @endif
                                </label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for=""><strong>Street:</strong> {{ $address->street }}</label>
                            </div>
                            <div class="col-md-6">
                                <label for=""><strong>City:</strong> {{ $address->city }}</label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for=""><strong>State:</strong> {{ $address->state }}</label>
                            </div>
                            <div class="col-md-6">
                                <label for=""><strong>Zip:</strong> {{ $address->zip }}</label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for=""><strong>Country:</strong> {{ $address->country }}</label>
                            </div>
                            <div class="col-md-6">
                                <label for=""><strong>Remarks:</strong>
                                    {{ $address->remarks ?? 'N/A' }}</label>
                            </div>
                        </div>

                        @php
                            $index++;
                        @endphp
                    @endforeach

                    @foreach ($data->banks as $bank)
                        <h3 style="text-decoration:underline;">Bank Account # {{ $loop->iteration }}</h3>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for=""><strong>Bank Name:</strong> {{ $bank->bank_name }}</label>
                            </div>
                            <div class="col-md-6">
                                <label for=""><strong>Branch Name:</strong> {{ $bank->branch_name }}</label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for=""><strong>Bank Code:</strong> {{ $bank->bank_code }}</label>
                            </div>
                            <div class="col-md-6">
                                <label for=""><strong>Bank Address:</strong> {{ $bank->address }}</label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for=""><strong>Bank Account Name:</strong>
                                    {{ $bank->account_name }}</label>
                            </div>
                            <div class="col-md-6">
                                <label for=""><strong>Bank Account Number:</strong>
                                    {{ $bank->account_number }}</label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for=""><strong>Bank City:</strong> {{ $bank->city }}</label>
                            </div>
                            <div class="col-md-6">
                                <label for=""><strong>Bank State:</strong> {{ $bank->state }}</label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for=""><strong>Bank Zip:</strong> {{ $bank->zip }}</label>
                            </div>
                            <div class="col-md-6">
                                <label for=""><strong>Bank Department:</strong> {{ $bank->department }}</label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for=""><strong>Bank Country:</strong> {{ $bank->country }}</label>
                            </div>
                            <div class="col-md-6">
                                <label for=""><strong>Bank Contact:</strong> {{ $bank->contact }}</label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for=""><strong>Bank Phone:</strong> {{ $bank->phone }}</label>
                            </div>
                            <div class="col-md-6">
                                <label for=""><strong>Bank Position:</strong> {{ $bank->position }}</label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for=""><strong>Bank Fax:</strong> {{ $bank->fax }}</label>
                            </div>
                            <div class="col-md-6">
                                <label for=""><strong>Bank Cell:</strong> {{ $bank->cell }}</label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for=""><strong>Bank Email:</strong> {{ $bank->email }}</label>
                            </div>
                            <div class="col-md-6">
                                <label for=""><strong>Bank Other:</strong> {{ $bank->other }}</label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for=""><strong>Bank Remarks:</strong> {{ $bank->remarks }}</label>
                            </div>
                        </div>
                    @endforeach

                    @foreach ($data->assets as $asset)
                        <h3 style="text-decoration: underline;">Assets # {{ $loop->iteration }} </h3>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for=""><strong>Asset Name:</strong> {{ $asset->name }}</label>
                            </div>
                            <div class="col-md-6">
                                <label for=""><strong>Asset Value:</strong> {{ $asset->value }}</label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for=""><strong>Asset Remarks:</strong> {{ $asset->remarks }}</label>
                            </div>
                        </div>
                    @endforeach


                    @foreach ($data->employments as $employment)
                        <h3 style="text-decoration: underline;">Employements # {{ $loop->iteration }}</h3>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for=""><strong>Employer:</strong>
                                    {{ $employment->employer ?? 'N/A' }}</label>
                            </div>
                            <div class="col-md-6">
                                <label for=""><strong>Employee Name:</strong>
                                    {{ $employment->employee_name ?? 'N/A' }}</label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for=""><strong>Position:</strong>
                                    {{ $employment->position ?? 'N/A' }}</label>
                            </div>
                            <div class="col-md-6">
                                <label for=""><strong>Address:</strong>
                                    {{ $employment->address ?? 'N/A' }}</label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for=""><strong>City:</strong> {{ $employment->city ?? 'N/A' }}</label>
                            </div>
                            <div class="col-md-6">
                                <label for=""><strong>State:</strong>
                                    {{ $employment->state ?? 'N/A' }}</label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for=""><strong>ZIP:</strong> {{ $employment->zip ?? 'N/A' }}</label>
                            </div>
                            <div class="col-md-6">
                                <label for=""><strong>Pay Amount:</strong>
                                    {{ $employment->pay_amount ?? 'N/A' }}</label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for=""><strong>Pay Period:</strong>
                                    {{ $employment->pay_period ?? 'N/A' }}</label>
                            </div>
                            <div class="col-md-6">
                                <label for=""><strong>Date Last Paid:</strong>
                                    {{ $employment->date_last_paid ?? 'N/A' }}</label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for=""><strong>Date Last Commenced:</strong>
                                    {{ $employment->date_last_commenced ?? 'N/A' }}</label>
                            </div>
                            <div class="col-md-6">
                                <label for=""><strong>Country:</strong>
                                    {{ $employment->country ?? 'N/A' }}</label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for=""><strong>Phone:</strong>
                                    {{ $employment->phone ?? 'N/A' }}</label>
                            </div>
                            <div class="col-md-6">
                                <label for=""><strong>Fax:</strong> {{ $employment->fax ?? 'N/A' }}</label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for=""><strong>Cell:</strong> {{ $employment->cell ?? 'N/A' }}</label>
                            </div>
                            <div class="col-md-6">
                                <label for=""><strong>Other:</strong>
                                    {{ $employment->other ?? 'N/A' }}</label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for=""><strong>Date Ceased:</strong>
                                    {{ $employment->date_ceased ?? 'N/A' }}</label>
                            </div>
                            <div class="col-md-6">
                                <label for=""><strong>Length of Service:</strong>
                                    {{ $employment->length_of_service ?? 'N/A' }}</label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for=""><strong>Remarks:</strong>
                                    {{ $employment->remarks ?? 'N/A' }}</label>
                            </div>
                        </div>
                    @endforeach

                </x-front.card>
            </div>
        </div>
    </div>

</x-auth-layout>
