@extends("layouts.main")

@section("judul")
  Detail Cast
@endsection

@section("content")

<h1>{{ $cast->nama }}</h1>
<p>{{ $cast->bio }}</p>

@endsection