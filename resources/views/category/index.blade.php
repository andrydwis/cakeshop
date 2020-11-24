@extends('layouts.app')
@section('content')
<div class="section-header">
    <h1>Daftar Kategori</h1>
</div>
@include('layouts.alert')
<div class="section-body">
    <div class="card card-primary">
        <div class="card-header flex-row justify-content-between">
            <h4>Kategori</h4>
            <a href="{{route('categories.create')}}" class="btn btn-primary">Tambah Kategori</a>
        </div>
        <div class="card-body">
            <table id="categories" class="table table-hover" style="width:100%">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Menu</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{$category->name}}</td>
                        <td>
                            <a href="{{route('categories.edit', ['category' => $category])}}" class="btn btn-primary btn-icon"><i class="fas fa-edit"></i></a>
                            <button class="btn btn-icon btn-danger" id="modal-destroy-{{$category->id}}" data-toggle="modal" data-target="#modal-destroy-{{$category->id}}"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
<!-- modal -->
@foreach($categories as $category)
<div class="modal fade" tabindex="-1" role="dialog" id="modal-destroy-{{$category->id}}" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Kategori</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span><i class="fas fa-times-circle"></i></span></button>
            </div>
            <div class="modal-body">
                Apa anda yakin ingin menghapus kategori {{$category->name}} ?
            </div>
            <div class="modal-footer flex justify-content-center">
                <form action="{{route('categories.destroy', ['category' => $category])}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-danger btn-icon" data-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
                    <button type="submit" class="btn btn-primary btn-icon"><i class="fas fa-check"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
<!-- custom -->
@section('customCSS')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.22/r-2.2.6/datatables.min.css" />
@endsection
@section('customJS')
<script src="{{asset('assets/js/bootstrap-modal.js')}}"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.22/r-2.2.6/datatables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#categories').DataTable({
            responsive: true,
            columns: [
                null,
                {
                    searchable: false,
                    orderable: false
                }
            ]
        });
    });
</script>
@endsection