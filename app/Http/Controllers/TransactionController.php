<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{

        // buat homepage untuk transaksi
         public function index()
        {
            return view("transactions.home");
        }
}
