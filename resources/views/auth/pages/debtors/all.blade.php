<x-auth-layout pageTitle="All Debtors">

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
            <thead>
                <tr>
                    <th>SR#</th>
                    <th>Name</th>
                    <th>e-Mail</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data['all'] as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>
                             <a href="{{ route('debtors.show', $item->id) }}" title="View debtor details"
                                class="btn btn-sm btn-outline-info">
                                <i class="fa fa-eye"></i>
                            </a>
                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                data-bs-target="#sendTicklerModal_{{ $item->id }}">
                                <i class="fa fa-paper-plane"></i>
                            </button>
                            <a href="{{ route('debtors.edit', $item->id) }}" title="Edit {{ $item->name }} detail"
                                class="btn btn-sm btn-outline-warning">
                                <i class="fa fa-edit"></i>
                            </a>
                            <button class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteModal_{{ $item->id }}">
                                <i class="fa fa-trash"></i>
                            </button>
                            <div class="mb-3" style="display: inline-block">
                                <select id="actionSelect" class="form-select" onchange="redirectToSelectedOption(this)">
                                    <option value="" disabled selected>Select an action</option>
                                    <option value="{{ route('notes.create', ['debtor' => $item->id]) }}">Add Note</option>
                                    <option value="{{ route('contacts.create', ['debtor' => $item->id]) }}">Add Contact</option>
                                    <option value="{{ route('debtors.remarks.create', ['debtor' => $item->id]) }}">Add Remark</option>
                                    <option value="{{ route('agreements.create', ['debtor' => $item->id]) }}">Add Agreement</option>
                                    <option value="{{ route('placements.create', ['debtor' => $item->id]) }}">Add Placement</option>
                                    <option value="{{ route('claims.create', ['debtor' => $item->id]) }}">Add Claim</option>

                                </select>
                            </div>

                            <div class="modal fade" id="sendTicklerModal_{{ $item->id }}" tabindex="-1"
                                aria-labelledby="sendTicklerModal_{{ $item->id }}" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <form action="{{ route('debtors.ticklers.send', $item->id) }}"
                                                method="POST">
                                                @csrf

                                                <div class="form-group">
                                                    <label for="message">Message</label>
                                                    <select name="type" class="form-control" required>
                                                        <option value="">Select</option>
                                                        @if($tickler_types)
                                                        @foreach ($tickler_types as $type)
                                                        <option value="{{ $type->id }}">{{ $type->type }}</option>
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

                            <div class="modal fade" id="deleteModal_{{ $item->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $item->id }}" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel{{ $item->id }}">Confirm Deletion</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete {{ $item->name }}?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <form action="{{ route('debtors.destroy', $item->id) }}" method="POST">
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
            </tbody>
        </table>
        {!! $data['all']->links() !!}
    </x-front.card>
</x-auth-layout>
<script>
    function redirectToSelectedOption(selectElement) {
        const selectedOption = selectElement.value;
        if (selectedOption) {
            window.location.href = selectedOption;
        }
    }
</script>
