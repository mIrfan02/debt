<x-auth-layout pageTitle="Placement Detail">

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <x-front.card>
                    <h4>Placements</h4>
                    <hr>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Attribute</th>
                                <th>Value</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <th>Placement Date</th>
                                <td>{{ $data->placement_date ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Contingency Method</th>
                                <td>{{ $data->contingency_method ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Method Rate</th>
                                <td>{{ $data->method_rate ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Interest Start Date</th>
                                <td>{{ $data->interest_start_date ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Allocation Method</th>
                                <td>{{ $data->allocation_method ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Interest Rate</th>
                                <td>{{ $data->interest_rate ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Debt Type</th>
                                <td>{{ $data->debt_type ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Debtor Name</th>
                                <td>{{ $data->debtor->name ?? 'N/A' }}</td>
                            </tr>


                        </tbody>
                    </table>
                    <hr>


                    <h4>Placement Components</h4>
                    <hr>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Amount</th>
                                <th>Rate</th>
                                <th>Date</th>
                                <th>Comments</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $totalamount=0;
                            @endphp
                            @foreach($data->placementComponent as $component)
                            @php
                                $totalamount +=$component->amount;
                            @endphp
                                <tr>
                                    <td>{{ $component->name }}</td>
                                    <td>{{ $component->amount }}</td>
                                    <td>{{ $component->rate ?? 'N/A' }}</td>
                                    <td>{{ $component->date ?? 'N/A' }}</td>
                                    <td>{{ $component->comments ?? 'N/A' }}</td>
                                </tr>

                            @endforeach
                            <tr>
                                <th>Total Amount</th>
                                <td> {{  $totalamount }}</td>
                            </tr>
                        </tbody>
                    </table>


                </x-front.card>

            </div>
        </div>
    </div>
</x-auth-layout>
