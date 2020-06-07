@extends('assets.app')

@section('title')
{{$konten[0]->judul}}
@endsection

@section('content')

<div class="row justify-content-center">
    <h2>{{$konten[0]->judul}}</h2>
</div>
<div class="card">
    <div class="card-body">
        {{$konten[0]->konten}}
    </div>
</div>

@endsection