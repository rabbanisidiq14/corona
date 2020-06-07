@extends('assets.app')

@section('title')
Login
@endsection

@section('content')

<div class="row justify-content-center">
    <h1>Masuk</h1>
</div>
<div class="row justify-content-center">
    <form action="{{url()->current()}}/check" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label>username</label>
            <input type="username" class="form-control" aria-describedby="usernameHelp" placeholder="Enter username" name="username">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="Password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>
@endsection