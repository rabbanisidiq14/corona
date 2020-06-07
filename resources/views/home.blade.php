@extends('assets.app')

@section('title')
Home
@endsection

@section('content')

<div class="container">
    <div id="kopi-covid" class="row justify-content-center"></div>
    <script>
        var f = document.createElement("iframe");
        f.src = "https://widget.kopi.dev/corona";
        f.width = "100%";
        f.height = 200;
        f.scrolling = "no";
        f.frameBorder = 0;
        var rootEl = document.getElementById("kopi-covid");
        console.log(rootEl);
        rootEl.appendChild(f);
    </script>
    <div class="row py-5">
        @foreach($konten as $kontens)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$kontens->judul}}</h5>
                    <p class="card-text">
                        {{substr($kontens->konten,0,50)}}...
                    </p>
                    <a href="{{url('/artikel')}}/lihat/{{$kontens->id}}" class="btn btn-primary">Baca Artikel</a>
                </div>
                <p class="p-3 blockquote-footer">uploaded by : {{$kontens->username}}</p>
            </div>
        @endforeach
    </div>
</div>

@endsection