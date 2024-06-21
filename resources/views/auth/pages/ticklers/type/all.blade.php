<x-auth-layout pageTitle="All Tickler Type">

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
                <a href="#">
                    <button class="form-control btn btn-success" data-bs-toggle="modal"
                    data-bs-target="#TicklerTypeModal" type="button">Add</button>
                </a>
            </div>
            <div class="modal fade" id="TicklerTypeModal" tabindex="-1"
                                aria-labelledby="TicklerTypeModal" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <form action="{{ route('debtors.ticklers.save.type') }}"
                                                method="POST">
                                                @csrf

                                                <div class="form-group">
                                                    <label for="message">Tickler Type</label>
                                                    <textarea class="form-control" id="type" name="type" rows="3" placeholder="Enter your type here"></textarea>
                                                </div>

                                                <button type="button" class="btn btn-secondary mt-3"
                                                    data-bs-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-primary mt-3">save</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
        </div>
        <table id="myTable" class="table table-hover border">
            <thead>
                <tr>
                    <th>SR#</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data['all'] as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->type ?? 'NA' }}</td>
                        <td>
                            @if ($item->status == 1)
                                Active
                            @else
                                Inactive
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('debtors.ticklers.show.type', $item->id) }}" title="View tickler details"
                                class="btn btn-sm btn-outline-info">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="{{ route('debtors.ticklers.edit.type', $item->id) }}" title="Edit {{ $item->name }} detail"
                                class="btn btn-sm btn-outline-warning">
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
                                            <h5 class="modal-title" id="deleteModalLabel{{ $item->id }}">Confirm
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
                                            <form action="{{ route('debtors.ticklers.destroy.type', $item->id) }}"
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
            </tbody>
        </table>
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
