@extends('assets.app')

@section('title')
Register
@endsection

@section('content')
<div class="row justify-content-center">
    <h1>Daftar</h1>
</div>
<div class="row justify-content-center">
    <form action="{{url()->current()}}/kirim" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label>username</label>
            <input type="username" class="form-control" aria-describedby="usernameHelp" placeholder="Enter username" name="username">
        </div>
        <div class="form-group">
            <label>email</label>
            <input type="email" class="form-control" aria-describedby="usernameHelp" placeholder="Enter Email" name="email">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="Password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection