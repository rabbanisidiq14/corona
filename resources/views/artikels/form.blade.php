@extends('assets.app')

@section('title')
{{$tipe == 'buat'?'Buat ':'Edit '}}Artikel
@endsection

@section('content')
<body class="sam">
<div class="row justify-content-center m-2">
    <h2>{{$tipe == 'buat'?'Buat ':'Edit '}}Artikel</h2>
</div>
<form action="{{url()->current()}}/kirim" method="post">
    {{csrf_field()}}
    <div class="form-group m-2">
        <label>Title</label>
        <input type="hidden" name="id" value="{{$tipe=='buat'?'':$id}}">
        <input type="text" name="judul" value="{{$tipe=='buat'? '' : $konten[0]->judul}}" class="form-control col-6">
        <label>Category</label>
        <input type="text" name="kategori" value="{{$tipe=='buat' ? '' : $konten[0]->kategori}}" class="form-control col-2">
    </div>
    <div class="form-group m-2">
        <label>Content</label>
        <textarea name="konten" class="form-control" rows="5">{{$tipe=='buat' ? '' : $konten[0]->konten}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary m-2">Submit</button>
</form>
@endsection