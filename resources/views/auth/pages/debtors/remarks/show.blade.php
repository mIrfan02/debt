<x-auth-layout pageTitle="Remark Details">


    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <x-front.card>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for=""><strong>Title:</strong> {{ $data->title ?? 'N/A' }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for=""><strong>Remark:</strong> {{ $data->remark ?? 'N/A' }}</label>
                        </div>
                    </div>

                </x-front.card>
            </div>
        </div>
    </div>

    </x-auth-layout>
