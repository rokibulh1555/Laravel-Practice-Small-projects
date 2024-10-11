<x-layout>
    <h2>Insert</h2>

    <div class="container mt">
        <h2>Insert Your Data</h2>
        <form action="{{ route('file.insert') }}" method="POST">
            @csrf
            <div class="mt-3 mb-3">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Name....">
            </div>
            <div class="mt-3 mb-3">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" placeholder="Enter Email....">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>

        @if (session()->has('message'))
            <div class="alert">{{ session()->get('message') }} </div>
        @endif
    </div>
</x-layout>
