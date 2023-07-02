<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title></title>
  </head>
  <body>
    <h1>{{$title}}</h1>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

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
    <button type="submit" class="btn btn-primary">Add</button>
</form>
  </body>
</html>