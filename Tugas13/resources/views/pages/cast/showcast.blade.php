@extends("layouts.main")

@section("judul")
  List Cast
@endsection

@section("content")
  <a href="/cast/create" class="btn btn-primary btn-sm">Tambah</a>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Umur</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($cast as $key => $value)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $value->nama }}</td>
            <td>{{ $value->umur }}</td>
            <td>
                <a href="/cast/{{ $value->$id }}" class="btn btn-info btn-sm">detail</a>
            </td>

        </tr>
      @empty
        <tr>
            <td>Data Kosong</td>
        </tr>
      @endforelse

    </tbody>
  </table>
@endsection
