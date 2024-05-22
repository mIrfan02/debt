<x-auth-layout pageTitle="Update Type">

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <x-front.card>
                    <form method="POST" action="{{ route('debtors.ticklers.update.type', $data->id) }}" novalidate>
                        @csrf
                        @method('PUT')

                        <!-- Date of Birth -->
                        <div class="form-group">
                            <label for="note">Type:</label>
                            <textarea class="form-control" id="type" name="type" rows="3" placeholder="Enter your Type" val="{{ $data->type }}">{{ $data->type }}</textarea>
                            @error('message')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <label for="note">Status:</label>
                            <select name="status" class="form-control" required>
                                <option value="1" {{ $data->status == 1 ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ $data->status == 0 ? 'selected' : '' }}>Inactive</option>
                            </select>
                            @error('message')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Update</button>

                    </form>
                </x-front.card>

            </div>
        </div>
    </div>
</x-auth-layout>
