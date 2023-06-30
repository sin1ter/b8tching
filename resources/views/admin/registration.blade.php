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

    <form action="{{url('admin')}}" method="POST">
      @csrf
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" placeholder="Enter Name" name="name" id="name">
      </div>

      <div class="form-group">
        <label for="gmail">Gmail:</label>
        <input type="gmail" class="form-control" placeholder="Enter gmail" name="gmail" id="gmail" >
      </div>

      <div class="form-group">
        <label for="address">Address:</label>
        <input type="address" class="form-control" placeholder="Enter Address" name="address" id="address">
      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" placeholder="Enter password" name="password" id="password">
      </div>

      <div class="form-group">
        <label for="date_of_birth">Date of Birth:</label>
        <input type="date" class="form-control" placeholder="Enter Date of Birthday" name="date_of_birth" id="date_of_birth">
      </div>

      <div class="form-group">
        <label for="image">Image:</label>
        <input type="file" class="form-control-file" name="image" id="image">
      </div>

      <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox"> Remember me
        </label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </body>
</html>