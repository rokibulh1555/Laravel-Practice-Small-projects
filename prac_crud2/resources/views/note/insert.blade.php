<x-layout>
    <h2 class="text-center">This is data Creation table</h2>

    <div class="container mt-3">
        <h2 class="text-center">Enter Data</h2>
        <form action="{{ route("note.insert") }}" method="post" enctype="multipart/form-data">
            @csrf
             <div class="mt-3 mb-3">
                 <label for="name">Name</label>
                 <input type="text" class="form-control" name="name" placeholder="Enter your name...">
             </div>

            <div class="mt-3 mb-3">
                <label for="name">Email:</label>
                <input type="text" class="form-control" name="email" placeholder="Enter your email...">
            </div>

            <div class="mt-3 mb-3">
                <label for="message">Message</label>
                <input type="text" class="form-control" name="message" placeholder="Enter a short message...">
            </div>

            <div class="mt-3 mb-3">
                <label for="image">Upload a image</label>
                <input type="file" required class="form-control" name="image" placeholder="Enter a short message...">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        @if(session()->has('success'))
            <div class="alert alert-success">{{ session()->get('success') }}</div>
        @endif
    </div>
</x-layout>
