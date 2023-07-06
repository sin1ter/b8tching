@extends('layouts.master')
@section('content')
    <form action="{{$url}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="product name">Product Name</label>
        <input type="product name" class="form-control" id="product name" placeholder="Product name" Name="product_name" value = "{{$product->product_name}}">
    </div>
    
    <div class="form-group">
        <label for="product price">Product Price</label>
        <input type="product price" class="form-control" id="product Price" placeholder="Product price" Name="product_price" value = "{{$product->product_price}}">
    </div>
    
    <div class="form-group">
        <label for="product description">Product Description</label>
        <input type="product description" class="form-control" id="Product description" placeholder="Product Description" Name="product_description" value = "{{$product->product_description}}">
    </div>
    
    <div class="form-group">
        <label for="image">Product Image</label>
        <input type="file" class="form-control" id="image" placeholder="Image" Name="image" >
    </div>

    <div class="form-group">
        <label for="quantity">Product Quantity</label>
        <input type="quantity" class="form-control" id="quantity" placeholder="Quantity" Name="quantity" value = "{{$product->quantity}}">
    </div>
    
    <label for="menu">Category:</label>
        <select id="menu" name="category"> 
        <option value="male" {{$product -> category == 'Male' ? 'selected' : ''}}>Male</option>
        <option value="female"{{$product -> category == 'Female' ? 'selected' : ''}}>Female</option>
        </select>
    <br>
    <br>
    <label for="menu">Size:</label>
        <select id="menu" name="size" value = "{{$product->size}}">
            <option  value="S" {{$product -> size == 'S' ? 'selected' : ''}}>S</option>
            <option  value="M" {{$product -> size == 'M' ? 'selected' : ''}}>M</option>
            <option  value="L" {{$product -> size == 'L' ? 'selected' : ''}}>L</option>
            <option  value="XL" {{$product -> size == 'XL' ? 'selected' : ''}}>XL</option>
            <option  value="XXL" {{$product -> size == 'XXL' ? 'selected' : ''}}>XXL</option>
            <option  value="XXXL" {{$product -> size == 'XXXL' ? 'selected' : ''}}>XXXL</option>
        </select>
    <br>
    <br>
    <button type="submit" class="btn btn-primary">Add</button>
</form>
@endsection