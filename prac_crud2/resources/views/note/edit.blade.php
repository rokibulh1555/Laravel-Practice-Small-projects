<x-layout>
    <h2 class="text-center">This is data Creation table</h2>

    <div class="container mt-3">
        <h2 class="text-center">Enter Data</h2>
        <form action="{{ route("note.update", $note) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mt-3 mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="{{ $note->name }}">
            </div>

            <div class="mt-3 mb-3">
                <label for="name">Email:</label>
                <input type="text" class="form-control" name="email" value="{{ $note->email }}">
            </div>

            <div class="mt-3 mb-3">
                <label for="message">Message</label>
                <input type="text" class="form-control" name="message" value="{{ $note->message }}">
            </div>

            <div class="mt-3 mb-3">
                <label for="image">Upload a image</label>
                <input type="file"  class="form-control" name="image">
                @if($note->image)
                    <img src="{{ asset('uploads/'.$note->image) }}" alt="Current Image" class="mt-2" style="max-width: 150px">
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        @if(session()->has('success'))
            <div class="alert alert-success">{{ session()->get('success') }}</div>
        @endif
    </div>
</x-layout>
