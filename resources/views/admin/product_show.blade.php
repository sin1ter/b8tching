<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title></title>
  </head>
  <body>
    <h1></h1>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Quantity</th>
      <th scope="col">Category</th>
      <th scope="col">Size</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
    <tbody>
        @foreach ($product as $p)
        
        <tr>
        <td>{{$p->product_name}}</td>
        <td>{{$p->product_price}}</td>
        <td>{{$p->product_description}}</td>
        <td>{{$p->quantity}}</td>
        <td>{{$p->category}}</td>
        <td>{{$p->size}}</td>  
        <td>

        <a href = "{{url('/show_product/edit/')}}/{{$p->product_id}}">
        <button type="button" class="btn btn-outline-primary">Edit</button>
        <a href="{{url('/show_product/delete/')}}/{{$p->product_id}}">
        <button type="button" class="btn btn-outline-danger">Delete</button>
        
        </td>
    </a>
</td>
        </tr>
        <tr>
        @endforeach
    </tbody>
</table>
  </body>
</html>