<?php

namespace App\Http\Controllers;

use App\Models\About;
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
            'products' => Product::all()->unique('category_id'),
            'categories' => Category::all()
        ];
        return view('homepage.menu', $data);
    }

    public function information(){
        $data = [
            'contact' => Contact::first(),
            'other' => About::first(),
        ];
        return view('homepage.contact', $data);
    }

    public function aboutus(){
        $data = [
            'other' => About::first(),
        ];
        return view('homepage.aboutus', $data);
    }
}
