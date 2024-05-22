<style>
    .calculation-card {
        padding: 1rem;
        font-size: 0.85rem;

    }

    hr {
        font-size: 2rem;
        border: 1px solid;
        color: black !important;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
        color: #3E4676;
    }

    .black {
        background-color: #f1f1f1;
        text-align: center;
        color: black !important;
    }

    .scrollable-table {
        max-height: 300px;
        /* Set the maximum height for the table */
        overflow-y: auto;
        /* Enable vertical scroll */
    }
</style>

<x-front.card>

    <!-- Client Details -->
    <h4>Financial Details</h4>

    <div class="row">
        <div class="col-md-6">

            <div class="form-group col-md-6">
                <label for="creditor">Information as of:</label>
                <input type="date" class="form-control" name="information-as-of" id="creditor" readonly
                    value="{{ \Carbon\Carbon::now()->toDateString() }}">
            </div>



            <div class="form-group col-md-6">
                <label for="creditor">Allocation Method:</label>
                <input type="text" class="form-control" name="allocation-method"
                    value="{{ $data->placement->allocation_method ?? 'N/A' }}" id="creditor" readonly>
                @error('creditor')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>


            <div class="form-group col-md-6">
                <label for="creditor">Interest Start Date:</label>
                <input type="text" class="form-control" name="Interest-Start-Date"
                    value="{{ $data->placement->interest_start_date ?? 'N/A' }}" id="creditor" readonly>
                @error('creditor')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>


            <div class="form-group col-md-6">
                <label for="creditor">Post-judgment Interest:</label>
                <input type="text" class="form-control" name="Post-judgment-Interest"
                    value="{{ $data->placement->interest_rate ?? 'N/A' }}" readonly id="creditor">
                @error('creditor')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>


        </div>
        @php
            $subtotal = $data->calculateSumOfAmounts() + floatval(str_replace(',', '', $data->fixed_interest));

            $payments = \App\Models\Payment::where('claim_id', $data->id)->sum('amount');

            $dueAmount = $subtotal - $payments;
        @endphp


        <div class="col-md-6 right-side">
            <div class="card calculation-card">
                <table class="table">
                    <tbody>
                        <tr>
                            <td><label for="principal_amount">Principal Amount</label></td>
                            <td>{{ $data->calculateSumOfAmounts() }}</td>
                        </tr>
                        <tr>
                            <td><label for="addition_principal">Additions to Principal</label></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><label for="accumulated_interest">Accumulated Interest</label></td>
                            <td>{{ $data->fixed_interest }}</td>
                        </tr>
                        <tr>
                            <td><label for="pre_judgment_cost">Post Judgment Cost</label></td>
                            <td>{{ $data->advance_cost }}</td>
                        </tr>
                        {{-- <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr> --}}
                        <tr>
                            <td><label for="sub_total">Sub Total</label></td>
                            <td>{{ $subtotal }}</td>
                        </tr>
                        <tr>
                            <td><label for="payments">Payments</label></td>
                            <td>{{ $payments }}</td>
                        </tr>
                        {{-- <tr>
                                <td colspan="2">
                                    <hr>
                                </td>   ZQ      Q1WE
                            </tr> --}}
                        <tr>
                            <td><label for="balance_due">Balance Due</label></td>
                            <td>{{ $dueAmount }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div class="table-financial scrollable-table">
        <table>
            <thead>
                <tr>
                    <th colspan="4" class="black">Transaction Details</th>
                    <th colspan="3" class="black">Allocations</th>
                    <th colspan="3" class="black">Contingency Fee</th>
                    <th colspan="2" class="black">New</th>


                </tr>
                <tr>
                    <th>Date</th>
                    <th>Description</th>
                    {{-- <th></th> --}}
                    <th>Amount</th>
                    <th>Rate</th>

                    <th>Cost</th>
                    <th>Interest</th>
                    <th>Principle</th>
                    <th>Adv.Cost</th>
                    <th>Agency</th>
                    <th>Client</th>
                    <th>Interest</th>
                    <th>Balance</th>
                </tr>
            </thead>

            <tbody>
                @php
                    $runningTotal = 0;
                    $paymentAmount = 0;
                @endphp
                @foreach ($logsplacement as $log)
                    <tr>
                        @if ($log->log_type == 'Interest Start Date')
                            <td>{{ $log->data }}</td>
                        @else
                            <td>{{ $log->created_at->format('Y-m-d') }}</td>
                        @endif
                        <td>{{ $log->log_type }}</td>


                        @php $dataArray = is_string($log->data) ? json_decode($log->data, true) : $log->data; @endphp

                        @if ($log->log_type == 'Ad-Cost')
                        <td>{{ $dataArray['cost_amount'] ?? '.' }}</td>

                        @else
                        <td>{{ $dataArray['amount'] ?? '.' }}</td>

                        @endif
                        <td>{{ $dataArray['rate'] ?? '.' }}</td>


                        <td></td>
                        <td></td>
                        <td></td>

                        <td></td>
                        <td>
                            @if (isset($dataArray['amount']) && $log->log_type == 'payment')
                                {{ $dataArray['agency'] }}
                            @endif
                        </td>
                        <td>
                            @if (isset($dataArray['amount']) && $log->log_type == 'payment')
                                {{ $dataArray['client'] }}
                            @endif
                        </td>
                        <td>
                            @if (isset($dataArray['amount']) && $log->log_type == 'payment')
                                @if (isset($dataArray['interest']))
                                    {{ $dataArray['interest'] }}
                                @endif
                            @endif
                        </td>



                        @if (isset($dataArray['amount']) && $log->log_type != 'payment')
                            @php $runningTotal += $dataArray['amount']; @endphp
                        @endif

                        @if (isset($dataArray['amount']) && $log->log_type == 'payment')
                            @php $paymentAmount += $dataArray['amount']; @endphp
                        @endif

                        <td>{{ $runningTotal - $paymentAmount }}</td>



                    </tr>
                @endforeach








            </tbody>
        </table>

    </div>

</x-front.card>
