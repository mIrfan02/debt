<x-auth-layout pageTitle="Update Tickler Message">

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <x-front.card>
                    <form method="POST" action="{{ route('debtors.ticklers.update', $data->id) }}" novalidate>
                        @csrf
                        @method('PUT')

                        <!-- Date of Birth -->
                        <div class="form-group">
                            <label for="note">Message:</label>
                            <select name="type" class="form-control" required>
                                <option value="">Select</option>
                                @if ($tickler_types)
                                    @foreach ($tickler_types as $type)
                                        <option value="{{ $type->id }}"
                                            {{ $type->id == $data->type_id ? 'selected' : '' }}>{{ $type->type }}
                                        </option>
                                    @endforeach
                                @endif
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
