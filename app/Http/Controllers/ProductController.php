<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // tampilkan semua product 
     public function index()
    {
        $product = Product::all();
        return view("products.home", compact("product"));
    }

    // ke halaman create
    public function create()
    {
        return view('products.create');
    }

    // simpan data baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|integer|min:1',
            'stock' => 'required|integer|min:1',
        ]);

        Product::create($request->all());
        return redirect('/products');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    // simpan data yang telah di update
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'price' => 'required|integer|min:1',
            'stock' => 'required|integer|min:1'
        ]);

        $product->update($request->all());
        return redirect('/products');
    }

    public function delete($id)
    {
        Transaction::where('product_id', $id)->delete();
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect('/products');
    }
    
}
