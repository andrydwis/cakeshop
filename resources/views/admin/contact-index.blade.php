@extends('layouts.app')
@section('content')
<div class="card">
    <form action="{{route('contact.update', ['contact' => $contact])}}" method="post">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="">Whatsapp</label>
            <input type="text" name="whatsapp" value="{{$contact->whatsapp}}">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" name="email" value="{{$contact->email}}">
        </div>
        <div class="form-group">
            <label for="">Facebook</label>
            <input type="text" name="facebook" value="{{$contact->facebook}}">
        </div>
        <div class="form-group">
            <label for="">Twitter</label>
            <input type="text" name="twitter" value="{{$contact->twitter}}">
        </div>
        <div class="form-group">
            <label for="">Instagram</label>
            <input type="text" name="instagram" value="{{$contact->instagram}}">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Simpan</button>
        </div>
    </form>
</div>
@endsection