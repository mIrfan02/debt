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

        #contactBtn {
            margin-left: 10px;
            margin-top: 0;
        }
    </style>
    {{-- @dd($data->debtor->contacts_new) --}}
    <div class="container" style="width: 100%">
        <h2>Claim Detail</h2>
        <form id="claimUpdate">
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="claimNumber">Claim Number</label>
                        <input type="text" class="form-control" id="claimNumber" name="claim_number"
                            value="{{ $data->claim_number }}" readonly>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="clientClaimNumber">Client Claim No.</label>
                        <input type="text" class="form-control" id="clientClaimNumber" name="client_claim_no">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="balanceAmount">Balance Amount</label>
                        <input type="text" class="form-control" id="balanceAmount" name="balance_amount">
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="claimStatus">Claim Status</label>
                        <input type="text" class="form-control" id="claimStatus" name="status"
                            value="{{ $data->status }}">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="creditorClaimNumber">Creditor Claim No.</label>
                        <input type="text" class="form-control" id="creditorClaimNumber" name="creditor_claim_no">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="balanceDate">Balance Date</label>
                        <input type="date" class="form-control" id="balanceDate" name="balance_date">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="collector">Collector</label>
                        <input type="text" class="form-control" value="{{ $data->status }}" id="collector"
                            name="collector">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="portfolio">Portfolio</label>
                        <input type="text" class="form-control" id="portfolio" name="portfolio"
                            value="{{ $data->portfolio }}">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="dateAssigned">Date Assigned</label>
                        <input type="date" class="form-control" id="dateAssigned" name="date_assigned"
                            value="{{ $data->date_assigned }}">
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="flags">Flags</label>
                        <input type="text" class="form-control" id="flags" name="flags">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="dateClosed">Date Closed</label>
                        <input type="date" class="form-control" id="dateClosed" name="date_closed">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="reference">Reference</label>
                        <input type="text" class="form-control" id="reference" name="reference">
                    </div>
                </div>

            </div>
            <button type="submit" id="claimSubmit" class="btn btn-primary">Submit</button>


        </form>

        <div class="container">
            <div class="button-with-heading d-flex">
                <h2 class="mt-2"> Contact Details Form</h2>
                <button type="button" class="btn btn-success btn-block mt-2" id="contactBtn" data-bs-toggle="modal"
                    data-bs-target="#myModal">+</button>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Contact</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <form action="{{ route('contacts.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="debtorId" value="{{ $data->debtor_id }}">
                                <div class="mb-3">
                                    <label for="type" class="form-label">Type</label>
                                    <select class="form-select" name="contacts[0][type]">
                                        <option value="" disabled selected>Choose option</option>

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

                                <div class="mb-3">
                                    <label for="person" class="form-label">Person</label>
                                    <input type="text" class="form-control" name="contacts[0][name]">
                                </div>

                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="number" class="form-control" name="contacts[0][phone]">
                                </div>

                                <div class="mb-3">
                                    <label for="cell" class="form-label">Cell</label>
                                    <input type="number" class="form-control" name="contacts[0][cell]">
                                </div>

                                <div class="mb-3">
                                    <label for="relationship" class="form-label">Relationship</label>
                                    <select class="form-select" name="contacts[0][relation]">
                                        <option value="" disabled selected>Choose option</option>

                                        <option value="brother">Brother</option>
                                        <option value="sister">Sister</option>
                                        <option value="father">Father</option>
                                        <option value="mother">Mother</option>
                                        <option value="wife">Wife</option>
                                        <option value="son">Son</option>
                                        <option value="daughter">Daughter</option>
                                        <option value="uncle">Uncle</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <input type="text" class="form-control" name="contacts[0][status]">
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <form action="{{ route('claim.contacts.update') }} " method="POST">
                @csrf
                @method('POST')
                <div id="contactDetailsContainer" class="contact-container">

                    @foreach ($data->debtor->contacts_new as $contact)
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="type">Type</label>
                                    <select class="form-control" name="contacts[{{ $contact->id }}][type]">
                                        @foreach (['Attorney', 'Client', 'Co-Debtor', 'Creditor', 'Debtor', 'Bailiff', 'Bank', 'Child', 'Court', 'Court Clerk', 'Credit Bureau', 'Employee', 'Employer', 'General', 'Judge', 'Neighbor', 'Partner', 'Referral Source', 'Salesperson', 'Sheriff', 'Social Media', 'Spouse', 'Trustee'] as $option)
                                            <option value="{{ $option }}"
                                                {{ $contact->type == $option ? 'selected' : '' }}>{{ $option }}
                                            </option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="person">Person</label>
                                    <input type="text" class="form-control"
                                        name="contacts[{{ $contact->id }}][name]" value="{{ $contact->name }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control"
                                        name="contacts[{{ $contact->id }}][phone]" value="{{ $contact->phone }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="cell">Cell</label>
                                    <input type="text" class="form-control"
                                        name="contacts[{{ $contact->id }}][cell]" value="{{ $contact->cell }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="relationship">Relationship</label>
                                    <select class="form-control" name="contacts[{{ $contact->id }}][relation]">
                                        <option value="brother"
                                            {{ $contact->relation == 'brother' ? 'selected' : '' }}>Brother</option>
                                        <option value="sister" {{ $contact->relation == 'sister' ? 'selected' : '' }}>
                                            Sister</option>
                                        <option value="father" {{ $contact->relation == 'father' ? 'selected' : '' }}>
                                            Father</option>
                                        <option value="mother" {{ $contact->relation == 'mother' ? 'selected' : '' }}>
                                            Mother</option>
                                        <option value="wife" {{ $contact->relation == 'wife' ? 'selected' : '' }}>
                                            Wife</option>
                                        <option value="son" {{ $contact->relation == 'son' ? 'selected' : '' }}>Son
                                        </option>
                                        <option value="daughter"
                                            {{ $contact->relation == 'daughter' ? 'selected' : '' }}>Daughter</option>
                                        <option value="uncle" {{ $contact->relation == 'uncle' ? 'selected' : '' }}>
                                            Uncle</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="status">Status</label>
                                    <input type="text" class="form-control"
                                        name="contacts[{{ $contact->id }}][status]" value="{{ $contact->status }}">
                                </div>
                            </div>


                        </div>
                    @endforeach


                </div>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>

            </form>
        </div>



    </div>
    {{-- <div class="container mt-5">
        <h2 style="text-shadow: 0px 10px 4px rgba(0, 0, 0, 0.4);">Notes</h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Sr</th>
                    <th scope="col">Action</th>
                    <th scope="col">Date</th>
                    <th scope="col">Comment/Note</th>
                    <th scope="col">Review Date</th>
                    <th scope="col">Actions</th>

                </tr>
            </thead>
            <tbody>
                @if ($data->debtor->new_notes->isNotEmpty())
                    @foreach ($data->debtor->new_notes->sortByDesc('note_date')->take(3) as $note)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $note->action }}</td>
                            <td>{{ $note->note_date }}</td>
                            <td>{{ $note->note }}</td>
                            <td>{{ $note->review_date }}</td>
                            <td>

                                <button type="button" class="btn btn-sm btn-outline-warning" data-bs-toggle="modal"
                                    data-bs-target="#editModal{{ $note->id }}">
                                    <i class="fa fa-edit"></i> Edit
                                </button>

                                @include('auth.pages.claims.notes-update-modal')

                                <button class="btn btn-sm btn-outline-danger" data-bs-toggle="modal"
                                    data-bs-target="#deleteModalNotes_{{ $note->id }}">
                                    <i class="fa fa-trash"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="deleteModalNotes_{{ $note->id }}" tabindex="-1"
                                    aria-labelledby="deleteModalLabelNotes_{{ $note->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title"
                                                    id="deleteModalLabelNotes_{{ $note->id }}">
                                                    Confirm
                                                    Deletion</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete this note {{ $note->title }} ?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                                <form action="{{ route('notes.destroy', $note->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="6" class="text-center">No Data to Show</td>
                    </tr>
                @endif

            </tbody>
        </table>
    </div> --}}


    {{-- <div class="container mt-5">
        <div class="d-flex justify-content-between">
            <h1>Payments</h1>
            <button type="button" class="btn btn-success mt-2 mb-2" data-bs-toggle="modal"
                data-bs-target="#addPaymentModal">
                <i class="fa fa-plus"></i> Add Payment
            </button>
            @include('auth.pages.claims.add-payments')
        </div>
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Payment</th>
                    <th>Amount</th>
                    <th>Comment</th>
                    <th>Paid Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data->payments()->paginate(3) as $payment)
                    <tr>

                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $payment->payment_method }}</td>
                        <td>{{ $payment->amount }}</td>
                        <td>{{ $payment->comment }}</td>
                        <td>{{ $payment->date_paid }}</td>

                        <td>
                            <a href="#" title="View details" class="btn btn-sm btn-outline-info">
                                <i class="fa fa-eye"></i>
                            </a>
                            <button class="btn btn-sm btn-outline-warning" data-bs-toggle="modal"
                                data-bs-target="#editPaymentModal{{ $payment->id }}">
                                <i class="fa fa-edit"></i>
                            </button>
                            <button class="btn btn-sm btn-outline-danger" data-bs-toggle="modal"
                                data-bs-target="#deleteModal{{ $payment->id }}">
                                <i class="fa fa-trash"></i>
                            </button>
                            <!-- Delete Modal for each payment -->
                            <div class="modal fade" id="deleteModal{{ $payment->id }}" tabindex="-1"
                                aria-labelledby="deleteModalLabel{{ $payment->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel{{ $payment->id }}">Confirm
                                                Deletion</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete this payment?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cancel</button>
                                            <form action="{{ route('payments.destroy', $payment->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Delete Modal -->
                            <!-- Edit Modal for each payment -->
                            <div class="modal fade" id="editPaymentModal{{ $payment->id }}" tabindex="-1"
                                aria-labelledby="editPaymentModal{{ $payment->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editPaymentModal{{ $payment->id }}">Edit
                                                Payment</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Edit Payment Form -->
                                            <form action="{{ route('payments.update', $payment->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="claim_id" value="{{ $data->id }}">

                                                <div class="mb-3">
                                                    <label for="payment_method" class="form-label">Payment
                                                        Method</label>
                                                    <input type="text" class="form-control" id="payment_method"
                                                        name="payment_method" value="{{ $payment->payment_method }}"
                                                        required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="amount" class="form-label">Amount</label>
                                                    <input type="text" class="form-control" id="amount"
                                                        name="amount" value="{{ $payment->amount }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="comment" class="form-label">Comment</label>
                                                    <textarea class="form-control" id="comment" name="comment" rows="3" required>{{ $payment->comment }}</textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="date_paid" class="form-label">Date Paid</label>
                                                    <input type="date" class="form-control" id="date_paid"
                                                        name="date_paid" value="{{ $payment->date_paid }}" required>
                                                </div>

                                                <button type="submit" class="btn btn-primary">Update Payment</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Edit Modal -->
                        </td>

                    </tr>
                @endforeach


            </tbody>
        </table>
        <div class="d-flex justify-content-center mt-4">
            {{ $data->payments()->paginate(2)->links() }}
        </div>

    </div> --}}


    {{-- <div class="container mt-5">
        <div class="d-flex justify-content-between">
            <h1>Cost</h1>
            <button type="button" class="btn btn-success mt-2 mb-2" data-bs-toggle="modal"
                data-bs-target="#addcostModal">
                <i class="fa fa-plus"></i> Add Cost
            </button>
            @include('auth.pages.claims.add-cost')
        </div>
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Cost</th>
                    <th>Amount</th>
                    <th>Comment</th>
                    <th>Date Incurred</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data->costs()->paginate(3) as $cost)
                    <tr>

                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $cost->cost }}</td>
                        <td>{{ $cost->amount }}</td>
                        <td>{{ $cost->comment }}</td>
                        <td>{{ $cost->date_incurred }}</td>





                        <td>

                            <button class="btn btn-sm btn-outline-warning" data-bs-toggle="modal"
                                data-bs-target="#editcostModal{{ $cost->id }}">
                                <i class="fa fa-edit"></i>
                            </button>
                            <button class="btn btn-sm btn-outline-danger" data-bs-toggle="modal"
                                data-bs-target="#deleteModal{{ $cost->id }}">
                                <i class="fa fa-trash"></i>
                            </button>
                            <!-- Delete Modal for each cost -->
                            <div class="modal fade" id="deleteModal{{ $cost->id }}" tabindex="-1"
                                aria-labelledby="deleteModalLabel{{ $cost->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel{{ $cost->id }}">Confirm
                                                Deletion</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete this cost?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cancel</button>
                                            <form action="{{ route('costs.destroy', $cost->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Delete Modal -->



                            <!-- Edit Modal for each cost -->
                            <div class="modal fade" id="editcostModal{{ $cost->id }}" tabindex="-1"
                                aria-labelledby="editcostModal{{ $cost->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editcostModal{{ $cost->id }}">Edit
                                                Cost</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Edit cost Form -->
                                            <form action="{{ route('costs.update', $cost->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="claim_id" value="{{ $data->id }}">

                                                <div class="mb-3">
                                                    <label for="cost_method" class="form-label">cost
                                                        Method</label>
                                                    <input type="text" class="form-control" id="cost"
                                                        name="cost" value="{{ $cost->cost }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="amount" class="form-label">Amount</label>
                                                    <input type="text" class="form-control" id="amount"
                                                        name="amount" value="{{ $cost->amount }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="comment" class="form-label">Comment</label>
                                                    <textarea class="form-control" id="comment" name="comment" rows="3" required>{{ $cost->comment }}</textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="date_paid" class="form-label">Date Incurred</label>
                                                    <input type="date" class="form-control" id="date_paid"
                                                        name="date_incurred" value="{{ $cost->date_incurred }}"
                                                        required>
                                                </div>

                                                <button type="submit" class="btn btn-primary">Update Payment</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Edit Modal -->


                        </td>

                    </tr>
                @endforeach


            </tbody>
        </table>
        <div class="d-flex justify-content-center mt-4">
            {{ $data->costs()->paginate(2)->links() }}
        </div>

    </div> --}}



    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#claimSubmit').click(function(event) {
                event.preventDefault();

                var formData = $('#claimUpdate').serialize();
                var csrfToken = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    type: 'PUT',
                    url: '{{ route('claims.update', $data->id) }}',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    data: formData,
                    success: function(data) {
                        console.log("success");
                        //  $('#claimUpdate').find('input, select, textarea').val('');
                    },
                    error: function(error) {
                        console.log("error" + error);

                    }
                });
            });
        });
    </script>


</x-front.card>
