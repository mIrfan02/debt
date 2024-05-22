<style>
    .form-group {
        margin-bottom: 20px;
    }

    .sec {
        display: flex;
        justify-content: space-between;
    }

    input {
        width: 100%;
    }
</style>

<x-front.card>
    {{-- <form action="{{ route('legals.store') }}" method="POST" id="myForm">
        @method('POST')
        @csrf

        <!-- Client Details -->
        <h4 style="padding-bottom: 1rem;">Legal captions</h4>

        <!-- Plaintiff Fields -->
        <div class="form-group" id="plaintiffContainer">
            <div class="sec">
                <h4>Plaintiffs</h4>
                <button type="button" class="plus btn btn-success btn-block mt-2"
                    onclick="addFormField('plaintiff')">+</button>
            </div>

            <div>
                <label for="plaintiff1">Plaintiff 1:</label>
                <input type="text" class="form-control" name="plaintiff[1][]" required>
            </div>
        </div>

        <!-- Defendant Fields -->
        <div class="form-group" id="defendantContainer">
            <div class="sec">
                <h4>Defendants</h4>
                <button type="button" class="plus btn btn-success btn-block mt-2"
                    onclick="addFormField('defendant')">+</button>
            </div>
            <div>
                <label for="defendant1">Defendant 1:</label>
                <input type="text" class="form-control" name="defendant[1][]" required>
            </div>
        </div>

        <h4>Bankruptcy</h4>
        <div class="form-group">
            <div class="row">
                <div class="col-md-4">
                    <div>
                        <label for="chapter">chapter</label>
                        <input type="text" class="form-control" name="chapter" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div>
                        <label for="ClosedDate">Closed Date</label>
                        <input type="date" class="form-control" name="closed_date" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div>
                        <label for="reAffirmationAmmount">Re-Affirmation Amount</label>
                        <input type="number" class="form-control" name="re_affirmation_amount" required>
                    </div>
                </div>
            </div>
        </div>



        <div class="form-group">
            <div class="row">
                <div class="col-md-4">
                    <div>
                        <label for="chapter">Case No</label>
                        <input type="text" class="form-control" name="case_number" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div>
                        <label for="ClosedDate">Converted Date</label>
                        <input type="date" class="form-control" name="converted_date" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div>
                        <label for="reAffirmationAmmount">Re-Affirmation Date</label>
                        <input type="date" class="form-control" name="re_affirmation_date" required>
                    </div>
                </div>
            </div>
        </div>


        <div class="form-group">
            <div class="row">
                <div class="col-md-4">
                    <div>
                        <label for="chapter">Location</label>
                        <input type="text" class="form-control" name="location" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div>
                        <label for="ClosedDate">341 Date</label>
                        <input type="date" class="form-control" name="date_341" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div>
                        <label for="reAffirmationAmmount">Arrangment Amount</label>
                        <input type="number" class="form-control" name="arrangement_amount" required>
                    </div>
                </div>
            </div>
        </div>


        <h4>Probate</h4>
        <div class="form-group">
            <div class="row">
                <div class="col-md-4">
                    <div>
                        <label for="chapter">Probate Case Number</label>
                        <input type="text" class="form-control" name="probate_case_number" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div>
                        <label for="ClosedDate">Court Name</label>
                        <input type="text" class="form-control" name="court_name" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div>
                        <label for="reAffirmationAmmount">Date Field</label>
                        <input type="date" class="form-control" name="date_filed" required>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-md-3">
                    <div>
                        <label for="chapter">Date of Death</label>
                        <input type="date" class="form-control" name="date_of_death" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div>
                        <label for="ClosedDate">Country</label>
                        <input type="text" class="form-control" name="county" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div>
                        <label for="reAffirmationAmmount">State</label>
                        <input type="text" class="form-control" name="state" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div>
                        <label for="reAffirmationAmmount">Date Expires</label>
                        <input type="date" class="form-control" name="date_expires" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group col-md-12">
            <label for="remarks">Remarks:</label>
            <textarea class="form-control" name="remarks" id="remarks"></textarea>
            @error('remarks')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form> --}}


    <a class="btn btn-primary float-end mb-2" href="{{ route('legals.create', ['claimId' => $data->id]) }}">
        Add Legal Form
    </a>


    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Chapter</th>
                <th>Case No</th>
                <th>Location</th>
                <th>Closed Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data->legals()->paginate(3) as $legal)
                <tr>

                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $legal->chapter }}</td>
                    <td>{{ $legal->case_number }}</td>
                    <td>{{ $legal->location }}</td>
                    <td>{{ $legal->closed_date }}</td>
                    <td>

                        <a href="{{ route('legals.show', $legal->id) }}" title="View legals details"
                            class="btn btn-sm btn-outline-info">
                            <i class="fa fa-eye"></i>
                        </a>

                        <a href="{{ route('legals.edit', $legal->id) }}" class="btn btn-sm btn-outline-warning"
                            title="Update legals details">
                            <i class="fa fa-edit"></i>
                        </a>
                        <button class="btn btn-sm btn-outline-danger" data-bs-toggle="modal"
                            data-bs-target="#deleteModal{{ $legal->id }}">
                            <i class="fa fa-trash"></i>
                        </button>
                        <!-- Delete Modal for each legal -->
                        <div class="modal fade" id="deleteModal{{ $legal->id }}" tabindex="-1"
                            aria-labelledby="deleteModalLabel{{ $legal->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel{{ $legal->id }}">Confirm
                                            Deletion</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete this legal?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <form action="{{ route('legals.destroy', $legal->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Delete Modal -->
                    </td>

                </tr>
            @endforeach


        </tbody>
    </table>





</x-front.card>
{{-- <script>
    function addFormField(group) {
        var container = document.getElementById(group + "Container");
        var div = document.createElement("div");
        var groupCount = container.querySelectorAll('[name^="' + group + '"]').length + 1;

        div.innerHTML = '<label for="' + group + groupCount + '">' + group.charAt(0).toUpperCase() + group.slice(1) +
            ' ' + groupCount + ':</label>' +
            '<input type="text" name="' + group + '[' + groupCount + '][]" class="form-control" required>';

        container.appendChild(div);
    }
</script> --}}
{{-- <script>
    function addFormField(group) {
        var container = document.getElementById(group + "Container");
        var div = document.createElement("div");
        var groupCount = container.querySelectorAll('[name^="' + group + '"]').length + 1;

        div.innerHTML = '<label for="' + group + groupCount + '">' + group.charAt(0).toUpperCase() + group.slice(1) +
            ' ' + groupCount + ':</label>' +
            '<input type="text" name="' + group + '[' + groupCount + '][]" class="form-control" required>' +
            '<button type="button" class="minus btn btn-danger mt-2" onclick="removeFormField(this)">-</button>';

        container.appendChild(div);
    }

    function removeFormField(button) {
        var div = button.parentNode;
        div.parentNode.removeChild(div);
    }
</script> --}}
