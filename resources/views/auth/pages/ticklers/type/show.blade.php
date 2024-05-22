<x-auth-layout pageTitle="Tickler Type Details">

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <x-front.card>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for=""><strong>Type:</strong> {{ $data->type ?? 'NA' }}</label>
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
