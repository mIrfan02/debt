<x-auth-layout pageTitle="Create Debtor">
    <style>
        .container {
            max-width: 100%;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
            border-radius: 5px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
        }
    </style>
    <x-front.card>
        {{-- <div class="container"> --}}
        <form action="{{ route('debtors.store') }}" method="POST">
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
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group col-md-6 mb-3">
                    <label for="dob">Date of Birth:</label>
                    <input type="date" name="dob" class="form-control @error('dob') is-invalid @enderror"
                        required>
                    @error('dob')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 mb-3">
                    <label for="ssn">Social Security Number (SSN):</label>
                    <input type="text" name ="ssn" class="form-control @error('ssn') is-invalid @enderror"
                        required>
                    @error('ssn')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group col-md-6 mb-3">
                    <label for="position">Position:</label>
                    <input type="text" name="position" class="form-control @error('position') is-invalid @enderror"
                        required>
                    @error('position')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 mb-3">
                    <label for="company">Company:</label>
                    <input type="text" name="company" class="form-control @error('company') is-invalid @enderror"
                        required>
                    @error('company')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group col-md-6 mb-3">
                    <label for="driver_license1">Driver License 1:</label>
                    <input type="text" name="driver_license1"
                        class="form-control @error('driver_license1') is-invalid @enderror" required>
                    @error('driver_license1')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 mb-3">
                    <label for="organization">Organization:</label>
                    <input type="text" name="organization"
                        class="form-control @error('organization') is-invalid @enderror" required>
                    @error('organization')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group col-md-6 mb-3">
                    <label for="driver_license2">Driver License 2:</label>
                    <input type="text" name="driver_license2"
                        class="form-control @error('driver_license2') is-invalid @enderror">
                    @error('driver_license2')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 mb-3">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group col-md-6 mb-3">
                    <label for="phone">Phone:</label>
                    <input type="tel" name="phone" class="form-control @error('phone') is-invalid @enderror">
                    @error('phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 mb-3">
                    <label for="fax">Fax:</label>
                    <input type="tel" name="fax" class="form-control @error('fax') is-invalid @enderror">
                    @error('fax')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group col-md-6 mb-3">
                    <label for="alias1">Alias 1:</label>
                    <input type="text" name="alias1" class="form-control @error('alias1') is-invalid @enderror">
                    @error('alias1')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 mb-3">
                    <label for="cell">Cell:</label>
                    <input type="tel" name="cell" class="form-control @error('cell') is-invalid @enderror">
                    @error('cell')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group col-md-6 mb-3">
                    <label for="other">Other:</label>
                    <input type="text" name="other" class="form-control @error('other') is-invalid @enderror">
                    @error('other')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-4 mb-3">
                    <label for="alias2">Alias 2:</label>
                    <input type="text" name="alias2" class="form-control @error('alias2') is-invalid @enderror">
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
                        @if(isset($clients))
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
                    <textarea name="remarks" class="form-control @error('remarks') is-invalid @enderror"></textarea>
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
            </div>

            {{-- for bank account --}}
            <h2>Bank Account Details</h2>

            <button type="button" id="addBankAccountField" class="btn btn-secondary mb-3 mt-2">
                <i class="fa fa-plus"></i> Add Bank Account
            </button>

            <div id="bankAccountFieldsContainer">
            </div>


            <!-- Assets Section -->
            <h2>Assets</h2>
            <div id="assetFieldsContainer">
            </div>
            <div>
                <button type="button" id="addAssetField" class="btn btn-secondary mb-3">
                    <i class="fa fa-plus"></i> Add Asset
                </button>
            </div>

            {{-- employement here --}}
            <button type="button" id="addEmploymentField" class="btn btn-secondary mb-3 mt-2">
                <i class="fa fa-plus"></i> Add Employment
            </button>

            <div id="employmentsContainer">
                <!-- Existing employments go here -->
            </div>



            <button type="submit" class="btn btn-primary">Submit</button>
        </form>


        {{-- </div> --}}
    </x-front.card>
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
</x-auth-layout>
