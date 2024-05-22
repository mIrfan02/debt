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
    <div class="row justify-content-end mb-3">
        <div class="col-3 d-flex justify-content-end">
            <a href="{{ route('debtors.ticklers.type') }}"><button class="form-control btn btn-success"
                    type="button">Type</button></a>
        </div>
    </div>
    <table id="myTable" class="table table-hover border">
        <thead>
            <tr>
                <th>SR#</th>
                <th>Debtor Name</th>
                <th>Message</th>
                <th>Sent at</th>
                <th>Response</th>
                <th>Receive at</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            @if ($data->debtor->tickler->isNotEmpty())
                @foreach ($data->debtor->tickler as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->debtors->name ?? 'N/A' }}</td>
                        <td>{{ $item->tickler_type->type ?? 'N/A' }} </td>
                        <td>{{ $item->sent_at ? Carbon\Carbon::parse($item->sent_at)->format('F j, Y g:i A') : 'N/A' }}
                        </td>
                        <td>{{ $item->response ?? 'N/A' }}</td>
                        <td>{{ $item->receive_at ? Carbon\Carbon::parse($item->receive_at)->format('F j, Y g:i A') : 'N/A' }}
                        </td>
                        <td>
                            @if ($item->status == 1)
                                Active
                            @else
                                Inactive
                            @endif
                        </td>
                        <td>
                            {{-- <a href="{{ route('debtors.ticklers.show', $item->id) }}" title="View tickler details"
                                class="btn btn-sm btn-outline-info">
                                <i class="fa fa-eye"></i>
                            </a> --}}
                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                data-bs-target="#sendTicklerModal_{{ $item->id }}">
                                <i class="fa fa-paper-plane"></i>
                            </button>
                            <a href="{{ route('debtors.ticklers.edit', $item->id) }}"
                                title="Edit {{ $item->name }} detail" class="btn btn-sm btn-outline-warning">
                                <i class="fa fa-edit"></i>
                            </a>
                            <button class="btn btn-sm btn-outline-danger" data-bs-toggle="modal"
                                data-bs-target="#deleteModal_{{ $item->id }}">
                                <i class="fa fa-trash"></i>
                            </button>

                            <div class="modal fade" id="deleteModal_{{ $item->id }}" tabindex="-1"
                                aria-labelledby="deleteModalLabel{{ $item->id }}" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel{{ $item->id }}">
                                                Confirm
                                                Deletion</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete {{ $item->message }}?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cancel</button>
                                            <form action="{{ route('debtors.ticklers.destroy', $item->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="sendTicklerModal_{{ $item->id }}" tabindex="-1"
                                aria-labelledby="sendTicklerModal_{{ $item->id }}" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <form action="{{ route('debtors.ticklers.send', $item->debtor_id) }}"
                                                method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="message">Message</label>
                                                    <select name="type" class="form-control" required>
                                                        <option value="">Select</option>
                                                        @if ($tickler_types)
                                                            @foreach ($tickler_types as $type)
                                                                <option value="{{ $type->id }}">
                                                                    {{ $type->type }}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>

                                                <button type="button" class="btn btn-secondary mt-3"
                                                    data-bs-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-primary mt-3">Send</button>
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
    {{-- {!! $data->debtor->tickler->links() !!} --}}
</x-front.card>
<script>
    function redirectToSelectedOption(selectElement) {
        const selectedOption = selectElement.value;
        if (selectedOption) {
            window.location.href = selectedOption;
        }
    }
</script>
