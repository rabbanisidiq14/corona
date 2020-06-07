@extends('assets.app')

@section('title')
Profile
@endsection

@section('content')
<div class="row justify-content-center">
    <h2>Profile</h2>
</div>
<div class="row justify-content-center">
    <table border="2" class="table table-striped">
        <tr>
            <td>Username : </td>
            <td>{{$profile[0]->username}}</td>
        </tr>
        <tr>
            <td>Email : </td>
            <td>{{$profile[0]->email}}</td>
        </tr>
    </table>
</div>
@endsection