@extends('layouts.app')
@section('content')
<div class="section-header" data-aos="fade-up" data-aos-delay="500">
    <h1>Update Produk</h1>
</div>
<div class="section-body">
    <div class="row">
        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
            <div class="card card-primary">
                <div class="card-header flex flex-row justify-content-between">
                    <h4>Update</h4>
                    <a href="{{route('products.index')}}" class="btn btn-primary">Kembali</a>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('products.update', ['product' => $product])}}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select name="kategori" id="category" class="form-control @error('kategori'){{'is-invalid'}}@enderror">
                                <option value="" disabled>Pilih Kategori</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}" @if($product->category->id == $category->id){{'selected'}}@endif>{{$category->name}}</option>
                                @endforeach
                            </select>
                            @error('kategori')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input id="nama" type="text" class="form-control @error('nama'){{'is-invalid'}}@enderror" name="nama" value="{{old('nama') ?? $product->name}}">
                            @error('nama')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input id="gambar" type="file" class="form-control @error('gambar'){{'is-invalid'}}@enderror" name="gambar" value="{{old('file') ?? ''}}">
                            @error('gambar')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="deksripsi">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="form-control @error('deskripsi'){{'is-invalid'}}@enderror">{{old('deskripsi') ?? $product->description}}</textarea>
                            @error('deskripsi')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp</span>
                                </div>
                                <input id="harga" type="number" class="form-control @error('harga'){{'is-invalid'}}@enderror" name="harga" value="{{old('harga') ?? $product->price}}">
                                @error('harga')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection