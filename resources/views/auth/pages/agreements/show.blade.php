<x-auth-layout pageTitle="Agreement Details">


    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <x-front.card>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for=""><strong>Debtor Name:</strong>
                                {{ $data->debtors->name ?? 'N/A' }}</label>
                        </div>

                        <div class="col-md-6">
                            <label for=""><strong>Status:</strong> {{ $data->status ?? 'N/A' }}</label>
                        </div>

                        <div class="col-md-6">
                            <label for=""><strong>Type:</strong> {{ $data->type ?? 'N/A' }}</label>
                        </div>

                        <div class="col-md-6">
                            <label for=""><strong>Reason:</strong> {{ $data->reason ?? 'N/A' }}</label>
                        </div>

                        <div class="col-md-6">
                            <label for=""><strong>Authority:</strong> {{ $data->authority ?? 'N/A' }}</label>
                        </div>

                        <div class="col-md-6">
                            <label for=""><strong>Remarks:</strong> {{ $data->remarks ?? 'N/A' }}</label>
                        </div>

                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for=""><strong>Amount:</strong> {{ $data->amount ?? 'N/A' }}</label>
                        </div>

                        <div class="col-md-6">
                            <label for=""><strong>Interest Rate:</strong>
                                {{ $data->interest_rate ?? 'N/A' }}</label>
                        </div>

                        <div class="col-md-6">
                            <label for=""><strong>Interest Amount:</strong>
                                {{ $data->interest_amount ?? 'N/A' }}</label>
                        </div>

                        <div class="col-md-6">
                            <label for=""><strong>Total to Pay:</strong>
                                {{ $data->total_to_pay ?? 'N/A' }}</label>
                        </div>

                        <div class="col-md-6">
                            <label for=""><strong>Agreement Date:</strong>
                                {{ $data->agreement_date ? Carbon\Carbon::parse($data->agreement_date)->format('F j, Y g:i A') : 'N/A' }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for=""><strong>Interest From:</strong>
                                {{ $data->interest_from ? Carbon\Carbon::parse($data->interest_from)->format('F j, Y g:i A') : 'N/A' }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for=""><strong>Last Pay:</strong>
                                {{ $data->last_pay ? Carbon\Carbon::parse($data->last_pay)->format('F j, Y g:i A') : 'N/A' }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for=""><strong>Next Pay:</strong>
                                {{ $data->next_pay ? Carbon\Carbon::parse($data->next_pay)->format('F j, Y g:i A') : 'N/A' }}</label>
                        </div>
                    </div>

                </x-front.card>
            </div>
        </div>
    </div>

</x-auth-layout>
