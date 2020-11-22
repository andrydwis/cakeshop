@extends('layouts.app');
@section('content')
<form action="{{route('logout')}}" method="post">
    @csrf
    <button type="submit" class="btn btn-danger">Logout</button>
</form>
<a href="{{route('create-users')}}">tambah pegawai</a>
<a href="https://wa.me/send?phone=6285851846991&text=Saya%20tertarik%20untuk%20membeli%20waifu%20anda%20.">Beli</a>
@endsection
