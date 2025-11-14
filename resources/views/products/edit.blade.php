@extends('layout')

@section('content')

<h4>Create Product</h4>

<form action="/products/{{ $product->id }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input 
            type="text" 
            class="form-control @error('name') is-invalid @enderror" 
            id="name" 
            name="name" 
            value="{{ $product->name }}"
        >
        @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input 
            type="number" 
            min="1" 
            class="form-control @error('price') is-invalid @enderror" 
            id="price" 
            name="price" 
            value="{{ $product->price }}"
        >
        @error('price')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="stock" class="form-label">Stock</label>
        <input 
            type="number" 
            min="0" 
            class="form-control @error('stock') is-invalid @enderror" 
            id="stock" 
            name="stock" 
            value="{{ $product->stock }}"
        >
        @error('stock')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
