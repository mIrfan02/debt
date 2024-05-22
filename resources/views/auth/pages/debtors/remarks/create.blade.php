<x-auth-layout pageTitle="Add Remark">

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <x-front.card>

                    <div class="d-flex justify-content-end">
                        <a href="{{ route('debtors.remarks.index') }}">
                            <button type="button" class="btn btn-info mt-2">All Remarks</button>
                        </a>
                    </div>

                    <form action="{{ route('debtors.remarks.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="debtorid" value="{{ $debtor }}">
                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" class="form-control" id="title" name="title"
                                placeholder="Enter title">
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="note">Remark:</label>
                            <textarea class="form-control" id="remark" name="remark" rows="4" placeholder="Enter your Remark"></textarea>
                            @error('remark')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Submit</button>
                    </form>
                </x-front.card>
            </div>
        </div>
    </div>
</x-auth-layout>
