<x-auth-layout pageTitle="Update Remark details">

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <x-front.card>
                    <form method="POST" action="{{ route('debtors.remarks.update', $data->id) }}" novalidate>
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="title" class="form-label">Title:</label>
                            <x-front.input-field type="text" name="title" id="title" place="Enter note's title" val="{{ $data->title }}" required="true">
                                Full Name:
                            </x-front.input-field>
                        </div>

                        <!-- Date of Birth -->
                        <div class="form-group">
                            <label for="note">Note:</label>
                            <textarea class="form-control" id="remark" name="remark" rows="4" placeholder="Enter your Remark" val="{{ $data->remark }}">{{ $data->remark }}</textarea>
                            @error('remark')
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
