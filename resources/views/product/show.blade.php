@extends('layouts.app')
@section('content')
<div class="section-header" data-aos="fade-up" data-aos-delay="500">
    <h1>Detail Produk</h1>
</div>
<div class="section-body">
    <div class="row">
        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
            <div class="card card-primary">
                <div class="card-header flex flex-row justify-content-between">
                    <h4>Detail</h4>
                    <a href="{{route('products.index')}}" class="btn btn-primary">Kembali</a>
                </div>
                <div class="card-body">
                    <form method="POST" action="" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <input id="kategori" type="text" class="form-control" name="kategori" value="{{$product->category->name}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input id="nama" type="text" class="form-control" name="nama" value="{{$product->name}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <img src="{{asset('storage/'.$product->image)}}" alt="" class="img-fluid img-thumbnail">
                        </div>
                        <div class="form-group">
                            <label for="deksripsi">Deskripsi</label>
                            <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control" readonly>{{$product->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp</span>
                                </div>
                                <input id="harga" type="number" class="form-control" name="harga" value="{{$product->price}}" readonly>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection