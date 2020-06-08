<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale() ) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{url('/assets/style.css')}}">
</head>
<body>
    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-3">
              <h6 class="text-white"><a href="{{route('home')}}" class="text-white">Home</a></h6>

              <!--kalo lom login-->
              @if(!$request->session()->has('username'))
              <h6 class="text-white"><a href="{{url('/user/login')}}" class="text-white">Login</a></h6>
              <h6 class="text-white"><a href="{{url('/user/register')}}" class="text-white">Register</a></h6>
              @endif

              <!--kalo dah login-->
              @if($request->session()->has('username'))
              <h6 class="text-white"><a href="{{url('/user/profile')}}" class="text-white">Profile</a></h6>
              <h6 class="text-white"><a href="{{url('/artikel/daftar')}}" class="text-white">Artikel Saya</a></h6>
              <h6 class="text-white"><a href="{{url('/artikel/buat')}}" class="text-white">Buat Artikel</a></h6>
              <h6 class="text-white"><a href="{{url('/user/logout')}}" class="text-white">Log Out</a></h6>
              @endif
            </div>
        </div>
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="{{url('/')}}">CoronaHD</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </div>
    <main class="py-4 container">
        @yield('content')
    </main>
</body>
</html>