@extends("layouts.main")

@section("judul")
  Detail Cast
@endsection

@section("content")
<h4>{{ $cast->nama }}</h4>
<p>Usia : {{ $cast->umur }}</p>
<p> Biografi : {{ $cast->bio }}</p>

<a href="/cast" class="btn btn-secondary btn-sm"><< kembali </a>

@endsection