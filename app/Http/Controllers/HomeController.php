<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $data = [
            'contact' => Contact::first(),
            'products' => Product::orderBy('created_at', 'desc')->get()->unique('category_id'),
            'categories' => Category::all()
        ];
        return view('homepage.index', $data);
    }

    public function menu(){
        $data = [
            'contact' => Contact::first(),
            'products' => Product::orderBy('created_at', 'desc')->get()->unique('category_id'),
            'categories' => Category::all()
        ];
        return view('homepage.menu', $data);
    }
}
