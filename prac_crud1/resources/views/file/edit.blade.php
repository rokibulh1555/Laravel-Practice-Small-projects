<x-layout>
    <h2>Edit Page</h2>

    <div class="container mt">
        <h2>Edit Your Data</h2>
        <form action="{{ route('file.update', $data) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mt-3 mb-3">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" value="{{ $data->name }}">
            </div>
            <div class="mt-3 mb-3">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" value="{{ $data->email }}">
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>

        </form>

        @if (session()->has('message'))
            <div class="alert">{{ session()->get('message') }} </div>
        @endif
    </div>
</x-layout>
