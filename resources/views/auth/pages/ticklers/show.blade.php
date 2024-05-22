<x-auth-layout pageTitle="Tickler Message Details">


    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <x-front.card>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for=""><strong>Debtor Name:</strong>
                                {{ $data->debtors->name ?? 'NA' }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for=""><strong>Message:</strong>
                                {{ $data->tickler_type->type ?? 'N/A' }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for=""><strong>Response:</strong> {{ $data->response ?? 'N/A' }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for=""><strong>Sent at:</strong>
                                {{ $data->sent_at ? Carbon\Carbon::parse($data->sent_at)->format('F j, Y g:i A') : 'N/A' }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for=""><strong>Receive at:</strong>
                                {{ $data->receive_at ? Carbon\Carbon::parse($data->receive_at)->format('F j, Y g:i A') : 'N/A' }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for=""><strong>Status:</strong>
                                @if ($data->status == 1)
                                    Active
                                @elseif ($data->status == 0)
                                    Inactive
                                @else
                                    N/A
                                @endif
                            </label>
                        </div>
                    </div>

                </x-front.card>
            </div>
        </div>
    </div>

</x-auth-layout>
