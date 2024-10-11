<x-layout>

    @if(session()->has('success'))
        <div class="alert alert-success text-center w-50 mx-auto">{{ session()->get('success') }}</div>
    @endif
    <div class="container mt-3">
        <p class="text-center fs-2 fw-bolder">Table Data's</p>
        <table class="table table-striped">
          <thead>
          <tr>
              <td>ID</td>
              <td>Name</td>
              <td>Email</td>
              <td>Message</td>
              <td>Image</td>
          </tr>
          </thead>

            <tbody>
            @foreach($person as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->message }}</td>
                    <td><img src="{{ asset('uploads/'.$item->image) }}" class="rounded-circle img-fluid img-thumbnail" width="40" height="40" alt="Null_Rok"></td>

                    <td>
                        <a href="{{ route('note.edit', $item) }}" class="btn btn-primary btn-sm">Edit</a>
                    </td>

                    <td>

                        <form action="{{ route('note.destroy', $item) }}" method="post">
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
