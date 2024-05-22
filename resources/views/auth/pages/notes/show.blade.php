<x-auth-layout pageTitle="Note Details">


    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <x-front.card>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for=""><strong>Title:</strong> {{ $data->title ?? 'N/A' }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for=""><strong>Note:</strong> {{ $data->note ?? 'N/A' }}</label>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for=""><strong>Action:</strong> {{ $data->action ?? 'N/A' }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for=""><strong>Note By:</strong> {{ $data->note_by ?? 'N/A' }}</label>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for=""><strong>Note Date:</strong>
                                {{ $data->note_date ? Carbon\Carbon::parse($data->note_date)->format('F j, Y g:i A') : 'N/A' }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for=""><strong>Reviewed:</strong>
                                {{ $data->reviewed == 1 ? 'Yes' : 'N/A' }}</label>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for=""><strong>Review By:</strong> {{ $data->review_by ?? 'N/A' }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for=""><strong>Review Date:</strong>
                                {{ $data->review_date ? Carbon\Carbon::parse($data->review_date)->format('F j, Y g:i A') : 'N/A' }}</label>
                        </div>
                    </div>
                </x-front.card>
            </div>
        </div>
    </div>


</x-auth-layout>
