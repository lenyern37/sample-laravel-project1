<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index()
    {
        return view('products.index');
    }

    public function create()
    {
        return view('products.create');
    }

    public function insert(Request $request)
    {
        //dd($request);
        $data = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'qty' => 'required|numeric',
            'price' => 'required'
        ]);


        Product::create($data);
        return redirect(route('product.index'));
    }

    public function update()
    {
    }

    public function delete()
    {
    }
}
