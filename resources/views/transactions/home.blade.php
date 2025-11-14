@extends('layout')

@section('content')

    <h4>Transaction History</h4>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Product ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total Price</th>
            </tr>
        </thead>
        <tbody>
            {{-- tampilkan semua data transaksi yang diterima dari controller --}}
            @foreach ($transactions as $t)
                <tr>
                    <td>{{ $t->id }}</td>
                    <td>{{ $t->product_id }}</td>
                    <td>{{ $t->product->name }}</td>
                    <td>{{ $t->product->price }}</td>
                    <td>{{ $t->quantity }}</td>
                    <td>{{ $t->total_price }}</td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection