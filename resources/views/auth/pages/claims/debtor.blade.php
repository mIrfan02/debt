<x-front.card>

    <style>
        .contact-container {
            margin-top: 20px;
        }


        .contact-container {
            margin-top: 20px;
        }

        .add-contact {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        form {
            background-color: white !important;
        }

        input {
            margin-bottom: 1rem;
        }
    </style>
    {{-- @dd($data->debtor->contacts_new) --}}
    <div class="container" style="width: 100%">
        <h2>Debter Detail</h2>

        <form action="{{ route('debtors.update', $data->debtor->id) }}" method="POST">
            @method('put')
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row">
                <div class="form-group col-md-6 mb-3">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                        value="{{ $data->debtor->name }}" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group col-md-6 mb-3">
                    <label for="dob">Date of Birth:</label>
                    <input type="date" name="dob" value="{{ $data->debtor->dob }}"
                        class="form-control @error('dob') is-invalid @enderror" required>
                    @error('dob')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 mb-3">
                    <label for="ssn">Social Security Number (SSN):</label>
                    <input type="text" name ="ssn" value="{{ $data->debtor->ssn }}"
                        class="form-control @error('ssn') is-invalid @enderror" required>
                    @error('ssn')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group col-md-6 mb-3">
                    <label for="position">Position:</label>
                    <input type="text" name="position" value="{{ $data->debtor->position }}"
                        class="form-control @error('position') is-invalid @enderror" required>
                    @error('position')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 mb-3">
                    <label for="company">Company:</label>
                    <input type="text" name="company" value="{{ $data->debtor->company }}"
                        class="form-control @error('company') is-invalid @enderror" required>
                    @error('company')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group col-md-6 mb-3">
                    <label for="driver_license1">Driver License 1:</label>
                    <input type="text" name="driver_license1" value="{{ $data->debtor->driver_license1 }}"
                        class="form-control @error('driver_license1') is-invalid @enderror" required>
                    @error('driver_license1')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 mb-3">
                    <label for="organization">Organization:</label>
                    <input type="text" name="organization" value="{{ $data->debtor->organization }}"
                        class="form-control @error('organization') is-invalid @enderror" required>
                    @error('organization')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group col-md-6 mb-3">
                    <label for="driver_license2">Driver License 2:</label>
                    <input type="text" name="driver_license2" value="{{ $data->debtor->driver_license2 }}"
                        class="form-control @error('driver_license2') is-invalid @enderror">
                    @error('driver_license2')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 mb-3">
                    <label for="email">Email:</label>
                    <input type="email" name="email" value="{{ $data->debtor->email }}"
                        class="form-control @error('email') is-invalid @enderror">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group col-md-6 mb-3">
                    <label for="phone">Phone:</label>
                    <input type="tel" name="phone" value="{{ $data->debtor->phone }}"
                        class="form-control @error('phone') is-invalid @enderror">
                    @error('phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 mb-3">
                    <label for="fax">Fax:</label>
                    <input type="tel" name="fax" value="{{ $data->debtor->fax }}"
                        class="form-control @error('fax') is-invalid @enderror">
                    @error('fax')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group col-md-6 mb-3">
                    <label for="alias1">Alias 1:</label>
                    <input type="text" name="alias1" value="{{ $data->debtor->alias1 }}"
                        class="form-control @error('alias1') is-invalid @enderror">
                    @error('alias1')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 mb-3">
                    <label for="cell">Cell:</label>
                    <input type="tel" name="cell" value="{{ $data->debtor->cell }}"
                        class="form-control @error('cell') is-invalid @enderror">
                    @error('cell')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group col-md-6 mb-3">
                    <label for="other">Other:</label>
                    <input type="text" name="other" value="{{ $data->debtor->other }}"
                        class="form-control @error('other') is-invalid @enderror">
                    @error('other')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-4 mb-3">
                    <label for="alias2">Alias 2:</label>
                    <input type="text" name="alias2" value="{{ $data->debtor->alias2 }}"
                        class="form-control @error('alias2') is-invalid @enderror">
                    @error('alias2')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>


                <div class="form-group col-md-4 mb-3">
                    <label for="status">Status:</label>
                    <select name="status" class="form-control @error('status') is-invalid @enderror" required>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                    @error('status')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group col-md-4 mb-3">
                    <label for="status">Client:</label>
                    <select name="client_id" class="form-control @error('status') is-invalid @enderror" required>
                        <option value="">Select</option>
                        @if (isset($clients))
                            @foreach ($clients as $client)
                                <option value="{{ $client->id }}">{{ $client->person }}</option>
                            @endforeach
                        @endif
                    </select>
                    @error('status')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

            </div>
            <div class="row">
                <div class="form-group col-md-12 mb-3">
                    <label for="remarks">Remarks:</label>
                    <textarea name="remarks" class="form-control @error('remarks') is-invalid @enderror">{{ $data->debtor->remarks }}</textarea>
                    @error('remarks')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <h2>Address Details</h2>
            <button type="button" id="addAddressField" class="btn btn-secondary mb-3 mt-2">
                <i class="fa fa-plus"></i> Add Address
            </button>

            <div id="addressFieldsContainer">
                @foreach ($data->debtor->new_addresses as $address)
                    <x-front.input-field type="hidden" name="addresses[{{ $address->id }}][id]"
                        id="id_{{ $address->id }}" place="" val="{{ $address->id }}" required="true" />

                    <div class="address-field">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="street_{{ $address->id }}" class="form-label">Street:</label>
                                <x-front.input-field type="text" name="addresses[{{ $address->id }}][street]"
                                    id="street_{{ $address->id }}" place="Enter Street"
                                    val="{{ $address->street }}" required="true" />

                            </div>
                            <div class="col-md-4">
                                <label for="city_{{ $address->id }}" class="form-label">City:</label>
                                <x-front.input-field type="text" name="addresses[{{ $address->id }}][city]"
                                    id="city_{{ $address->id }}" place="Enter City" val="{{ $address->city }}"
                                    required="true" />

                            </div>
                            <div class="col-md-4">
                                <label for="country_{{ $address->id }}" class="form-label">Country:</label>
                                <x-front.input-field type="text" name="addresses[{{ $address->id }}][country]"
                                    id="country_{{ $address->id }}" place="Enter Country"
                                    val="{{ $address->country }}" required="true">
                                    Country:
                                </x-front.input-field>
                            </div>
                        </div>


                        <!-- State -->
                        <div class="row">
                            <div class="col-md-4">
                                <label for="state_{{ $address->id }}" class="form-label">State:</label>
                                <x-front.input-field type="text" name="addresses[{{ $address->id }}][state]"
                                    id="state_{{ $address->id }}" place="Enter State" val="{{ $address->state }}"
                                    required="true">
                                    State:
                                </x-front.input-field>
                            </div>

                            <div class="col-md-4">
                                <div class="row">
                                    <label for="type_{{ $address->id }}" class="form-label">Type:</label>
                                    <x-front.input-field type="text" name="addresses[{{ $address->id }}][type]"
                                        id="type_{{ $address->id }}" place="Enter Type" val="{{ $address->type }}"
                                        required="">
                                        Type:
                                    </x-front.input-field>
                                </div>

                            </div>
                            <div class="col-md-4">
                                <label for="status_{{ $address->id }}" class="form-label">Status:</label>
                                <select name="addresses[{{ $address->id }}][status]" class="form-control"
                                    required="">
                                    <option value="1" {{ $address->status == 1 ? 'selected' : '' }}>Active
                                    </option>
                                    <option value="0" {{ $address->status == 0 ? 'selected' : '' }}>Inactive
                                    </option>
                                </select>
                            </div>
                        </div>

                        <!-- Remarks -->
                        <div class="row">
                            <label for="remarks_{{ $address->id }}" class="form-label">Remarks:</label>
                            <x-front.input-field type="text" name="addresses[{{ $address->id }}][remarks]"
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

            <h2>Bank Account Details</h2>

            <button type="button" id="addBankAccountField" class="btn btn-secondary mb-3 mt-2">
                <i class="fa fa-plus"></i> Add Bank Account
            </button>

            <div id="bankAccountFieldsContainer">
                @foreach ($data->debtor->new_bank as $bankAccount)
                    <div class="bank-account-field">

                        <x-front.input-field type="hidden" name="bank_accounts[{{ $bankAccount->id }}][id]"
                            id="id_{{ $bankAccount->id }}" place="" val="{{ $bankAccount->id }}"
                            required="true" />

                        <!-- Bank Name -->
                        <div class="row">
                            <div class="col-md-4">
                                <label for="bank_name_{{ $bankAccount->id }}" class="form-label">Bank Name:</label>
                                <x-front.input-field type="text"
                                    name="bank_accounts[{{ $bankAccount->id }}][bank_name]"
                                    id="bank_name_{{ $bankAccount->id }}" place="Enter Bank Name"
                                    val="{{ $bankAccount->bank_name }}" required="true">
                                    Bank Name:
                                </x-front.input-field>
                            </div>
                            <div class="col-md-4">

                                <label for="branch_name_{{ $bankAccount->id }}" class="form-label">Branch
                                    Name:</label>
                                <x-front.input-field type="text"
                                    name="bank_accounts[{{ $bankAccount->id }}][branch_name]"
                                    id="branch_name_{{ $bankAccount->id }}" place="Enter Branch Name"
                                    val="{{ $bankAccount->branch_name }}" required="true">
                                    Branch Name:
                                </x-front.input-field>
                            </div>

                            <div class="col-md-4">
                                <label for="bank_code_{{ $bankAccount->id }}" class="form-label">Bank Code:</label>
                                <x-front.input-field type="text"
                                    name="bank_accounts[{{ $bankAccount->id }}][bank_code]"
                                    id="bank_code_{{ $bankAccount->id }}" place="Enter Bank Code"
                                    val="{{ $bankAccount->bank_code }}" required="true">
                                    Bank Code:
                                </x-front.input-field>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-4">
                                <label for="address_{{ $bankAccount->id }}" class="form-label">Address:</label>
                                <x-front.input-field type="text"
                                    name="bank_accounts[{{ $bankAccount->id }}][address]"
                                    id="address_{{ $bankAccount->id }}" place="Enter Address"
                                    val="{{ $bankAccount->address }}" required="true">
                                    Address:
                                </x-front.input-field>
                            </div>

                            <div class="col-md-4">

                                <label for="account_name_{{ $bankAccount->id }}" class="form-label">Account
                                    Name:</label>
                                <x-front.input-field type="text"
                                    name="bank_accounts[{{ $bankAccount->id }}][account_name]"
                                    id="account_name_{{ $bankAccount->id }}" place="Enter Account Name"
                                    val="{{ $bankAccount->account_name }}" required="true">
                                    Account Name:
                                </x-front.input-field>
                            </div>

                            <div class="col-md-4">

                                <label for="account_number_{{ $bankAccount->id }}" class="form-label">Account
                                    Number:</label>
                                <x-front.input-field type="text"
                                    name="bank_accounts[{{ $bankAccount->id }}][account_number]"
                                    id="account_number_{{ $bankAccount->id }}" place="Enter Account Number"
                                    val="{{ $bankAccount->account_number }}" required="true">
                                    Account Number:
                                </x-front.input-field>
                            </div>
                        </div>



                        <!-- City -->
                        <div class="row">
                            <div class="col-md-4">
                                <label for="city_{{ $bankAccount->id }}" class="form-label">City:</label>
                                <x-front.input-field type="text"
                                    name="bank_accounts[{{ $bankAccount->id }}][city]"
                                    id="city_{{ $bankAccount->id }}" place="Enter City"
                                    val="{{ $bankAccount->city }}" required="true">
                                    City:
                                </x-front.input-field>
                            </div>

                            <div class="col-md-4">

                                <label for="state_{{ $bankAccount->id }}" class="form-label">State:</label>
                                <x-front.input-field type="text"
                                    name="bank_accounts[{{ $bankAccount->id }}][state]"
                                    id="state_{{ $bankAccount->id }}" place="Enter State"
                                    val="{{ $bankAccount->state }}" required="true">
                                    State:
                                </x-front.input-field>
                            </div>

                            <div class="col-md-4">
                                <label for="zip_{{ $bankAccount->id }}" class="form-label">ZIP Code:</label>
                                <x-front.input-field type="text"
                                    name="bank_accounts[{{ $bankAccount->id }}][zip]"
                                    id="zip_{{ $bankAccount->id }}" place="Enter ZIP Code"
                                    val="{{ $bankAccount->zip }}" required="true">
                                    ZIP Code:
                                </x-front.input-field>
                            </div>
                        </div>


                        <!-- Department -->
                        <div class="row">
                            <div class="col-md-4">
                                <label for="department_{{ $bankAccount->id }}"
                                    class="form-label">Department:</label>
                                <x-front.input-field type="text"
                                    name="bank_accounts[{{ $bankAccount->id }}][department]"
                                    id="department_{{ $bankAccount->id }}" place="Enter Department"
                                    val="{{ $bankAccount->department }}" required="true">
                                    Department:
                                </x-front.input-field>
                            </div>

                            <div class="col-md-4">

                                <label for="country_{{ $bankAccount->id }}" class="form-label">Country:</label>
                                <x-front.input-field type="text"
                                    name="bank_accounts[{{ $bankAccount->id }}][country]"
                                    id="country_{{ $bankAccount->id }}" place="Enter Country"
                                    val="{{ $bankAccount->country }}" required="true">
                                    Country:
                                </x-front.input-field>
                            </div>

                            <div class="col-md-4">

                                <label for="contact_{{ $bankAccount->id }}" class="form-label">Contact:</label>
                                <x-front.input-field type="text"
                                    name="bank_accounts[{{ $bankAccount->id }}][contact]"
                                    id="contact_{{ $bankAccount->id }}" place="Enter Contact"
                                    val="{{ $bankAccount->contact }}" required="true">
                                    Contact:
                                </x-front.input-field>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-md-4">
                                <label for="phone_{{ $bankAccount->id }}" class="form-label">Phone:</label>
                                <x-front.input-field type="text"
                                    name="bank_accounts[{{ $bankAccount->id }}][phone]"
                                    id="phone_{{ $bankAccount->id }}" place="Enter Phone"
                                    val="{{ $bankAccount->phone }}" required="true">
                                    Phone:
                                </x-front.input-field>
                            </div>

                            <div class="col-md-4">

                                <label for="position_{{ $bankAccount->id }}" class="form-label">Position:</label>
                                <x-front.input-field type="text"
                                    name="bank_accounts[{{ $bankAccount->id }}][position]"
                                    id="position_{{ $bankAccount->id }}" place="Enter Position"
                                    val="{{ $bankAccount->position }}" required="true">
                                    Position:
                                </x-front.input-field>
                            </div>
                            <div class="col-md-4">

                                <label for="fax_{{ $bankAccount->id }}" class="form-label">Fax:</label>
                                <x-front.input-field type="text"
                                    name="bank_accounts[{{ $bankAccount->id }}][fax]"
                                    id="fax_{{ $bankAccount->id }}" place="Enter Fax"
                                    val="{{ $bankAccount->fax }}" required="true">
                                    Fax:
                                </x-front.input-field>
                            </div>
                        </div>

                        <!-- Cell -->
                        <div class="row">
                            <div class="col-md-4">
                                <label for="cell_{{ $bankAccount->id }}" class="form-label">Cell:</label>
                                <x-front.input-field type="text"
                                    name="bank_accounts[{{ $bankAccount->id }}][cell]"
                                    id="cell_{{ $bankAccount->id }}" place="Enter Cell"
                                    val="{{ $bankAccount->cell }}" required="true">
                                    Cell:
                                </x-front.input-field>

                            </div>

                            <div class="col-md-4">
                                <label for="email_{{ $bankAccount->id }}" class="form-label">Email:</label>
                                <x-front.input-field type="text"
                                    name="bank_accounts[{{ $bankAccount->id }}][email]"
                                    id="email_{{ $bankAccount->id }}" place="Enter Email"
                                    val="{{ $bankAccount->email }}" required="true">
                                    Email:
                                </x-front.input-field>
                            </div>

                            <div class="col-md-4">

                                <label for="other_{{ $bankAccount->id }}" class="form-label">Other:</label>
                                <x-front.input-field type="text"
                                    name="bank_accounts[{{ $bankAccount->id }}][other]"
                                    id="other_{{ $bankAccount->id }}" place="Enter Other"
                                    val="{{ $bankAccount->other }}" required="true">
                                    Other:
                                </x-front.input-field>
                            </div>
                        </div>



                        <!-- Remarks -->
                        <div class="row">
                            <label for="remarks_{{ $bankAccount->id }}" class="form-label">Remarks:</label>
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



            <h2>Assets</h2>
            <div>
                <button type="button" id="addAssetField" class="btn btn-secondary mb-3">
                    <i class="fa fa-plus"></i> Add Asset
                </button>
            </div>
            <div id="assetFieldsContainer">
                @foreach ($data->debtor->assets as $asset)
                    <div class="asset-field">

                        <x-front.input-field type="hidden" name="assets[{{ $asset->id }}][id]"
                            id="id_{{ $asset->id }}" place="" val="{{ $asset->id }}"
                            required="true" />

                        <!-- Asset Name -->
                        <div class="row">
                            <div class="col-md-4">
                                <label for="name_{{ $asset->id }}" class="form-label">Asset Name:</label>
                                <x-front.input-field type="text" name="assets[{{ $asset->id }}][name]"
                                    id="name_{{ $asset->id }}" place="Enter Asset Name"
                                    val="{{ $asset->name }}" required="true">
                                    Asset Name:
                                </x-front.input-field>
                            </div>

                            <div class="col-md-4">

                                <label for="value_{{ $asset->id }}" class="form-label">Asset Value:</label>
                                <x-front.input-field type="text" name="assets[{{ $asset->id }}][value]"
                                    id="value_{{ $asset->id }}" place="Enter Asset Value"
                                    val="{{ $asset->value }}" required="true">
                                    Asset Value:
                                </x-front.input-field>
                            </div>
                            <div class="col-md-4">

                                <label for="remarks_{{ $asset->id }}" class="form-label">Remarks:</label>
                                <x-front.input-field type="text" name="assets[{{ $asset->id }}][remarks]"
                                    id="remarks_{{ $asset->id }}" place="Enter Remarks"
                                    val="{{ $asset->remarks }}" required="true">
                                    Remarks:
                                </x-front.input-field>
                            </div>
                        </div>



                    </div>
                @endforeach
            </div>


            <button type="button" id="addEmploymentField" class="btn btn-secondary mb-3 mt-2">
                <i class="fa fa-plus"></i> Add Employment
            </button>

            <div id="employmentsContainer">
                @foreach ($data->debtor->employments as $employment)
                    <div class="employment-field">

                        <x-front.input-field type="hidden" name="employments[{{ $employment->id }}][id]"
                            id="employment_id_{{ $employment->id }}" place="" val="{{ $employment->id }}"
                            required="true" />

                        <!-- Employer -->
                        <div class="row">


                            <div class="col-md-4">

                                <label for="employer_{{ $employment->id }}" class="form-label">Employer:</label>
                                <x-front.input-field type="text"
                                    name="employments[{{ $employment->id }}][employer]"
                                    id="employer_{{ $employment->id }}" place="Enter Employer"
                                    val="{{ $employment->employer }}" required="true">
                                    Employer:
                                </x-front.input-field>
                            </div>
                            <div class="col-md-4">

                                <label for="employee_name_{{ $employment->id }}" class="form-label">Employee
                                    Name:</label>
                                <x-front.input-field type="text"
                                    name="employments[{{ $employment->id }}][employee_name]"
                                    id="employee_name_{{ $employment->id }}" place="Enter Employee Name"
                                    val="{{ $employment->employee_name }}" required="true">
                                    Employee Name:
                                </x-front.input-field>
                            </div>
                            <div class="col-md-4">

                                <label for="position_{{ $employment->id }}" class="form-label">Position:</label>
                                <x-front.input-field type="text"
                                    name="employments[{{ $employment->id }}][position]"
                                    id="position_{{ $employment->id }}" place="Enter Position"
                                    val="{{ $employment->position }}" required="true">
                                    Position:
                                </x-front.input-field>
                            </div>
                        </div>


                        <!-- Address -->
                        <div class="row">

                            <div class="col-md-4">

                                <label for="address_{{ $employment->id }}" class="form-label">Address:</label>
                                <x-front.input-field type="text"
                                    name="employments[{{ $employment->id }}][address]"
                                    id="address_{{ $employment->id }}" place="Enter Address"
                                    val="{{ $employment->address }}" required="true">
                                    Address:
                                </x-front.input-field>

                            </div>
                            <div class="col-md-4">

                                <label for="city_{{ $employment->id }}" class="form-label">City:</label>
                                <x-front.input-field type="text" name="employments[{{ $employment->id }}][city]"
                                    id="city_{{ $employment->id }}" place="Enter City"
                                    val="{{ $employment->city }}" required="true">
                                    City:
                                </x-front.input-field>
                            </div>
                            <div class="col-md-4">

                                <label for="state_{{ $employment->id }}" class="form-label">State:</label>
                                <x-front.input-field type="text" name="employments[{{ $employment->id }}][state]"
                                    id="state_{{ $employment->id }}" place="Enter State"
                                    val="{{ $employment->state }}" required="true">
                                    State:
                                </x-front.input-field>
                            </div>
                        </div>



                        <!-- ZIP Code -->
                        <div class="row">


                            <div class="col-md-4">

                                <label for="zip_{{ $employment->id }}" class="form-label">ZIP Code:</label>
                                <x-front.input-field type="text" name="employments[{{ $employment->id }}][zip]"
                                    id="zip_{{ $employment->id }}" place="Enter ZIP Code"
                                    val="{{ $employment->zip }}" required="true">
                                    ZIP Code:
                                </x-front.input-field>
                            </div>
                            <div class="col-md-4">

                                <label for="pay_amount_{{ $employment->id }}" class="form-label">Pay
                                    Amount:</label>
                                <x-front.input-field type="text"
                                    name="employments[{{ $employment->id }}][pay_amount]"
                                    id="pay_amount_{{ $employment->id }}" place="Enter Pay Amount"
                                    val="{{ $employment->pay_amount }}" required="true">
                                    Pay Amount:
                                </x-front.input-field>
                            </div>
                            <div class="col-md-4">

                                <label for="pay_period_{{ $employment->id }}" class="form-label">Pay
                                    Period:</label>
                                <x-front.input-field type="text"
                                    name="employments[{{ $employment->id }}][pay_period]"
                                    id="pay_period_{{ $employment->id }}" place="Enter Pay Period"
                                    val="{{ $employment->pay_period }}" required="true">
                                    Pay Period:
                                </x-front.input-field>
                            </div>
                        </div>

                        <!-- Date Last Paid -->
                        <div class="row">


                            <div class="col-md-4">

                                <label for="date_last_paid_{{ $employment->id }}" class="form-label">Date
                                    Last Paid:</label>
                                <x-front.input-field type="date"
                                    name="employments[{{ $employment->id }}][date_last_paid]"
                                    id="date_last_paid_{{ $employment->id }}" place="Enter Date Last Paid"
                                    val="{{ $employment->date_last_paid }}" required="true">
                                    Date Last Paid:
                                </x-front.input-field>
                            </div>
                            <div class="col-md-4">

                                <label for="date_last_commenced_{{ $employment->id }}" class="form-label">Date Last
                                    Commenced:</label>
                                <x-front.input-field type="date"
                                    name="employments[{{ $employment->id }}][date_last_commenced]"
                                    id="date_last_commenced_{{ $employment->id }}" place="Enter Date Last Commenced"
                                    val="{{ $employment->date_last_commenced }}" required="true">
                                    Date Last Commenced:
                                </x-front.input-field>
                            </div>
                            <div class="col-md-4">

                                <label for="country_{{ $employment->id }}" class="form-label">Country:</label>
                                <x-front.input-field type="text"
                                    name="employments[{{ $employment->id }}][country]"
                                    id="country_{{ $employment->id }}" place="Enter Country"
                                    val="{{ $employment->country }}" required="true">
                                    Country:
                                </x-front.input-field>
                            </div>
                        </div>



                        <!-- Phone -->
                        <div class="row">

                            <div class="col-md-4">

                                <label for="fax_{{ $employment->id }}" class="form-label">Fax:</label>
                                <x-front.input-field type="text" name="employments[{{ $employment->id }}][fax]"
                                    id="fax_{{ $employment->id }}" place="Enter Fax" val="{{ $employment->fax }}"
                                    required="true">
                                    Fax:
                                </x-front.input-field>
                            </div>
                            <div class="col-md-4">

                                <label for="cell_{{ $employment->id }}" class="form-label">Cell:</label>
                                <x-front.input-field type="text" name="employments[{{ $employment->id }}][cell]"
                                    id="cell_{{ $employment->id }}" place="Enter Cell"
                                    val="{{ $employment->cell }}" required="true">
                                    Cell:
                                </x-front.input-field>
                            </div>
                            <div class="col-md-4">

                                <label for="other_{{ $employment->id }}" class="form-label">Other:</label>
                                <x-front.input-field type="text" name="employments[{{ $employment->id }}][other]"
                                    id="other_{{ $employment->id }}" place="Enter Other"
                                    val="{{ $employment->other }}" required="true">
                                    Other:
                                </x-front.input-field>
                            </div>
                        </div>

                        <!-- Fax -->

                    </div>






                    <!-- Date Ceased -->
                    <div class="row">
                        <div class="col-md-4">
                            <label for="date_ceased_{{ $employment->id }}" class="form-label">Date
                                Ceased:</label>
                            <x-front.input-field type="date"
                                name="employments[{{ $employment->id }}][date_ceased]"
                                id="date_ceased_{{ $employment->id }}" place="Enter Date Ceased"
                                val="{{ $employment->date_ceased }}" required="true">
                                Date Ceased:
                            </x-front.input-field>
                        </div>
                        <div class="col-md-4">
                            <label for="phone_{{ $employment->id }}" class="form-label">Phone:</label>
                            <x-front.input-field type="text" name="employments[{{ $employment->id }}][phone]"
                                id="phone_{{ $employment->id }}" place="Enter Phone"
                                val="{{ $employment->phone }}" required="true">
                                Phone:
                            </x-front.input-field>
                        </div>
                        <div class="col-md-4">

                            <label for="length_of_service_{{ $employment->id }}" class="form-label">Length
                                of Service:</label>
                            <x-front.input-field type="text"
                                name="employments[{{ $employment->id }}][length_of_service]"
                                id="length_of_service_{{ $employment->id }}" place="Enter Length of Service"
                                val="{{ $employment->length_of_service }}" required="true">
                                Length of Service:
                            </x-front.input-field>
                        </div>
                    </div>


                    <!-- Remarks -->
                    <div class="row">
                        <label for="remarks_{{ $employment->id }}" class="form-label">Remarks:</label>
                        <x-front.input-field type="text" name="employments[{{ $employment->id }}][remarks]"
                            id="remarks_{{ $employment->id }}" place="Enter Remarks"
                            val="{{ $employment->remarks }}" required="true">
                            Remarks:
                        </x-front.input-field>
                    </div>
                @endforeach
            </div>



            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>



    <script>
        let addressFieldCount = 0;

        document.getElementById("addAddressField").addEventListener("click", function() {
            addressFieldCount++;

            const addressFields = document.createElement("div");
            addressFields.innerHTML = `
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="street_${addressFieldCount}">Street:</label>
                        <input type="text" name="addresses[${addressFieldCount}][street]" class="form-control">

                        </div>

                    <div class="form-group col-md-6 mb-3">
                        <label for="city_${addressFieldCount}">City:</label>
                        <input type="text" name="addresses[${addressFieldCount}][city]" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="country_${addressFieldCount}">Country:</label>
                        <input type="text" name="addresses[${addressFieldCount}][country]" class="form-control">
                    </div>

                    <div class="form-group col-md-6 mb-3">
                        <label for="state_${addressFieldCount}">State:</label>
                        <input type="text" name="addresses[${addressFieldCount}][state]" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="zip_${addressFieldCount}">ZIP Code:</label>
                        <input type="text" name="addresses[${addressFieldCount}][zip]" class="form-control">
                    </div>


                    <div class="form-group col-md-6 mb-3">
                        <label for="type_${addressFieldCount}">Type:</label>
                        <input type="text" name="addresses[${addressFieldCount}][type]" class="form-control">
                    </div>

                    <div class="form-group col-md-6 mb-3">
                        <label for="status_${addressFieldCount}">Status:</label>
                        <select name="addresses[${addressFieldCount}][status]" class="form-control">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                     <div class="form-group col-md-6 mb-3">
                        <label for="remarks_${addressFieldCount}">Remarks:</label>
                        <textarea name="addresses[${addressFieldCount}][remarks]" class="form-control"></textarea>
                    </div>
                </div>

                <button type="button" class="btn btn-danger mb-3" onclick="removeAddressField(${addressFieldCount})">
                    <i class="fa fa-minus"></i> Remove
                </button>
            `;


            addressFields.setAttribute("data-address-field", addressFieldCount);
            document.getElementById("addressFieldsContainer").appendChild(addressFields);
        });

        function removeAddressField(addressFieldNumber) {
            const addressFields = document.getElementById("addressFieldsContainer");
            const addressFieldToRemove = document.querySelector(`[data-address-field="${addressFieldNumber}"]`);

            if (addressFieldToRemove) {
                addressFields.removeChild(addressFieldToRemove);
            }
        }
    </script>

    <script>
        let bankAccountFieldCount = 0;

        document.getElementById("addBankAccountField").addEventListener("click", function() {
            bankAccountFieldCount++;

            const bankAccountFields = document.createElement("div");
            bankAccountFields.innerHTML = `
            <h4>Bank Account #${bankAccountFieldCount}</h4>
            <div class="row">
            <div class="form-group col-md-6 mb-3">
                <label for="bank_name_${bankAccountFieldCount}">Bank Name:</label>
                <input type="text" name="bank_accounts[${bankAccountFieldCount}][bank_name]" class="form-control">
            </div>
            <div class="form-group col-md-6 mb-3">
                <label for="branch_name_${bankAccountFieldCount}">Branch Name:</label>
                <input type="text" name="bank_accounts[${bankAccountFieldCount}][branch_name]" class="form-control">
            </div>
            <div class="form-group col-md-6 mb-3">
                <label for="bank_code_${bankAccountFieldCount}">Bank Code:</label>
                <input type="text" name="bank_accounts[${bankAccountFieldCount}][bank_code]" class="form-control">
            </div>
            <div class="form-group col-md-6 mb-3">
                <label for="address_${bankAccountFieldCount}">Address:</label>
                <input type="text" name="bank_accounts[${bankAccountFieldCount}][address]" class="form-control">
            </div>
            <div class="form-group col-md-6 mb-3">
                <label for="account_name_${bankAccountFieldCount}">Account Name:</label>
                <input type="text" name="bank_accounts[${bankAccountFieldCount}][account_name]" class="form-control">
            </div>
            <div class="form-group col-md-6 mb-3">
                <label for="account_number_${bankAccountFieldCount}">Account Number:</label>
                <input type="text" name="bank_accounts[${bankAccountFieldCount}][account_number]" class="form-control">
            </div>
            <div class="form-group col-md-6 mb-3">
                <label for="city_${bankAccountFieldCount}">City:</label>
                <input type="text" name="bank_accounts[${bankAccountFieldCount}][city]" class="form-control">
            </div>
            <div class="form-group col-md-6 mb-3">
                <label for="state_${bankAccountFieldCount}">State:</label>
                <input type="text" name="bank_accounts[${bankAccountFieldCount}][state]" class="form-control">
            </div>
            <div class="form-group col-md-6 mb-3">
                <label for="zip_${bankAccountFieldCount}">ZIP Code:</label>
                <input type="text" name="bank_accounts[${bankAccountFieldCount}][zip]" class="form-control">
            </div>
            <div class="form-group col-md-6 mb-3">
                <label for="department_${bankAccountFieldCount}">Department:</label>
                <input type="text" name="bank_accounts[${bankAccountFieldCount}][department]" class="form-control">
            </div>
            <div class="form-group col-md-6 mb-3">
                <label for="country_${bankAccountFieldCount}">Country:</label>
                <input type="text" name="bank_accounts[${bankAccountFieldCount}][country]" class="form-control">
            </div>
            <div class="form-group col-md-6 mb-3">
                <label for="contact_${bankAccountFieldCount}">Contact:</label>
                <input type="text" name="bank_accounts[${bankAccountFieldCount}][contact]" class="form-control">
            </div>
            <div class="form-group col-md-6 mb-3">
                <label for="phone_${bankAccountFieldCount}">Phone:</label>
                <input type="text" name="bank_accounts[${bankAccountFieldCount}][phone]" class="form-control">
            </div>
            <div class="form-group col-md-6 mb-3">
                <label for="position_${bankAccountFieldCount}">Position:</label>
                <input type="text" name="bank_accounts[${bankAccountFieldCount}][position]" class="form-control">
            </div>
            <div class="form-group col-md-6 mb-3">
                <label for="fax_${bankAccountFieldCount}">Fax:</label>
                <input type="text" name="bank_accounts[${bankAccountFieldCount}][fax]" class="form-control">
            </div>
            <div class="form-group col-md-6 mb-3">
                <label for="cell_${bankAccountFieldCount}">Cell:</label>
                <input type="text" name="bank_accounts[${bankAccountFieldCount}][cell]" class="form-control">
            </div>
            <div class="form-group col-md-6 mb-3">
                <label for="email_${bankAccountFieldCount}">Email:</label>
                <input type="text" name="bank_accounts[${bankAccountFieldCount}][email]" class="form-control">
            </div>
            <div class="form-group col-md-6 mb-3">
                <label for="other_${bankAccountFieldCount}">Other:</label>
                <input type="text" name="bank_accounts[${bankAccountFieldCount}][other]" class="form-control">
            </div>
            <div class="form-group col-md-6 mb-3">
                <label for="remarks_${bankAccountFieldCount}">Remarks:</label>
                <textarea name="bank_accounts[${bankAccountFieldCount}][remarks]" class="form-control"></textarea>
            </div>
            </div>
            <button type="button" class="btn btn-danger mb-3" onclick="removeBankAccountField(${bankAccountFieldCount})">
                <i class="fa fa-minus"></i> Remove
            </button>
        `;

            bankAccountFields.setAttribute("data-bank-account-field", bankAccountFieldCount);
            document.getElementById("bankAccountFieldsContainer").appendChild(bankAccountFields);
        });

        function removeBankAccountField(bankAccountFieldNumber) {
            const bankAccountFields = document.getElementById("bankAccountFieldsContainer");
            const bankAccountFieldToRemove = document.querySelector(
                `[data-bank-account-field="${bankAccountFieldNumber}"]`);

            if (bankAccountFieldToRemove) {
                bankAccountFields.removeChild(bankAccountFieldToRemove);
            }
        }
    </script>
    <script>
        let assetFieldCount = 0;

        document.getElementById("addAssetField").addEventListener("click", function() {
            assetFieldCount++;

            const assetFields = document.createElement("div");
            assetFields.innerHTML = `
            <h4>Asset #${assetFieldCount}</h4>
            <div class="form-group">
                <label for="assets[${assetFieldCount}][name]">Asset Name:</label>
                <input type="text" name="assets[${assetFieldCount}][name]" class="form-control">
            </div>
            <div class="form-group">
                <label for="assets[${assetFieldCount}][value]">Asset Value:</label>
                <input type="text" name="assets[${assetFieldCount}][value]" class="form-control">
            </div>
            <div class="form-group">
                <label for="assets[${assetFieldCount}][remarks]">Asset Remarks:</label>
                <textarea name="assets[${assetFieldCount}][remarks]" class="form-control"></textarea>
            </div>
        <div>
            <button type="button" class="btn btn-danger mb-3" onclick="removeAssetField(${assetFieldCount})">
                <i class="fa fa-minus"></i> Remove
            </button>
        </div>
        `;

            assetFields.setAttribute("data-asset-field", assetFieldCount);
            document.getElementById("assetFieldsContainer").appendChild(assetFields);
        });

        function removeAssetField(assetFieldNumber) {
            const assetFields = document.getElementById("assetFieldsContainer");
            const assetFieldToRemove = document.querySelector(`[data-asset-field="${assetFieldNumber}"]`);

            if (assetFieldToRemove) {
                assetFields.removeChild(assetFieldToRemove);
            }
        }
    </script>

    <script>
        let employmentCount = 0; // Initialize the employment count
        let nextEmploymentIndex = 0;

        document.getElementById("addEmploymentField").addEventListener("click", function() {
            const employmentsContainer = document.getElementById("employmentsContainer");
            employmentCount++;
            nextEmploymentIndex++;

            const employmentFields = document.createElement("div");
            employmentFields.classList.add("employment-field");
            employmentFields.innerHTML = `
        <div class="row">

            <div class="form-group col-md-6 mb-3">
                <label for="employer_new_${employmentCount}" class="form-label">Employer:</label>
                <input type="text" name="employments[new_${employmentCount}][employer]" id="employer_new_${nextEmploymentIndex}" class="form-control" placeholder="Enter Employer" required>
            </div>

            <div class="form-group col-md-6 mb-3">
                <label for="employee_name_new_${employmentCount}" class="form-label">Employee Name:</label>
                <input type="text" name="employments[new_${employmentCount}][employee_name]" id="employee_name_new_${nextEmploymentIndex}" class="form-control" placeholder="Enter Employee Name" required>
            </div>
            </div>
        <div class="row">

            <div class="form-group col-md-6 mb-3">
                <label for="position_new_${employmentCount}" class="form-label">Position:</label>
                <input type="text" name="employments[new_${employmentCount}][position]" id="position_new_${nextEmploymentIndex}" class="form-control" placeholder="Enter Position" required>
            </div>

            <div class="form-group col-md-6 mb-3">
                <label for="address_new_${employmentCount}" class="form-label">Address:</label>
                <input type="text" name="employments[new_${employmentCount}][address]" id="address_new_${nextEmploymentIndex}" class="form-control" placeholder="Enter Address" required>
            </div>
    </div>

    <div class="row">


            <div class="form-group col-md-6 mb-3">
                <label for="city_new_${employmentCount}" class="form-label">City:</label>
                <input type="text" name="employments[new_${employmentCount}][city]" id="city_new_${nextEmploymentIndex}" class="form-control" placeholder="Enter City" required>
            </div>

            <div class="form-group col-md-6 mb-3">
                <label for="state_new_${employmentCount}" class="form-label">State:</label>
                <input type="text" name="employments[new_${employmentCount}][state]" id="state_new_${nextEmploymentIndex}" class="form-control" placeholder="Enter State" required>
            </div>

     </div>

     <div class="row">


            <div class="form-group col-md-6 mb-3">
                <label for="zip_new_${employmentCount}" class="form-label">ZIP Code:</label>
                <input type="text" name="employments[new_${employmentCount}][zip]" id="zip_new_${nextEmploymentIndex}" class="form-control" placeholder="Enter ZIP Code" required>

                </div>

            <div class="form-group col-md-6 mb-3">
                <label for="pay_amount_new_${employmentCount}" class="form-label">Pay Amount:</label>
                <input type="text" name="employments[new_${employmentCount}][pay_amount]" id="pay_amount_new_${nextEmploymentIndex}" class="form-control" placeholder="Enter Pay Amount" required>
            </div>

        </div>

        <div class="row">

            <div class="form-group col-md-6 mb-3">
                <label for="pay_period_new_${employmentCount}" class="form-label">Pay Period:</label>
                <input type="text" name="employments[new_${employmentCount}][pay_period]" id="pay_period_new_${nextEmploymentIndex}" class="form-control" placeholder="Enter Pay Period" required>
            </div>

            <div class="form-group col-md-6 mb-3">
                <label for="date_last_paid_new_${employmentCount}" class="form-label">Date Last Paid:</label>
                <input type="date" name="employments[new_${employmentCount}][date_last_paid]" id="date_last_paid_new_${nextEmploymentIndex}" class="form-control" required>
            </div>
         </div>

         <div class="row">


            <div class="form-group col-md-6 mb-3">
                <label for="date_last_commenced_new_${employmentCount}" class="form-label">Date Last Commenced:</label>
                <input type="date" name="employments[new_${employmentCount}][date_last_commenced]" id="date_last_commenced_new_${nextEmploymentIndex}" class="form-control" required>
            </div>

            <div class="form-group col-md-6 mb-3">
                <label for="country_new_${employmentCount}" class="form-label">Country:</label>
                <input type="text" name="employments[new_${employmentCount}][country]" id="country_new_${nextEmploymentIndex}" class="form-control" placeholder="Enter Country" required>
            </div>

        </div>
        <div class="row">


            <div class="form-group col-md-6 mb-3">
                <label for="phone_new_${employmentCount}" class="form-label">Phone:</label>
                <input type="text" name="employments[new_${employmentCount}][phone]" id="phone_new_${nextEmploymentIndex}" class="form-control" placeholder="Enter Phone" required>
            </div>

            <div class="form-group col-md-6 mb-3">
                <label for="fax_new_${employmentCount}" class="form-label">Fax:</label>
                <input type="text" name="employments[new_${employmentCount}][fax]" id="fax_new_${nextEmploymentIndex}" class="form-control" placeholder="Enter Fax" required>
            </div>
        </div>

        <div class="row">


            <div class="form-group col-md-6 mb-3">
                <label for="cell_new_${employmentCount}" class="form-label">Cell:</label>
                <input type="text" name="employments[new_${employmentCount}][cell]" id="cell_new_${nextEmploymentIndex}" class="form-control" placeholder="Enter Cell" required>
            </div>

            <div class="form-group col-md-6 mb-3">
                <label for="other_new_${employmentCount}" class="form-label">Other:</label>
                <input type="text" name="employments[new_${employmentCount}][other]" id="other_new_${nextEmploymentIndex}" class="form-control" placeholder="Enter Other" required>
            </div>
        </div>
        <div class="row">


            <div class="form-group col-md-6 mb-3">
                <label for="date_ceased_new_${employmentCount}" class="form-label">Date Ceased:</label>
                <input type="date" name="employments[new_${employmentCount}][date_ceased]" id="date_ceased_new_${nextEmploymentIndex}" class="form-control" required>
            </div>

            <div class="form-group col-md-6 mb-3">
                <label for="length_of_service_new_${employmentCount}" class="form-label">Length of Service:</label>
                <input type="text" name="employments[new_${employmentCount}][length_of_service]" id="length_of_service_new_${nextEmploymentIndex}" class="form-control" placeholder="Enter Length of Service" required>
            </div>

        </div>

        <div class="row">


            <div class="form-group col-md-12 mb-3">
                <label for="remarks_new_${employmentCount}" class="form-label">Remarks:</label>
                <input type="text" name="employments[new_${employmentCount}][remarks]" id="remarks_new_${nextEmploymentIndex}" class="form-control" placeholder="Enter Remarks">
            </div>
         </div>

            <div class="form-group col-md-6 mb-3">
                <button type="button" class="btn btn-danger" onclick="removeEmploymentField(this)">Remove Employment</button>
            </div>
        `;

            employmentsContainer.appendChild(employmentFields);
        });

        function removeEmploymentField(button) {
            const employmentField = button.closest(".employment-field");
            employmentField.remove();
        }
    </script>


</x-front.card>
