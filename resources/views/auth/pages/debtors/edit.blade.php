<x-auth-layout pageTitle="Update Debtor details">
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <x-front.card>
                    <form method="POST" action="{{ route('debtors.update', $data->id) }}" novalidate>
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <label for="name" class="form-label">Full Name:</label>
                            <x-front.input-field type="text" name="name" id="name" place="Enter Full Name"
                                val="{{ $data->name }}" required="true">
                                Full Name:
                            </x-front.input-field>
                        </div>

                        <!-- Date of Birth -->
                        <div class="row">
                            <label for="dob" class="form-label">Date of Birth:</label>
                            <x-front.input-field type="date" name="dob" id="dob"
                                place="Enter Date of Birth" val="{{ $data->dob }}" required="true">
                                Date of Birth:
                            </x-front.input-field>
                        </div>

                        <!-- Social Security Number (SSN) -->
                        <div class="row">
                            <label for="ssn" class="form-label">Social Security Number (SSN):</label>
                            <x-front.input-field type="text" name="ssn" id="ssn" place="Enter SSN"
                                val="{{ $data->ssn }}" required="true">
                                Social Security Number (SSN):
                            </x-front.input-field>
                        </div>

                        <!-- Position -->
                        <div class="row">
                            <label for="position" class="form-label">Position:</label>
                            <x-front.input-field type="text" name="position" id="position" place="Enter Position"
                                val="{{ $data->position }}" required="true">
                                Position:
                            </x-front.input-field>
                        </div>

                        <!-- Company -->
                        <div class="row">
                            <label for="company" class="form-label">Company:</label>
                            <x-front.input-field type="text" name="company" id="company" place="Enter Company"
                                val="{{ $data->company }}" required="true">
                                Company:
                            </x-front.input-field>
                        </div>

                        <!-- Driver License 1 -->
                        <div class="row">
                            <label for="driver_license1" class="form-label">Driver License 1:</label>
                            <x-front.input-field type="text" name="driver_license1" id="driver_license1"
                                place="Enter Driver License 1" val="{{ $data->driver_license1 }}" required="true">
                                Driver License 1:
                            </x-front.input-field>
                        </div>

                        <!-- Organization -->
                        <div class="row">
                            <label for="organization" class="form-label">Organization:</label>
                            <x-front.input-field type="text" name="organization" id="organization"
                                place="Enter Organization" val="{{ $data->organization }}" required="true">
                                Organization:
                            </x-front.input-field>
                        </div>

                        <!-- Driver License 2 -->
                        <div class="row">
                            <label for="driver_license2" class="form-label">Driver License 2:</label>
                            <x-front.input-field type="text" name="driver_license2" id="driver_license2"
                                place="Enter Driver License 2" val="{{ $data->driver_license2 }}" required="">
                                Driver License 2:
                            </x-front.input-field>
                        </div>

                        <!-- Email -->
                        <div class="row">
                            <label for="email" class="form-label">Email:</label>
                            <x-front.input-field type="email" name="email" id="email" place="Enter Email"
                                val="{{ $data->email }}" required="">
                                Email:
                            </x-front.input-field>
                        </div>

                        <!-- Phone -->
                        <div class="row">
                            <label for="phone" class="form-label">Phone:</label>
                            <x-front.input-field type="tel" name="phone" id="phone" place="Enter Phone"
                                val="{{ $data->phone }}" required="">
                                Phone:
                            </x-front.input-field>
                        </div>

                        <!-- Fax -->
                        <div class="row">
                            <label for= "fax" class="form-label">Fax:</label>
                            <x-front.input-field type="tel" name="fax" id="fax" place="Enter Fax"
                                val="{{ $data->fax }}" required="">
                                Fax:
                            </x-front.input-field>
                        </div>

                        <!-- Alias 1 -->
                        <div class="row">
                            <label for="alias1" class="form-label">Alias 1:</label>
                            <x-front.input-field type="text" name="alias1" id="alias1" place="Enter Alias 1"
                                val="{{ $data->alias1 }}" required="">
                                Alias 1:
                            </x-front.input-field>
                        </div>

                        <!-- Cell -->
                        <div class="row">
                            <label for="cell" class="form-label">Cell:</label>
                            <x-front.input-field type="tel" name="cell" id="cell" place="Enter Cell"
                                val="{{ $data->cell }}" required="">
                                Cell:
                            </x-front.input-field>
                        </div>

                        <!-- Other -->
                        <div class="row">
                            <label for="other" class="form-label">Other:</label>
                            <x-front.input-field type="text" name="other" id="other" place="Enter Other"
                                val="{{ $data->other }}" required="">
                                Other:
                            </x-front.input-field>
                        </div>

                        <!-- Alias 2 -->
                        <div class="row">
                            <label for="alias2" class="form-label">Alias 2:</label>
                            <x-front.input-field type="text" name="alias2" id="alias2" place="Enter Alias 2"
                                val="{{ $data->alias2 }}" required="">
                                Alias 2:
                            </x-front.input-field>
                        </div>

                        <!-- Remarks -->
                        <div class="row">
                            <label for="remarks" class="form-label">Remarks:</label>
                            <div class="col-md-12 mb-3">
                                <textarea name="remarks" class="form-control">{{ $data->remarks }}</textarea>
                            </div>
                        </div>

                        <!-- Status -->
                        <div class="row">
                            <label for="status" class="form-label">Status:</label>
                            <div class="col-md-12 mb-3">
                                <select name="status" class="form-control" required>
                                    <option value="1" {{ $data->status == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ $data->status == 0 ? 'selected' : '' }}>Inactive
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <label for="status" class="form-label">Clients:</label>
                            <div class="col-md-12 mb-3">
                                <select name="client_id" class="form-control" required>
                                    <option value="">Select</option>
                                    @if (isset($clients))
                                        @foreach ($clients as $client)
                                            <option value="{{ $client->id }}"
                                                {{ $data->client->id == $data->client_id ? 'selected' : '' }}>
                                                {{ $client->person }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>



                        <div id="addressFieldsContainer">
                            @foreach ($data->addresses as $address)
                                <x-front.input-field type="hidden" name="addresses[{{ $address->id }}][id]"
                                    id="id_{{ $address->id }}" place="" val="{{ $address->id }}"
                                    required="true" />

                                <div class="address-field">
                                    <div class="row">
                                        <label for="street_{{ $address->id }}" class="form-label">Street:</label>
                                        <x-front.input-field type="text"
                                            name="addresses[{{ $address->id }}][street]"
                                            id="street_{{ $address->id }}" place="Enter Street"
                                            val="{{ $address->street }}" required="true" />
                                    </div>

                                    <!-- City -->
                                    <div class="row">
                                        <label for="city_{{ $address->id }}" class="form-label">City:</label>
                                        <x-front.input-field type="text"
                                            name="addresses[{{ $address->id }}][city]"
                                            id="city_{{ $address->id }}" place="Enter City"
                                            val="{{ $address->city }}" required="true" />
                                    </div>

                                    <!-- Country -->
                                    <div class="row">
                                        <label for="country_{{ $address->id }}" class="form-label">Country:</label>
                                        <x-front.input-field type="text"
                                            name="addresses[{{ $address->id }}][country]"
                                            id="country_{{ $address->id }}" place="Enter Country"
                                            val="{{ $address->country }}" required="true">
                                            Country:
                                        </x-front.input-field>
                                    </div>

                                    <!-- State -->
                                    <div class="row">
                                        <label for="state_{{ $address->id }}" class="form-label">State:</label>
                                        <x-front.input-field type="text"
                                            name="addresses[{{ $address->id }}][state]"
                                            id="state_{{ $address->id }}" place="Enter State"
                                            val="{{ $address->state }}" required="true">
                                            State:
                                        </x-front.input-field>
                                    </div>

                                    <!-- ZIP Code -->
                                    <div class="row">
                                        <label for="zip_{{ $address->id }}" class="form-label">ZIP Code:</label>
                                        <x-front.input-field type="text"
                                            name="addresses[{{ $address->id }}][zip]" id="zip_{{ $address->id }}"
                                            place="Enter ZIP Code" val="{{ $address->zip }}" required="true">
                                            ZIP Code:
                                        </x-front.input-field>
                                    </div>

                                    <!-- Type -->
                                    <div class="row">
                                        <label for="type_{{ $address->id }}" class="form-label">Type:</label>
                                        <x-front.input-field type="text"
                                            name="addresses[{{ $address->id }}][type]"
                                            id="type_{{ $address->id }}" place="Enter Type"
                                            val="{{ $address->type }}" required="">
                                            Type:
                                        </x-front.input-field>
                                    </div>

                                    <!-- Status -->
                                    <div class="row">
                                        <label for="status_{{ $address->id }}" class="form-label">Status:</label>
                                        <select name="addresses[{{ $address->id }}][status]" class="form-control"
                                            required="">
                                            <option value="1" {{ $address->status == 1 ? 'selected' : '' }}>
                                                Active</option>
                                            <option value="0" {{ $address->status == 0 ? 'selected' : '' }}>
                                                Inactive</option>
                                        </select>
                                    </div>

                                    <!-- Remarks -->
                                    <div class="row">
                                        <label for="remarks_{{ $address->id }}" class="form-label">Remarks:</label>
                                        <x-front.input-field type="text"
                                            name="addresses[{{ $address->id }}][remarks]"
                                            id="remarks_{{ $address->id }}" place="Enter Remarks"
                                            val="{{ $address->remarks }}" required="">
                                            Remarks:
                                        </x-front.input-field>
                                    </div>

                                    {{-- <div class="row">
                                    <button type="button" class="btn btn-danger mb-3" onclick="removeAddressField(this)">
                                        <i class="fa fa-minus"></i> Remove
                                    </button>
                                </div> --}}
                                </div>
                            @endforeach

                        </div>

                        <button type="button" id="addAddressField" class="btn btn-secondary mb-3 mt-2">
                            <i class="fa fa-plus"></i> Add Address
                        </button>

                        <!-- Bank Account Fields -->
                        <div id="bankAccountsContainer">
                            @foreach ($data->banks as $bankAccount)
                                <div class="bank-account-field">

                                    <x-front.input-field type="hidden"
                                        name="bank_accounts[{{ $bankAccount->id }}][id]"
                                        id="id_{{ $bankAccount->id }}" place="" val="{{ $bankAccount->id }}"
                                        required="true" />

                                    <!-- Bank Name -->
                                    <div class="row">
                                        <label for="bank_name_{{ $bankAccount->id }}" class="form-label">Bank
                                            Name:</label>
                                        <x-front.input-field type="text"
                                            name="bank_accounts[{{ $bankAccount->id }}][bank_name]"
                                            id="bank_name_{{ $bankAccount->id }}" place="Enter Bank Name"
                                            val="{{ $bankAccount->bank_name }}" required="true">
                                            Bank Name:
                                        </x-front.input-field>
                                    </div>

                                    <!-- Branch Name -->
                                    <div class="row">
                                        <label for="branch_name_{{ $bankAccount->id }}" class="form-label">Branch
                                            Name:</label>
                                        <x-front.input-field type="text"
                                            name="bank_accounts[{{ $bankAccount->id }}][branch_name]"
                                            id="branch_name_{{ $bankAccount->id }}" place="Enter Branch Name"
                                            val="{{ $bankAccount->branch_name }}" required="true">
                                            Branch Name:
                                        </x-front.input-field>
                                    </div>

                                    <!-- Bank Code -->
                                    <div class="row">
                                        <label for="bank_code_{{ $bankAccount->id }}" class="form-label">Bank
                                            Code:</label>
                                        <x-front.input-field type="text"
                                            name="bank_accounts[{{ $bankAccount->id }}][bank_code]"
                                            id="bank_code_{{ $bankAccount->id }}" place="Enter Bank Code"
                                            val="{{ $bankAccount->bank_code }}" required="true">
                                            Bank Code:
                                        </x-front.input-field>
                                    </div>

                                    <!-- Address -->
                                    <div class="row">
                                        <label for="address_{{ $bankAccount->id }}"
                                            class="form-label">Address:</label>
                                        <x-front.input-field type="text"
                                            name="bank_accounts[{{ $bankAccount->id }}][address]"
                                            id="address_{{ $bankAccount->id }}" place="Enter Address"
                                            val="{{ $bankAccount->address }}" required="true">
                                            Address:
                                        </x-front.input-field>
                                    </div>

                                    <!-- Account Name -->
                                    <div class="row">
                                        <label for="account_name_{{ $bankAccount->id }}" class="form-label">Account
                                            Name:</label>
                                        <x-front.input-field type="text"
                                            name="bank_accounts[{{ $bankAccount->id }}][account_name]"
                                            id="account_name_{{ $bankAccount->id }}" place="Enter Account Name"
                                            val="{{ $bankAccount->account_name }}" required="true">
                                            Account Name:
                                        </x-front.input-field>
                                    </div>

                                    <!-- Account Number -->
                                    <div class="row">
                                        <label for="account_number_{{ $bankAccount->id }}" class="form-label">Account
                                            Number:</label>
                                        <x-front.input-field type="text"
                                            name="bank_accounts[{{ $bankAccount->id }}][account_number]"
                                            id="account_number_{{ $bankAccount->id }}" place="Enter Account Number"
                                            val="{{ $bankAccount->account_number }}" required="true">
                                            Account Number:
                                        </x-front.input-field>
                                    </div>

                                    <!-- City -->
                                    <div class="row">
                                        <label for="city_{{ $bankAccount->id }}" class="form-label">City:</label>
                                        <x-front.input-field type="text"
                                            name="bank_accounts[{{ $bankAccount->id }}][city]"
                                            id="city_{{ $bankAccount->id }}" place="Enter City"
                                            val="{{ $bankAccount->city }}" required="true">
                                            City:
                                        </x-front.input-field>
                                    </div>

                                    <!-- State -->
                                    <div class="row">
                                        <label for="state_{{ $bankAccount->id }}" class="form-label">State:</label>
                                        <x-front.input-field type="text"
                                            name="bank_accounts[{{ $bankAccount->id }}][state]"
                                            id="state_{{ $bankAccount->id }}" place="Enter State"
                                            val="{{ $bankAccount->state }}" required="true">
                                            State:
                                        </x-front.input-field>
                                    </div>

                                    <!-- ZIP Code -->
                                    <div class="row">
                                        <label for="zip_{{ $bankAccount->id }}" class="form-label">ZIP Code:</label>
                                        <x-front.input-field type="text"
                                            name="bank_accounts[{{ $bankAccount->id }}][zip]"
                                            id="zip_{{ $bankAccount->id }}" place="Enter ZIP Code"
                                            val="{{ $bankAccount->zip }}" required="true">
                                            ZIP Code:
                                        </x-front.input-field>
                                    </div>

                                    <!-- Department -->
                                    <div class="row">
                                        <label for="department_{{ $bankAccount->id }}"
                                            class="form-label">Department:</label>
                                        <x-front.input-field type="text"
                                            name="bank_accounts[{{ $bankAccount->id }}][department]"
                                            id="department_{{ $bankAccount->id }}" place="Enter Department"
                                            val="{{ $bankAccount->department }}" required="true">
                                            Department:
                                        </x-front.input-field>
                                    </div>
                                    <div class="row">
                                        <label for="country_{{ $bankAccount->id }}"
                                            class="form-label">Country:</label>
                                        <x-front.input-field type="text"
                                            name="bank_accounts[{{ $bankAccount->id }}][country]"
                                            id="country_{{ $bankAccount->id }}" place="Enter Country"
                                            val="{{ $bankAccount->country }}" required="true">
                                            Country:
                                        </x-front.input-field>
                                    </div>

                                    <!-- Contact -->
                                    <div class="row">
                                        <label for="contact_{{ $bankAccount->id }}"
                                            class="form-label">Contact:</label>
                                        <x-front.input-field type="text"
                                            name="bank_accounts[{{ $bankAccount->id }}][contact]"
                                            id="contact_{{ $bankAccount->id }}" place="Enter Contact"
                                            val="{{ $bankAccount->contact }}" required="true">
                                            Contact:
                                        </x-front.input-field>
                                    </div>

                                    <!-- Phone -->
                                    <div class="row">
                                        <label for="phone_{{ $bankAccount->id }}" class="form-label">Phone:</label>
                                        <x-front.input-field type="text"
                                            name="bank_accounts[{{ $bankAccount->id }}][phone]"
                                            id="phone_{{ $bankAccount->id }}" place="Enter Phone"
                                            val="{{ $bankAccount->phone }}" required="true">
                                            Phone:
                                        </x-front.input-field>
                                    </div>

                                    <!-- Position -->
                                    <div class="row">
                                        <label for="position_{{ $bankAccount->id }}"
                                            class="form-label">Position:</label>
                                        <x-front.input-field type="text"
                                            name="bank_accounts[{{ $bankAccount->id }}][position]"
                                            id="position_{{ $bankAccount->id }}" place="Enter Position"
                                            val="{{ $bankAccount->position }}" required="true">
                                            Position:
                                        </x-front.input-field>
                                    </div>

                                    <!-- Fax -->
                                    <div class="row">
                                        <label for="fax_{{ $bankAccount->id }}" class="form-label">Fax:</label>
                                        <x-front.input-field type="text"
                                            name="bank_accounts[{{ $bankAccount->id }}][fax]"
                                            id="fax_{{ $bankAccount->id }}" place="Enter Fax"
                                            val="{{ $bankAccount->fax }}" required="true">
                                            Fax:
                                        </x-front.input-field>
                                    </div>

                                    <!-- Cell -->
                                    <div class="row">
                                        <label for="cell_{{ $bankAccount->id }}" class="form-label">Cell:</label>
                                        <x-front.input-field type="text"
                                            name="bank_accounts[{{ $bankAccount->id }}][cell]"
                                            id="cell_{{ $bankAccount->id }}" place="Enter Cell"
                                            val="{{ $bankAccount->cell }}" required="true">
                                            Cell:
                                        </x-front.input-field>
                                    </div>

                                    <!-- Email -->
                                    <div class="row">
                                        <label for="email_{{ $bankAccount->id }}" class="form-label">Email:</label>
                                        <x-front.input-field type="text"
                                            name="bank_accounts[{{ $bankAccount->id }}][email]"
                                            id="email_{{ $bankAccount->id }}" place="Enter Email"
                                            val="{{ $bankAccount->email }}" required="true">
                                            Email:
                                        </x-front.input-field>
                                    </div>

                                    <!-- Other -->
                                    <div class="row">
                                        <label for="other_{{ $bankAccount->id }}" class="form-label">Other:</label>
                                        <x-front.input-field type="text"
                                            name="bank_accounts[{{ $bankAccount->id }}][other]"
                                            id="other_{{ $bankAccount->id }}" place="Enter Other"
                                            val="{{ $bankAccount->other }}" required="true">
                                            Other:
                                        </x-front.input-field>
                                    </div>

                                    <!-- Remarks -->
                                    <div class="row">
                                        <label for="remarks_{{ $bankAccount->id }}"
                                            class="form-label">Remarks:</label>
                                        <x-front.input-field type="text"
                                            name="bank_accounts[{{ $bankAccount->id }}][remarks]"
                                            id="remarks_{{ $bankAccount->id }}" place="Enter Remarks"
                                            val="{{ $bankAccount->remarks }}" required="true">
                                            Remarks:
                                        </x-front.input-field>
                                    </div>


                                </div>
                            @endforeach
                        </div>

                        <button type="button" id="addBankAccountField" class="btn btn-secondary mb-3 mt-2">
                            <i class="fa fa-plus"></i> Add Bank Account
                        </button>

                        {{-- assets  --}}
                        <div id="assetsContainer">
                            @foreach ($data->assets as $asset)
                                <div class="asset-field">

                                    <x-front.input-field type="hidden" name="assets[{{ $asset->id }}][id]"
                                        id="id_{{ $asset->id }}" place="" val="{{ $asset->id }}"
                                        required="true" />

                                    <!-- Asset Name -->
                                    <div class="row">
                                        <label for="name_{{ $asset->id }}" class="form-label">Asset Name:</label>
                                        <x-front.input-field type="text" name="assets[{{ $asset->id }}][name]"
                                            id="name_{{ $asset->id }}" place="Enter Asset Name"
                                            val="{{ $asset->name }}" required="true">
                                            Asset Name:
                                        </x-front.input-field>
                                    </div>

                                    <!-- Asset Value -->
                                    <div class="row">
                                        <label for="value_{{ $asset->id }}" class="form-label">Asset
                                            Value:</label>
                                        <x-front.input-field type="text"
                                            name="assets[{{ $asset->id }}][value]"
                                            id="value_{{ $asset->id }}" place="Enter Asset Value"
                                            val="{{ $asset->value }}" required="true">
                                            Asset Value:
                                        </x-front.input-field>
                                    </div>

                                    <!-- Remarks -->
                                    <div class="row">
                                        <label for="remarks_{{ $asset->id }}" class="form-label">Remarks:</label>
                                        <x-front.input-field type="text"
                                            name="assets[{{ $asset->id }}][remarks]"
                                            id="remarks_{{ $asset->id }}" place="Enter Remarks"
                                            val="{{ $asset->remarks }}" required="true">
                                            Remarks:
                                        </x-front.input-field>
                                    </div>


                                </div>
                            @endforeach
                        </div>

                        <!-- Add Asset Button -->


                        <button type="button" id="addAssetButton" class="btn btn-secondary mb-3 mt-2">
                            <i class="fa fa-plus"></i> Add Asset
                        </button>

                        {{-- <!-- Asset Fields -->
                        <div id="assetsContainer">
                            @foreach ($data->assets as $asset)
                            <div class="asset-field">

                                <x-front.input-field type="hidden" name="assets[{{ $asset->id }}][id]" id="id_{{ $asset->id }}" place="" val="{{ $asset->id }}" required="true" />

                                <!-- Asset Name -->
                                <div class="row">
                                    <label for="name_{{ $asset->id }}" class="form-label">Asset Name:</label>
                                    <x-front.input-field type="text" name="assets[{{ $asset->id }}][name]" id="name_{{ $asset->id }}" place="Enter Asset Name" val="{{ $asset->name }}" required="true">
                                        Asset Name:
                                    </x-front.input-field>
                                </div>

                                <!-- Asset Value -->
                                <div class="row">
                                    <label for="value_{{ $asset->id }}" class="form-label">Asset Value:</label>
                                    <x-front.input-field type="text" name="assets[{{ $asset->id }}][value]" id="value_{{ $asset->id }}" place="Enter Asset Value" val="{{ $asset->value }}" required="true">
                                        Asset Value:
                                    </x-front.input-field>
                                </div>

                                <!-- Remarks -->
                                <div class="row">
                                    <label for="remarks_{{ $asset->id }}" class="form-label">Asset Remarks:</label>
                                    <x-front.input-field type="text" name="assets[{{ $asset->id }}][remarks]" id="remarks_{{ $asset->id }}" place="Enter Remarks" val="{{ $asset->remarks }}" required="">
                                        Remarks:
                                    </x-front.input-field>
                                </div>
                            </div>
                            @endforeach
                        </div> --}}


                        <!-- Employments -->
                        <div id="employmentsContainer">
                            @foreach ($data->employments as $employment)
                                <div class="employment-field">

                                    <x-front.input-field type="hidden"
                                        name="employments[{{ $employment->id }}][id]"
                                        id="employment_id_{{ $employment->id }}" place=""
                                        val="{{ $employment->id }}" required="true" />

                                    <!-- Employer -->
                                    <div class="row">
                                        <label for="employer_{{ $employment->id }}"
                                            class="form-label">Employer:</label>
                                        <x-front.input-field type="text"
                                            name="employments[{{ $employment->id }}][employer]"
                                            id="employer_{{ $employment->id }}" place="Enter Employer"
                                            val="{{ $employment->employer }}" required="true">
                                            Employer:
                                        </x-front.input-field>
                                    </div>


                                    <!-- Employee Name -->
                                    <div class="row">
                                        <label for="employee_name_{{ $employment->id }}" class="form-label">Employee
                                            Name:</label>
                                        <x-front.input-field type="text"
                                            name="employments[{{ $employment->id }}][employee_name]"
                                            id="employee_name_{{ $employment->id }}" place="Enter Employee Name"
                                            val="{{ $employment->employee_name }}" required="true">
                                            Employee Name:
                                        </x-front.input-field>
                                    </div>

                                    <!-- Position -->
                                    <div class="row">
                                        <label for="position_{{ $employment->id }}"
                                            class="form-label">Position:</label>
                                        <x-front.input-field type="text"
                                            name="employments[{{ $employment->id }}][position]"
                                            id="position_{{ $employment->id }}" place="Enter Position"
                                            val="{{ $employment->position }}" required="true">
                                            Position:
                                        </x-front.input-field>
                                    </div>

                                    <!-- Address -->
                                    <div class="row">
                                        <label for="address_{{ $employment->id }}"
                                            class="form-label">Address:</label>
                                        <x-front.input-field type="text"
                                            name="employments[{{ $employment->id }}][address]"
                                            id="address_{{ $employment->id }}" place="Enter Address"
                                            val="{{ $employment->address }}" required="true">
                                            Address:
                                        </x-front.input-field>
                                    </div>

                                    <!-- City -->
                                    <div class="row">
                                        <label for="city_{{ $employment->id }}" class="form-label">City:</label>
                                        <x-front.input-field type="text"
                                            name="employments[{{ $employment->id }}][city]"
                                            id="city_{{ $employment->id }}" place="Enter City"
                                            val="{{ $employment->city }}" required="true">
                                            City:
                                        </x-front.input-field>
                                    </div>

                                    <!-- State -->
                                    <div class="row">
                                        <label for="state_{{ $employment->id }}" class="form-label">State:</label>
                                        <x-front.input-field type="text"
                                            name="employments[{{ $employment->id }}][state]"
                                            id="state_{{ $employment->id }}" place="Enter State"
                                            val="{{ $employment->state }}" required="true">
                                            State:
                                        </x-front.input-field>
                                    </div>

                                    <!-- ZIP Code -->
                                    <div class="row">
                                        <label for="zip_{{ $employment->id }}" class="form-label">ZIP Code:</label>
                                        <x-front.input-field type="text"
                                            name="employments[{{ $employment->id }}][zip]"
                                            id="zip_{{ $employment->id }}" place="Enter ZIP Code"
                                            val="{{ $employment->zip }}" required="true">
                                            ZIP Code:
                                        </x-front.input-field>
                                    </div>

                                    <!-- Pay Amount -->
                                    <div class="row">
                                        <label for="pay_amount_{{ $employment->id }}" class="form-label">Pay
                                            Amount:</label>
                                        <x-front.input-field type="text"
                                            name="employments[{{ $employment->id }}][pay_amount]"
                                            id="pay_amount_{{ $employment->id }}" place="Enter Pay Amount"
                                            val="{{ $employment->pay_amount }}" required="true">
                                            Pay Amount:
                                        </x-front.input-field>
                                    </div>

                                    <!-- Pay Period -->
                                    <div class="row">

                                        <label for="pay_period_{{ $employment->id }}" class="form-label">Pay
                                            Period:</label>
                                        <x-front.input-field type="text"
                                            name="employments[{{ $employment->id }}][pay_period]"
                                            id="pay_period_{{ $employment->id }}" place="Enter Pay Period"
                                            val="{{ $employment->pay_period }}" required="true">
                                            Pay Period:
                                        </x-front.input-field>
                                    </div>

                                    <!-- Date Last Paid -->
                                    <div class="row">
                                        <label for="date_last_paid_{{ $employment->id }}" class="form-label">Date
                                            Last Paid:</label>
                                        <x-front.input-field type="date"
                                            name="employments[{{ $employment->id }}][date_last_paid]"
                                            id="date_last_paid_{{ $employment->id }}" place="Enter Date Last Paid"
                                            val="{{ $employment->date_last_paid }}" required="true">
                                            Date Last Paid:
                                        </x-front.input-field>
                                    </div>

                                    <!-- Date Last Commenced -->
                                    <div class="row">
                                        <label for="date_last_commenced_{{ $employment->id }}"
                                            class="form-label">Date Last Commenced:</label>
                                        <x-front.input-field type="date"
                                            name="employments[{{ $employment->id }}][date_last_commenced]"
                                            id="date_last_commenced_{{ $employment->id }}"
                                            place="Enter Date Last Commenced"
                                            val="{{ $employment->date_last_commenced }}" required="true">
                                            Date Last Commenced:
                                        </x-front.input-field>
                                    </div>

                                    <!-- Country -->
                                    <div class="row">
                                        <label for="country_{{ $employment->id }}"
                                            class="form-label">Country:</label>
                                        <x-front.input-field type="text"
                                            name="employments[{{ $employment->id }}][country]"
                                            id="country_{{ $employment->id }}" place="Enter Country"
                                            val="{{ $employment->country }}" required="true">
                                            Country:
                                        </x-front.input-field>
                                    </div>

                                    <!-- Phone -->
                                    <div class="row">
                                        <label for="phone_{{ $employment->id }}" class="form-label">Phone:</label>
                                        <x-front.input-field type="text"
                                            name="employments[{{ $employment->id }}][phone]"
                                            id="phone_{{ $employment->id }}" place="Enter Phone"
                                            val="{{ $employment->phone }}" required="true">
                                            Phone:
                                        </x-front.input-field>
                                    </div>

                                    <!-- Fax -->
                                    <div class="row">
                                        <label for="fax_{{ $employment->id }}" class="form-label">Fax:</label>
                                        <x-front.input-field type="text"
                                            name="employments[{{ $employment->id }}][fax]"
                                            id="fax_{{ $employment->id }}" place="Enter Fax"
                                            val="{{ $employment->fax }}" required="true">
                                            Fax:
                                        </x-front.input-field>
                                    </div>
                                </div>

                                <!-- Cell -->
                                <div class="row">
                                    <label for="cell_{{ $employment->id }}" class="form-label">Cell:</label>
                                    <x-front.input-field type="text"
                                        name="employments[{{ $employment->id }}][cell]"
                                        id="cell_{{ $employment->id }}" place="Enter Cell"
                                        val="{{ $employment->cell }}" required="true">
                                        Cell:
                                    </x-front.input-field>
                                </div>

                                <!-- Other -->
                                <div class="row">
                                    <label for="other_{{ $employment->id }}" class="form-label">Other:</label>
                                    <x-front.input-field type="text"
                                        name="employments[{{ $employment->id }}][other]"
                                        id="other_{{ $employment->id }}" place="Enter Other"
                                        val="{{ $employment->other }}" required="true">
                                        Other:
                                    </x-front.input-field>
                                </div>

                                <!-- Date Ceased -->
                                <div class="row">
                                    <label for="date_ceased_{{ $employment->id }}" class="form-label">Date
                                        Ceased:</label>
                                    <x-front.input-field type="date"
                                        name="employments[{{ $employment->id }}][date_ceased]"
                                        id="date_ceased_{{ $employment->id }}" place="Enter Date Ceased"
                                        val="{{ $employment->date_ceased }}" required="true">
                                        Date Ceased:
                                    </x-front.input-field>
                                </div>

                                <!-- Length of Service -->
                                <div class="row">
                                    <label for="length_of_service_{{ $employment->id }}" class="form-label">Length
                                        of Service:</label>
                                    <x-front.input-field type="text"
                                        name="employments[{{ $employment->id }}][length_of_service]"
                                        id="length_of_service_{{ $employment->id }}" place="Enter Length of Service"
                                        val="{{ $employment->length_of_service }}" required="true">
                                        Length of Service:
                                    </x-front.input-field>
                                </div>

                                <!-- Remarks -->
                                <div class="row">
                                    <label for="remarks_{{ $employment->id }}" class="form-label">Remarks:</label>
                                    <x-front.input-field type="text"
                                        name="employments[{{ $employment->id }}][remarks]"
                                        id="remarks_{{ $employment->id }}" place="Enter Remarks"
                                        val="{{ $employment->remarks }}" required="true">
                                        Remarks:
                                    </x-front.input-field>
                                </div>

                        </div>
                        @endforeach

            </div>

            <button type="button" id="addEmploymentButton" class="btn btn-secondary mb-3 mt-2"
                style="margin-left: 20px;     width: 195px;">
                <i class="fa fa-plus"></i> Add Employment
            </button>





            <button type="submit" class="btn btn-primary mt-2 mb-2 px-3" style="margin: auto">Submit</button>
            </form>
            </x-front.card>
        </div>
    </div>




    <script>
        let addressFieldCount = {{ count($data->addresses) }};
        let nextAddressFieldIndex = addressFieldCount;

        document.getElementById("addAddressField").addEventListener("click", function() {
            const addressFieldsContainer = document.getElementById("addressFieldsContainer");
            addressFieldCount++;
            nextAddressFieldIndex++;

            const addressFields = document.createElement("div");
            addressFields.classList.add("address-field");
            addressFields.innerHTML = `
                <div class="row">
                    <label for="street_new_${addressFieldCount}" class="form-label">Street:</label>
                    <input type="text" name="addresses[new_${addressFieldCount}][street]" id="street_new_${nextAddressFieldIndex}" class="form-control" placeholder="Enter Street" required>
                </div>

                <div class="row">
                    <label for="city_new_${addressFieldCount}" class="form-label">City:</label>
                    <input type="text" name="addresses[new_${addressFieldCount}][city]" id="city_new_${nextAddressFieldIndex}" class="form-control" placeholder="Enter City" required>
                </div>

                <div class="row">
                    <label for="country_new_${addressFieldCount}" class "form-label">Country:</label>
                    <input type="text" name="addresses[new_${addressFieldCount}][country]" id="country_new_${nextAddressFieldIndex}" class="form-control" placeholder="Enter Country" required>
                </div>

                <div class="row">
                    <label for="state_new_${addressFieldCount}" class="form-label">State:</label>
                    <input type="text" name="addresses[new_${addressFieldCount}][state]" id="state_new_${nextAddressFieldIndex}" class="form-control" placeholder="Enter State" required>
                </div>

                <div class="row">
                    <label for="zip_new_${addressFieldCount}" class="form-label">ZIP Code:</label>
                    <input type="text" name="addresses[new_${addressFieldCount}][zip]" id="zip_new_${nextAddressFieldIndex}" class="form-control" placeholder="Enter ZIP Code" required>
                </div>

                <div class="row">
                    <label for="type_new_${addressFieldCount}" class="form-label">Type:</label>
                    <input type="text" name="addresses[new_${addressFieldCount}][type]" id="type_new_${nextAddressFieldIndex}" class="form-control" placeholder="Enter Type">
                </div>

                <div class="row">
                    <label for="status_new_${addressFieldCount}" class="form-label">Status:</label>
                    <select name="addresses[new_${addressFieldCount}][status]" id="status_new_${nextAddressFieldIndex}" class="form-control" required>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>

                <div class="row">
                    <label for="remarks_new_${addressFieldCount}" class="form-label">Remarks:</label>
                    <input type="text" name="addresses[new_${addressFieldCount}][remarks]" id="remarks_new_${nextAddressFieldIndex}" class="form-control" placeholder="Enter Remarks">
                </div>

                <div class="row">
                    <button type="button" class="btn btn-danger mb-3 mt-2" style="width: 94px;" onclick="removeAddressField(this)">
                        <i class="fa fa-minus"></i> Remove
                    </button>
                </div>
            `;

            addressFieldsContainer.appendChild(addressFields);
        });

        function removeAddressField(button) {
            const addressField = button.closest(".address-field");
            addressField.remove();
        }
    </script>

    <script>
        let bankAccountCount = {{ count($data->banks) }};
        let nextBankAccountIndex = bankAccountCount;

        document.getElementById("addBankAccountField").addEventListener("click", function() {
            const bankAccountsContainer = document.getElementById("bankAccountsContainer");
            bankAccountCount++;
            nextBankAccountIndex++;

            const bankAccountFields = document.createElement("div");
            bankAccountFields.classList.add("bank-account-field");
            bankAccountFields.innerHTML = `
            <div class="row">
                <label for="bank_name_new_${bankAccountCount}" class="form-label">Bank Name:</label>
                <input type="text" name="bank_accounts[new_${bankAccountCount}][bank_name]" id="bank_name_new_${nextBankAccountIndex}" class="form-control" placeholder="Enter Bank Name" required>
            </div>

            <div class="row">
                <label for="branch_name_new_${bankAccountCount}" class="form-label">Branch Name:</label>
                <input type="text" name="bank_accounts[new_${bankAccountCount}][branch_name]" id="branch_name_new_${nextBankAccountIndex}" class="form-control" placeholder="Enter Branch Name" required>
            </div>

            <div class="row">
                <label for="bank_code_new_${bankAccountCount}" class="form-label">Bank Code:</label>
                <input type="text" name="bank_accounts[new_${bankAccountCount}][bank_code]" id="bank_code_new_${nextBankAccountIndex}" class="form-control" placeholder="Enter Bank Code" required>
            </div>

            <div class="row">
                <label for="address_new_${bankAccountCount}" class="form-label">Address:</label>
                <input type="text" name="bank_accounts[new_${bankAccountCount}][address]" id="address_new_${nextBankAccountIndex}" class="form-control" placeholder="Enter Address" required>
            </div>

            <div class="row">
                <label for="account_name_new_${bankAccountCount}" class="form-label">Account Name:</label>
                <input type="text" name="bank_accounts[new_${bankAccountCount}][account_name]" id="account_name_new_${nextBankAccountIndex}" class="form-control" placeholder="Enter Account Name" required>
            </div>

            <div class="row">
                <label for="account_number_new_${bankAccountCount}" class="form-label">Account Number:</label>
                <input type="text" name="bank_accounts[new_${bankAccountCount}][account_number]" id="account_number_new_${nextBankAccountIndex}" class="form-control" placeholder="Enter Account Number" required>
            </div>

            <div class="row">
                <label for="city_new_${bankAccountCount}" class="form-label">City:</label>
                <input type="text" name="bank_accounts[new_${bankAccountCount}][city]" id="city_new_${nextBankAccountIndex}" class="form-control" placeholder="Enter City" required>
            </div>

            <div class="row">
                <label for="state_new_${bankAccountCount}" class="form-label">State:</label>
                <input type="text" name="bank_accounts[new_${bankAccountCount}][state]" id="state_new_${nextBankAccountIndex}" class="form-control" placeholder="Enter State" required>
            </div>

            <div class="row">
                <label for="zip_new_${bankAccountCount}" class="form-label">ZIP Code:</label>
                <input type="text" name="bank_accounts[new_${bankAccountCount}][zip]" id="zip_new_${nextBankAccountIndex}" class="form-control" placeholder="Enter ZIP Code" required>
            </div>

            <div class="row">
                <label for="department_new_${bankAccountCount}" class="form-label">Department:</label>
                <input type="text" name="bank_accounts[new_${bankAccountCount}][department]" id="department_new_${nextBankAccountIndex}" class="form-control" placeholder="Enter Department" required>
            </div>

            <div class="row">
                <label for="country_new_${bankAccountCount}" class="form-label">Country:</label>
                <input type="text" name="bank_accounts[new_${bankAccountCount}][country]" id="country_new_${nextBankAccountIndex}" class="form-control" placeholder="Enter Country" required>
            </div>

            <div class="row">
                <label for="contact_new_${bankAccountCount}" class="form-label">Contact:</label>
                <input type="text" name="bank_accounts[new_${bankAccountCount}][contact]" id="contact_new_${nextBankAccountIndex}" class="form-control" placeholder="Enter Contact" required>
            </div>

            <div class "row">
                <label for="phone_new_${bankAccountCount}" class="form-label">Phone:</label>
                <input type="text" name="bank_accounts[new_${bankAccountCount}][phone]" id="phone_new_${nextBankAccountIndex}" class="form-control" placeholder="Enter Phone" required>
            </div>

            <div class="row">
                <label for="position_new_${bankAccountCount}" class="form-label">Position:</label>
                <input type="text" name="bank_accounts[new_${bankAccountCount}][position]" id="position_new_${nextBankAccountIndex}" class="form-control" placeholder="Enter Position" required>
            </div>

            <div class="row">
                <label for="fax_new_${bankAccountCount}" class="form-label">Fax:</label>
                <input type="text" name="bank_accounts[new_${bankAccountCount}][fax]" id="fax_new_${nextBankAccountIndex}" class="form-control" placeholder="Enter Fax" required>
            </div>

            <div class="row">
                <label for="cell_new_${bankAccountCount}" class="form-label">Cell:</label>
                <input type="text" name="bank_accounts[new_${bankAccountCount}][cell]" id="cell_new_${nextBankAccountIndex}" class="form-control" placeholder="Enter Cell" required>
            </div>

            <div class="row">
                <label for="email_new_${bankAccountCount}" class="form-label">Email:</label>
                <input type="text" name="bank_accounts[new_${bankAccountCount}][email]" id="email_new_${nextBankAccountIndex}" class="form-control" placeholder="Enter Email" required>
            </div>

            <div class="row">
                <label for="other_new_${bankAccountCount}" class="form-label">Other:</label>
                <input type="text" name="bank_accounts[new_${bankAccountCount}][other]" id="other_new_${nextBankAccountIndex}" class="form-control" placeholder="Enter Other" required>
            </div>

            <div class="row">
                <label for="remarks_new_${bankAccountCount}" class="form-label">Remarks:</label>
                <input type="text" name="bank_accounts[new_${bankAccountCount}][remarks]" id="remarks_new_${nextBankAccountIndex}" class="form-control" placeholder="Enter Remarks">
            </div>

        `;

            bankAccountsContainer.appendChild(bankAccountFields);
        });

        function removeBankAccountField(button) {
            const bankAccountField = button.closest(".bank-account-field");
            bankAccountField.remove();
        }
    </script>
    <script>
        let assetCount = {{ count($data->assets) }};
        let nextAssetIndex = assetCount;

        document.getElementById("addAssetButton").addEventListener("click", function() {
            const assetsContainer = document.getElementById("assetsContainer");
            assetCount++;
            nextAssetIndex++;

            const assetFields = document.createElement("div");
            assetFields.classList.add("asset-field");
            assetFields.innerHTML = `
            <div class="row">
                <label for="name_new_${assetCount}" class="form-label">Asset Name:</label>
                <input type="text" name="assets[new_${assetCount}][name]" id="name_new_${nextAssetIndex}" class="form-control" placeholder="Enter Asset Name" >
            </div>

            <div class="row">
                <label for="value_new_${assetCount}" class="form-label">Asset Value:</label>
                <input type="text" name="assets[new_${assetCount}][value]" id="value_new_${nextAssetIndex}" class="form-control" placeholder="Enter Asset Value" >
            </div>

            <div class="row">
                <label for="remarks_new_${assetCount}" class="form-label">Asset Remarks:</label>
                <input type="text" name="assets[new_${assetCount}][remarks]" id="remarks_new_${nextAssetIndex}" class="form-control" placeholder="Enter Asset Remarks" >
            </div>

            <button type="button" class="btn btn-danger remove-asset-button mt-3" style="margin-left: -10px;"  onclick="removeAssetField(this)">Remove Asset</button>
        `;

            assetsContainer.appendChild(assetFields);
        });

        function removeAssetField(button) {
            const assetField = button.closest(".asset-field");
            assetField.remove();
        }
    </script>
    <script>
        let employmentCount = {{ count($data->employments) }};
        let nextEmploymentIndex = employmentCount;

        document.getElementById("addEmploymentButton").addEventListener("click", function() {
            const employmentsContainer = document.getElementById("employmentsContainer");
            employmentCount++;
            nextEmploymentIndex++;

            const employmentFields = document.createElement("div");
            employmentFields.classList.add("employment-field");
            employmentFields.innerHTML = `
            <!-- Employer -->
            <div class="row">
                <label for="employer_new_${employmentCount}" class="form-label">Employer:</label>
                <input type="text" name="employments[new_${employmentCount}][employer]" id="employer_new_${nextEmploymentIndex}" class="form-control" placeholder="Enter Employer" required="true">
            </div>

            <!-- Employee Name -->
            <div class="row">
                <label for="employee_name_new_${employmentCount}" class="form-label">Employee Name:</label>
                <input type="text" name="employments[new_${employmentCount}][employee_name]" id="employee_name_new_${nextEmploymentIndex}" class="form-control" placeholder="Enter Employee Name" required="true">
            </div>

            <!-- Position -->
            <div class="row">
                <label for="position_new_${employmentCount}" class="form-label">Position:</label>
                <input type="text" name="employments[new_${employmentCount}][position]" id="position_new_${nextEmploymentIndex}" class="form-control" placeholder="Enter Position" required="true">
            </div>

            <!-- Address -->
            <div class="row">
                <label for="address_new_${employmentCount}" class="form-label">Address:</label>
                <input type="text" name="employments[new_${employmentCount}][address]" id="address_new_${nextEmploymentIndex}" class="form-control" placeholder="Enter Address" required="true">
            </div>

            <!-- City -->
            <div class="row">
                <label for="city_new_${employmentCount}" class="form-label">City:</label>
                <input type="text" name="employments[new_${employmentCount}][city]" id="city_new_${nextEmploymentIndex}" class="form-control" placeholder="Enter City" required="true">
            </div>

            <!-- State -->
            <div class="row">
                <label for="state_new_${employmentCount}" class="form-label">State:</label>
                <input type="text" name "employments[new_${employmentCount}][state]" id="state_new_${nextEmploymentIndex}" class="form-control" placeholder="Enter State" required="true">
            </div>

            <!-- ZIP Code -->
            <div class="row">
                <label for="zip_new_${employmentCount}" class="form-label">ZIP Code:</label>
                <input type="text" name="employments[new_${employmentCount}][zip]" id="zip_new_${nextEmploymentIndex}" class="form-control" placeholder="Enter ZIP Code" required="true">
            </div>

            <!-- Pay Amount -->
            <div class="row">
                <label for="pay_amount_new_${employmentCount}" class="form-label">Pay Amount:</label>
                <input type="text" name="employments[new_${employmentCount}][pay_amount]" id="pay_amount_new_${nextEmploymentIndex}" class="form-control" placeholder="Enter Pay Amount" required="true">
            </div>

            <!-- Pay Period -->
            <div class="row">
                <label for="pay_period_new_${employmentCount}" class="form-label">Pay Period:</label>
                <input type="text" name="employments[new_${employmentCount}][pay_period]" id="pay_period_new_${nextEmploymentIndex}" class="form-control" placeholder="Enter Pay Period" required="true">
            </div>

            <!-- Date Last Paid -->
            <div class="row">
                <label for="date_last_paid_new_${employmentCount}" class="form-label">Date Last Paid:</label>
                <input type="date" name="employments[new_${employmentCount}][date_last_paid]" id="date_last_paid_new_${nextEmploymentIndex}" class="form-control" placeholder="Enter Date Last Paid" required="true">
            </div>

            <!-- Date Last Commenced -->
            <div class="row">
                <label for="date_last_commenced_new_${employmentCount}" class="form-label">Date Last Commenced:</label>
                <input type="date" name="employments[new_${employmentCount}][date_last_commenced]" id="date_last_commenced_new_${nextEmploymentIndex}" class="form-control" placeholder="Enter Date Last Commenced" required="true">
            </div>

            <!-- Country -->
            <div class="row">
                <label for "country_new_${employmentCount}" class="form-label">Country:</label>
                <input type="text" name="employments[new_${employmentCount}][country]" id="country_new_${nextEmploymentIndex}" class="form-control" placeholder="Enter Country" required="true">
            </div>

            <!-- Phone -->
            <div class="row">
                <label for="phone_new_${employmentCount}" class="form-label">Phone:</label>
                <input type="text" name="employments[new_${employmentCount}][phone]" id="phone_new_${nextEmploymentIndex}" class="form-control" placeholder="Enter Phone" required="true">
            </div>

            <!-- Fax -->
            <div class="row">
                <label for="fax_new_${employmentCount}" class="form-label">Fax:</label>
                <input type="text" name="employments[new_${employmentCount}][fax]" id="fax_new_${nextEmploymentIndex}" class="form-control" placeholder="Enter Fax" required="true">
            </div>

            <!-- Cell -->
            <div class="row">
                <label for="cell_new_${employmentCount}" class="form-label">Cell:</label>
                <input type="text" name="employments[new_${employmentCount}][cell]" id="cell_new_${nextEmploymentIndex}" class="form-control" placeholder="Enter Cell" required="true">
            </div>

            <!-- Other -->
            <div class="row">
                <label for="other_new_${employmentCount}" class="form-label">Other:</label>
                <input type="text" name="employments[new_${employmentCount}][other]" id="other_new_${nextEmploymentIndex}" class="form-control" placeholder="Enter Other" required="true">
            </div>

            <!-- Date Ceased -->
            <div class="row">
                <label for="date_ceased_new_${employmentCount}" class="form-label">Date Ceased:</label>
                <input type="date" name="employments[new_${employmentCount}][date_ceased]" id="date_ceased_new_${nextEmploymentIndex}" class="form-control" placeholder="Enter Date Ceased" required="true">
            </div>

            <!-- Length of Service -->
            <div class="row">
                <label for="length_of_service_new_${employmentCount}" class="form-label">Length of Service:</label>
                <input type="text" name="employments[new_${employmentCount}][length_of_service]" id="length_of_service_new_${nextEmploymentIndex}" class="form-control" placeholder="Enter Length of Service" required="true">
            </div>

            <!-- Remarks -->
            <div class="row">
                <label for="remarks_new_${employmentCount}" class="form-label">Remarks:</label>
                <input type="text" name="employments[new_${employmentCount}][remarks]" id="remarks_new_${nextEmploymentIndex}" class="form-control" placeholder="Enter Remarks" required="true">
            </div>

            <div class="row">
            <button type="button" class="btn btn-danger remove-employment-button mt-3" style="margin-left: -10px;"  onclick="removeEmploymentField(this)">Remove Employment</button>
           </div>
            `;

            employmentsContainer.appendChild(employmentFields);
        });

        function removeEmploymentField(button) {
            const employmentField = button.closest(".employment-field");
            employmentField.remove();
        }
    </script>


</x-auth-layout>
