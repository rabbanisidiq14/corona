@extends('assets.app')

@section('title')
Artikel Saya
@endsection

@section('content')
<link rel="stylesheet" type="text/css" href="/assets/style.css">
<body class="sam">
<div class="row justify-content-center">
    <h2>Artikel Saya</h2>
</div>
<div class="row">
    <table border="0" class="table table-striped justify-content-center">
        <tr>
            <th>Judul</th>
            <th>Konten</th>
            <th>Diunggah Pada</th>
            <th>Diedit Pada</th>
            <th>Kategori</th>
            <th>Edit</th>
            <th>Hapus</th>
        </tr>
        @foreach($daftar as $artikel)
        <tr>
            <td><a href="{{url('/artikel')}}/lihat/{{$artikel->id}}" target="_blank">{{$artikel->judul}}</a></td>
            <td>{{substr($artikel->konten,0,40)}}...</td>
            <td>{{$artikel->diunggah_pada}}</td>
            <td>{{$artikel->diedit_pada}}</td>
            <td>{{$artikel->kategori}}</td>
            <td><a href="{{url('/artikel/edit/').'/'.$artikel->id}}"><button class="btn btn-primary">Edit</button></a></td>
            <td><a href="{{url('/artikel/delete/').'/'.$artikel->id}}" onclick="return confirm('yakin menghapus artikel ini?')"><button class="btn btn-danger">Hapus</button></a></td>
        </tr>
        @endforeach
    </table>
</div>
</body>
@endsection