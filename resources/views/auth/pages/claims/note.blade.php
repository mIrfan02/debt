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
            <a href="{{ route('notes.create', ['debtor' => $data->debtor->id]) }}">
                <button type="button" class="btn btn-info mt-2">Add Note</button>
            </a>
        </div>
        <thead>
            <tr>
                <th>SR#</th>
                <th>Title</th>
                <th>Note</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($data->debtor->new_notes->isNotEmpty())
                @foreach ($data->debtor->new_notes()->paginate(3) as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->note }}</td>
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
  <!-- Pagination Links -->
<div class="d-flex justify-content-center mt-4">
    {{ $data->debtor->new_notes()->paginate(3)->links() }}
</div>
</x-front.card>
