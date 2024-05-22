<x-auth-layout pageTitle="Contact Details">


    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <x-front.card>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for=""><strong>Name:</strong> {{ $data->name ?? 'N/A' }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for=""><strong>Relation:</strong> {{ $data->relation ?? 'N/A' }}</label>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for=""><strong>Phone:</strong> {{ $data->phone ?? 'N/A' }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for=""><strong>Status:</strong> {{ $data->status ?? 'N/A' }}</label>
                        </div>
                    </div>

                </x-front.card>
            </div>
        </div>
    </div>

</x-auth-layout>
