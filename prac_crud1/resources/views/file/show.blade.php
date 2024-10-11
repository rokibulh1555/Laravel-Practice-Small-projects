<x-layout>
    <h2 class="text-center">This is Show page</h2>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <div class="container mt-3">
        <h3 class="text-center">Table Data's</h3>
        <table class="table table-striped">
           <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
           </thead>

           <tbody>
            @foreach ($rokib as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>

                    <td>
                        <a href="{{ route('file.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    </td>

                    <td>
                        <form action="{{ route('file.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure that you want to delete this?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button> 
                        </form>
                    </td>
                </tr>
            @endforeach
           </tbody>
        </table>
    </div>
</x-layout>