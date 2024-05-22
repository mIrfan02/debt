<x-auth-layout pageTitle="Update Contact details">
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <x-front.card>

                    <div class="d-flex justify-content-end">
                        <a href="{{ route('contacts.index') }}">
                            <button type="button" class="btn btn-info mt-2">All Contacts</button>
                        </a>
                    </div>

                    <form action="{{ route('contacts.update', $data->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="contacts[0][name]" placeholder="Enter name" value="{{ $data['name'] }}">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="relation">Relation:</label>
                            <select class="form-control" id="relation" name="contacts[0][relation]">
                                <option value="self" {{ $data['relation'] === 'self' ? 'selected' : '' }}>Self</option>
                                <option value="brother" {{ $data['relation'] === 'brother' ? 'selected' : '' }}>Brother</option>
                                <option value="sister" {{ $data['relation'] === 'sister' ? 'selected' : '' }}>Sister</option>
                                <option value="wife" {{ $data['relation'] === 'wife' ? 'selected' : '' }}>Wife</option>
                                <option value="son" {{ $data['relation'] === 'son' ? 'selected' : '' }}>Son</option>
                                <option value="father" {{ $data['relation'] === 'father' ? 'selected' : '' }}>Father</option>
                                <option value="mother" {{ $data['relation'] === 'mother' ? 'selected' : '' }}>Mother</option>
                                <option value="cousin" {{ $data['relation'] === 'cousin' ? 'selected' : '' }}>Cousin</option>
                                <option value="uncle" {{ $data['relation'] === 'uncle' ? 'selected' : '' }}>Uncle</option>
                                <option value="other" {{ $data['relation'] === 'other' ? 'selected' : '' }}>Other</option>
                            </select>
                            @error('relation')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="text" class="form-control" id="phone" name="contacts[0][phone]" placeholder="Enter Phone" value="{{ $data['phone'] }}">
                            @error('phone')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="cell">Cell:</label>
                            <input type="text" class="form-control" id="cell" name="contacts[0][cell]" placeholder="Enter Cell" value="{{ $data['cell'] }}">
                            @error('cell')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="status">Status:</label>
                            <input type="text" class="form-control" id="status" name="contacts[0][status]" placeholder="Enter Status" value="{{ $data['status'] }}">
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
    const contactData = {}; // Store your contact data here

    // Initialize contactData with existing data if available
    const existingData = {!! json_encode($data) !!};
    if (existingData) {
        contactData[1] = existingData;
    }

    document.getElementById("addContact").addEventListener("click", function() {
        contactFieldCount++;
        console.log(contactFieldCount);

        const contactFields = document.createElement("div");
        contactFields.innerHTML = `
            <hr>
            <h5>Contact ${contactFieldCount}</h5>
            <div class="form-group">
                <label for="name_${contactFieldCount}">Name:</label>
                <input type="text" class="form-control" name="contacts[${contactFieldCount}][name]" id="name_${contactFieldCount}" placeholder="Enter name" value="${contactData[contactFieldCount]?.name || ''}">
            </div>
            <div class="form-group">
                <label for="relation_${contactFieldCount}">Relation:</label>
                <select class="form-control" name="contacts[${contactFieldCount}][relation]" id="relation_${contactFieldCount}">
                    <!-- Add your options here -->
                </select>
            </div>
            <div class="form-group">
                <label for="phone_${contactFieldCount}">Phone:</label>
                <input type="text" class="form-control" name="contacts[${contactFieldCount}][phone]" id="phone_${contactFieldCount}" placeholder="Enter Phone" value="${contactData[contactFieldCount]?.phone || ''}">
            </div>
            <div class="form-group">
                <label for="cell_${contactFieldCount}">Cell:</label>
                <input type="text" class="form-control" name="contacts[${contactFieldCount}][cell]" id="cell_${contactFieldCount}" placeholder="Enter Cell" value="${contactData[contactFieldCount]?.cell || ''}">
            </div>
            <div class="form-group">
                <label for="status_${contactFieldCount}">Status:</label>
                <input type="text" class="form-control" name="contacts[${contactFieldCount}][status]" id="status_${contactFieldCount}" placeholder="Enter Status" value="${contactData[contactFieldCount]?.status || ''}">
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

