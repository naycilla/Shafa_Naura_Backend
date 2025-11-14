@extends('layout')

@section('content')

    <h4>Product List</h4>

    <a href="/products/create" class="btn btn-primary mt-4 px-3">Create</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            {{-- tampilkan semua data product yang diterima dari controller --}}
            @foreach ($product as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->name }}</td>
                    <td>{{ $p->price }}</td>
                    <td>{{ $p->stock }}</td>
                    <td class="d-flex">
                        <a href="/transactions/{{ $p->id }}/create"  class="btn btn-sm btn-success btn-sx">Buy</a> 
                        <a href="/products/{{ $p->id }}/edit"  class="btn btn-sm btn-warning btn-sx">Edit</a> 
                        <form action="/products/{{ $p->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Delete this product?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection