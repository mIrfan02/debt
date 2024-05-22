<x-auth-layout pageTitle="User Details">

    @section('head_button')
        <a href="{{ route('users.edit', $data->id) }}" class="btn btn-warning">Edit {{ $data->name }}</a>
    @endsection

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <x-front.card>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <img src="{{ $data->imageUrl() }}" alt="User profile image" srcset="">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for=""><strong>Name:</strong> {{ $data->name ?? 'N/A' }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for=""><strong>Email:</strong> {{ $data->email ?? 'N/A' }}</label>
                        </div>
                    </div>
                    {{-- <div class="row mb-3">
                        <div class="col-md-6">
                            <label for=""><strong>Phone:</strong> {{ $data->phone ?? 'N/A' }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for=""><strong>ID Number:</strong> {{ $data->id_number ?? 'N/A' }}</label>
                        </div>
                    </div> --}}
                </x-front.card>
            </div>
        </div>
    </div>

</x-auth-layout>
