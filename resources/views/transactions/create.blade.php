@extends('layout')

@section('content')

<h4 class="mb-3">Create Transaction</h4>

<form action="/transactions" method="POST">
    @csrf

    <div class="container">
        <div class="row">
            
            <input type="hidden" name="product_id" value="{{ $p->id }}">

            <div class="mb-3 col-5">
                <label for="name" class="form-label">Product Name</label>
                <input 
                    type="text" 
                    class="form-control" 
                    id="name" 
                    name="name" 
                    value="{{ $p->name }}"
                    disabled
                >
            </div>

        
            <div class="mb-3 col-4">
                <label for="price" class="form-label">Product Price</label>
                <input 
                    type="text" 
                    min="1" 
                    class="form-control"
                    id="price" 
                    name="price" 
                    value="{{ $p->price }}"
                    disabled
                >

            </div>

            <div class="mb-3 col-3">
                <label for="stock" class="form-label">Stock</label>
                <input 
                    type="text" 
                    min="0" 
                    class="form-control" 
                    id="stock" 
                    name="stock" 
                    value="{{ $p->stock }}"
                    disabled
                >                
            </div>
                    
        </div>
        <div class="mb-5">
        <label for="quantity" class="form-label">Quantity</label>
        <input 
            type="number" 
            min="1" 
            class="form-control @error('quantity') is-invalid @enderror" 
            id="quantity" 
            name="quantity" 
            value="{{ old('quantity') }}"
            autofocus
        >
        @error('quantity')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
        <button type="submit" class="btn btn-primary ">Submit</button>
    </div>

    
    
</form>


@endsection
