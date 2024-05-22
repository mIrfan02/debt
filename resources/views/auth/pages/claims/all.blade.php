<x-auth-layout pageTitle="All Claim">

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
<x-front.card >
    <table id="myTable" class="table table-hover border">
        <thead>
            <tr>
                <th>SR#</th>
                <th>Debtor Name</th>
                <th>Portfolio</th>
                <th>Debtor Organization</th>
                <th>Type of Debt</th>
                {{-- <th>Placement Amount</th> --}}
                {{-- <th>Collector</th>
                <th>Interest Start Date</th>
                <th>Pre-Judgment Interest</th>
                <th>Post-Judgment Interest</th>
                <th>Client</th>
                <th>Method Contingency</th>
                <th>Creditor</th>
                <th>Claim Number</th>
                <th>Status</th>
                <th>Date Assigned</th>
                <th>Remarks</th> --}}
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($data['all'] as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->debtor_person }}</td>
                    <td>{{ $item->portfolio }}</td>
                    <td>{{ $item->debtor_organization }}</td>
                    <td>{{ $item->type_of_debt }}</td>

                    <td>
                        <a href="{{ route('claims.show', $item->id) }}" title="View claims details"
                            class="btn btn-sm btn-outline-info">
                            <i class="fa fa-eye"></i>
                        </a>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
    {!! $data['all']->links() !!}
</x-front.card>

</x-auth-layout>




