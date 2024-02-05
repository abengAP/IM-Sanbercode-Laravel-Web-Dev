@extends("layouts.main")

@section("judul")
  List Cast
@endsection

@section("content")
  <div class="mb-3">
    <a href="/cast/create" class="btn btn-primary">Tambah</a>
  </div>
  {{-- <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Umur</th>
        <th>Aksi</th>
      </tr>
    </thead>

    <tbody>
      @if ($cast->isEmpty())
        <tr>
          <td>
            <p class="mt-2">-- Data Kosong --</p>
          </td>
        </tr>
      @else
        @foreach ($cast as $key => $value)
          <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->nama }}</td>
            <td>{{ $value->umur }}</td>
            <td>
              <form action="/cast/{{ $value->id }}" method="POST">
                @csrf
                @method("DELETE")
                <a href="/cast/{{ $value->id }}" class="btn btn-info btn-sm">detail</a>
                <a href="/cast/{{ $value->id }}/edit" class="btn btn-primary btn-sm">Edit</a>
                <input type="submit" class="btn btn-danger btn-sm my-1" value="Delete">
              </form>
            </td>
          </tr>
        @endforeach
      @endif
    </tbody>
  </table> --}}

  <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Umur</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>

    @forelse ($cast as $key => $value)
      <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $value->nama }}</td>
        <td>{{ $value->umur }}</td>
        <td>
          <form action="/cast/{{ $value->id }}" method="POST">
            @csrf
            @method("DELETE")
            <a href="/cast/{{ $value->id }}" class="btn btn-info btn-sm">detail</a>
            <a href="/cast/{{ $value->id }}/edit" class="btn btn-primary btn-sm">Edit</a>
            <input type="submit" class="btn btn-danger btn-sm my-1" value="Delete">
          </form>
        </td>

      </tr>
    @empty
      <tr>
        <div>
          <td>
            <h5 class="mt-4 text-center">-- Data Kosong --</h5>
          </td>
        </div>
      </tr>
    @endforelse
  </table>
@endsection
