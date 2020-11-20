@extends('layouts.app');
@section('content')
<form action="{{route('logout')}}" method="post">
    @csrf
    <button type="submit" class="btn btn-danger">Logout</button>
</form>
<a href="{{route('create-users')}}">tambah pegawai</a>
@endsection
