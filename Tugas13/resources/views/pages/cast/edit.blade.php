@extends("layouts.main")

@section("judul")
  Edit Cast
@endsection

@section("content")
  <form action="/cast/{{ $cast->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label>Nama</label>
      <input type="text" name="nama" class="form-control" value="{{ $cast->nama }}">
    </div>
    @error("nama")
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
      <label>Umur</label>
      <input type="text" name="umur" class="form-control" value="{{ $cast->umur }}">
    </div>
    @error("umur")
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
      <label>Bio</label>
      <textarea name="bio" class="form-control">{{ $cast->bio }}</textarea>
    </div>
    @error("bio")
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
