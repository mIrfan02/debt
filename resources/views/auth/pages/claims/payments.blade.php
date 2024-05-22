@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif


<x-front.card>
    <table id="myTable" class="table table-hover border">
        <div class="d-flex justify-content-end">
            <a type="button" href="{{ route('payments.create', ['claimId'=>$data->id]) }}" class="btn btn-primary" >
            Create Payment
            </a>
            @include('auth.pages.claims.create-payment')
        </div>
        <thead>
            <tr>
                <th>SR#</th>
                <th>Payment Method</th>
                <th>Amount</th>
                <th>Paid Date</th>
                <th>Client Name</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            @if ($data->payments->isNotEmpty())
                @foreach ($data->payments()->paginate(10) as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->payment_method }}</td>
                        <td>{{ $item->amount }}</td>
                        <td>{{ $item->date_paid }}</td>
                        <td>{{ $item->client_name }}</td>


                        <td>
                            <a href="{{ route('notes.show', $item->id) }}" title="View note details"
                                class="btn btn-sm btn-outline-info">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="{{ route('notes.edit', $item->id) }}" title="Edit {{ $item->name }} detail"
                                class="btn btn-sm btn-outline-warning">
                                <i class="fa fa-edit"></i>
                            </a>
                            <button class="btn btn-sm btn-outline-danger" data-bs-toggle="modal"
                                data-bs-target="#deleteModalNotes_{{ $item->id }}">
                                <i class="fa fa-trash"></i>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="deleteModalNotes_{{ $item->id }}" tabindex="-1"
                                aria-labelledby="deleteModalLabelNotes_{{ $item->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabelNotes_{{ $item->id }}">
                                                Confirm
                                                Deletion</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete this note {{ $item->title }} ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cancel</button>
                                            <form action="{{ route('notes.destroy', $item->id) }}" method="POST">
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
                <p>No data available</p>
            @endif
        </tbody>
    </table>
    <!-- Pagination -->
{{ $data->payments()->paginate(10)->links() }}


</x-front.card>
