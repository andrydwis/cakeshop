@extends('layouts.app');
@section('content')
<h1>Halaman awal</h1>
@guest
<a href="{{route('login')}}">Login</a>
@endguest

@endsection
