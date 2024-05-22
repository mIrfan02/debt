<x-auth-layout pageTitle="All Placement">
    <x-front.card>
        <table id="myTable" class="table table-hover border">
            <thead>
                <tr>
                    <th>SR#</th>
                    <th>Placement Date</th>
                    <th>Contigency Method</th>
                    <th>Method Rate</th>
                    <th>Allocation Method</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data['all']  as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->placement_date}}</td>
                        <td>{{ $item->contigency_method }}</td>
                        <td>
                            @if ($item->sliding_scale)
                                @foreach(json_decode($item->sliding_scale) as $percentage => $amount)
                                    {{ $percentage }} %: {{ $amount }}$ ,<br> <!-- Display sliding scale percentage and amount -->
                                @endforeach
                            @elseif ($item->method_rate)
                                @foreach(json_decode($item->method_rate) as $rate)
                                    {{ $rate }} <!-- Display method rate -->
                                @endforeach
                            @endif
                        </td>



                        <td>{{ $item->allocation_method }}</td>


                        <td>
                            <a href="{{ route('placements.show', $item->id) }}" title="View Placement detail"
                                class="btn btn-sm btn-outline-info">
                                <i class="fa fa-eye"></i>
                            </a>

                            <a href="{{ route('placements.edit', $item->id) }}" title="Edit  detail"
                                class="btn btn-sm btn-outline-warning">
                                <i class="fa fa-edit"></i>
                            </a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </x-front.card>

</x-auth-layout>
