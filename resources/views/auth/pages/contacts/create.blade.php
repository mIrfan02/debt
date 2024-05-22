<x-auth-layout pageTitle="Create Contact">
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <x-front.card>

                    <div class="d-flex justify-content-end">
                        <a href="{{ route('contacts.index') }}">
                            <button type="button" class="btn btn-info mt-2">All Contacts</button>
                        </a>
                    </div>

                    <form action="{{ route('contacts.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="debtorId" id="" value="{{ $debtorId }}">

                        <div class="form-group">
                            <div class="mb-3">
                                <label for="type">Type</label>
                                <select class="form-control" name="contacts[0][type]">
                                    <option value="Attorney">Attorney</option>
                                    <option value="Client">Client</option>
                                    <option value="Co-Debtor">Co-Debtor</option>
                                    <option value="Creditor">Creditor</option>
                                    <option value="Debtor">Debtor</option>
                                    <option value="Bailiff">Bailiff</option>
                                    <option value="Bank">Bank</option>
                                    <option value="Child">Child</option>
                                    <option value="Court">Court</option>
                                    <option value="Court Clerk">Court Clerk</option>
                                    <option value="Credit Bureau">Credit Bureau</option>
                                    <option value="Employee">Employee</option>
                                    <option value="Employer">Employer</option>
                                    <option value="General">General</option>
                                    <option value="Judge">Judge</option>
                                    <option value="Neighbor">Neighbor</option>
                                    <option value="Partner">Partner</option>
                                    <option value="Referral Source">Referral Source</option>
                                    <option value="Salesperson">Salesperson</option>
                                    <option value="Sheriff">Sheriff</option>
                                    <option value="Social Media">Social Media</option>
                                    <option value="Spouse">Spouse</option>
                                    <option value="Trustee">Trustee</option>

                                </select>
                            </div>
                            @error('type')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        </div>

                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="contacts[0][name]"
                                placeholder="Enter name">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="relation">Relation:</label>
                            <select class="form-control" id="relation" name="contacts[0][relation]">
                                <option value="self">Self</option>
                                <option value="brother">Brother</option>
                                <option value="sister">Sister</option>
                                <option value="wife">Wife</option>
                                <option value="son">Son</option>
                                <option value="father">Father</option>
                                <option value="mother">Mother</option>
                                <option value="cousin">Cousin</option>
                                <option value="uncle">Uncle</option>
                                <option value="other">Other</option>
                            </select>
                            @error('relation')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="text" class="form-control" id="phone" name="contacts[0][phone]"
                                placeholder="Enter Phone">
                            @error('phone')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="cell">Cell:</label>
                            <input type="text" class="form-control" id="cell" name="contacts[0][cell]"
                                placeholder="Enter Cell">
                            @error('cell')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="status">Status:</label>
                            <input type="text" class="form-control" id="status" name="contacts[0][status]"
                                placeholder="Enter Status">
                            @error('status')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div id="contact-fields-container">
                            <!-- Cloned Contact Fields Will Go Here -->
                        </div>

                        <button type="button" class="btn btn-secondary mt-2" id="addContact">+ Add Contact</button><br>

                        <button type="submit" class="btn btn-primary mt-2">Submit</button>
                    </form>
                </x-front.card>
            </div>
        </div>
    </div>
</x-auth-layout>

<script>
    let contactFieldCount = 1;

    document.getElementById("addContact").addEventListener("click", function() {
        contactFieldCount++;
        console.log(contactFieldCount);

        const contactFields = document.createElement("div");
        contactFields.innerHTML = `
            <hr>
            <h5>Contact ${contactFieldCount}</h5>
            <div class="form-group">
                <label for="name_${contactFieldCount}">Name:</label>
                <input type="text" class="form-control" name="contacts[${contactFieldCount}][name]" id="name_${contactFieldCount}" placeholder="Enter name">
            </div>


            <div class="form-group">
                            <div class="mb-3">
                                <label for="type_${contactFieldCount}">Type</label>
                                <select class="form-control" name="contacts[${contactFieldCount}][type]">
                                    <option value="Attorney">Attorney</option>
                                    <option value="Client">Client</option>
                                    <option value="Co-Debtor">Co-Debtor</option>
                                    <option value="Creditor">Creditor</option>
                                    <option value="Debtor">Debtor</option>
                                    <option value="Bailiff">Bailiff</option>
                                    <option value="Bank">Bank</option>
                                    <option value="Child">Child</option>
                                    <option value="Court">Court</option>
                                    <option value="Court Clerk">Court Clerk</option>
                                    <option value="Credit Bureau">Credit Bureau</option>
                                    <option value="Employee">Employee</option>
                                    <option value="Employer">Employer</option>
                                    <option value="General">General</option>
                                    <option value="Judge">Judge</option>
                                    <option value="Neighbor">Neighbor</option>
                                    <option value="Partner">Partner</option>
                                    <option value="Referral Source">Referral Source</option>
                                    <option value="Salesperson">Salesperson</option>
                                    <option value="Sheriff">Sheriff</option>
                                    <option value="Social Media">Social Media</option>
                                    <option value="Spouse">Spouse</option>
                                    <option value="Trustee">Trustee</option>

                                </select>
                            </div>
                        </div>



            <div class="form-group">
                <label for="relation_${contactFieldCount}">Relation:</label>
                <select class="form-control" name="contacts[${contactFieldCount}][relation]" id="relation_${contactFieldCount}">
                    <option value="self">Self</option>
                    <option value="brother">Brother</option>
                    <option value="sister">Sister</option>
                    <option value="wife">Wife</option>
                    <option value="son">Son</option>
                    <option value="father">Father</option>
                    <option value="mother">Mother</option>
                    <option value="cousin">Cousin</option>
                    <option value="uncle">Uncle</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="phone_${contactFieldCount}">Phone:</label>
                <input type="text" class="form-control" name="contacts[${contactFieldCount}][phone]" id="phone_${contactFieldCount}" placeholder="Enter Phone">
            </div>
            <div class="form-group">
                <label for="cell_${contactFieldCount}">cell:</label>
                <input type="text" class="form-control" name="contacts[${contactFieldCount}][cell]" id="cell_${contactFieldCount}" placeholder="Enter Cell">
            </div>
            <div class="form-group">
                <label for="status_${contactFieldCount}">Status:</label>
                <input type="text" class="form-control" name="contacts[${contactFieldCount}][status]" id="status_${contactFieldCount}" placeholder="Enter Status">
            </div>
            <button type="button" class="btn btn-danger mt-2 mb-3" onclick="removeContactField(${contactFieldCount})">Remove</button>
        `;

        contactFields.setAttribute("data-contact-field", contactFieldCount);
        document.getElementById("contact-fields-container").appendChild(contactFields);
    });

    function removeContactField(contactFieldNumber) {
        const contactFields = document.getElementById("contact-fields-container");
        const contactFieldToRemove = document.querySelector(`[data-contact-field="${contactFieldNumber}"]`);

        if (contactFieldToRemove) {
            contactFields.removeChild(contactFieldToRemove);
        }
    }
</script>
