<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function index()
    {
        //$p = DB::select('select * from products');
        $p = Product::all();

        return view('products.index', ['products' => $p]);
        //return view('products.index');
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
