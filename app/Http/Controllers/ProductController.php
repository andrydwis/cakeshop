<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = [
            'products' => Product::all(),
        ];

        return view('product.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = [
            'categories' => Category::all()
        ];
        return view('product.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'kategori' => ['required'],
            'nama' => ['required'],
            'gambar' => ['required', 'mimes:jpg,jpeg,png'],
            'deskripsi' => ['required'],
            'harga' => ['required', 'numeric', 'min:1']
        ]);

        $product = new Product();
        $product->category_id = $request->kategori;
        $product->name = $request->nama;
        $product->slug = Str::slug($request->nama);
        $product->image = $request->file('gambar')->store('products');
        $product->description = $request->deskripsi;
        $product->price = $request->harga;
        $product->save();

        session()->flash('status', 'Produk ' . $product->name . ' berhasil ditambahkan');

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        $data = [
            'product' => $product,
        ];

        return view('product.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        $data = [
            'product' => $product,
            'categories' => Category::all()
        ];

        return view('product.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        if ($request->gambar) {
            Storage::delete($product->image);

            $request->validate([
                'kategori' => ['required'],
                'nama' => ['required'],
                'gambar' => ['mimes:jpg,jpeg,png'],
                'deskripsi' => ['required'],
                'harga' => ['required', 'numeric', 'min:1']
            ]);

            $product->category_id = $request->kategori;
            $product->name = $request->nama;
            $product->slug = Str::slug($request->nama);
            $product->image = $request->file('gambar')->store('products');
            $product->description = $request->deskripsi;
            $product->price = $request->harga;
            $product->save();

            session()->flash('status', 'Produk ' . $product->name . ' berhasil diupdate');

            return redirect()->route('products.index');
        } else {
            $request->validate([
                'kategori' => ['required'],
                'nama' => ['required'],
                'deskripsi' => ['required'],
                'harga' => ['required', 'numeric', 'min:1']
            ]);

            $product->category_id = $request->kategori;
            $product->name = $request->nama;
            $product->slug = Str::slug($request->nama);
            $product->description = $request->deskripsi;
            $product->price = $request->harga;
            $product->save();

            session()->flash('status', 'Produk ' . $product->name . ' berhasil diupdate');

            return redirect()->route('products.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        session()->flash('status', 'Produk ' . $product->name . ' berhasil dihapus');

        Storage::delete($product->image);
        $product->delete();

        return redirect()->route('products.index');
    }
}
