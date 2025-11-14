<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{

    // tampilkan semua transaksi 
    public function index()
    {
        $transactions = Transaction::all();
        return view("transactions.home", compact("transactions"));
    }

    // buka halaman create
    public function create($product_id)
    {
        $p = Product::findOrFail($product_id);
        
        return view('transactions.create', compact('p'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'quantity' => 'required|integer|min:1',
        ]);
        
        $product = Product::findOrFail($request->product_id);

        if ($product->stock < $request->quantity) {
            return back()->withErrors([
                'quantity' => "Not enough stock"
            ])->withInput();
        }

        Transaction::create([
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'total_price' => $product->price * $request->quantity,
        ]);

        $product->update([
            'stock' => $product->stock - $request->quantity
        ]);

        return redirect('/products');
        }

}
