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

    <form action="{{url('customer')}}" method="POST">
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
        <label for="gender">Gender: &nbsp </label>
        <input type="radio" name="gender" value="male"> Male &nbsp
        <input type="radio" name="gender" value="female"> Female &nbsp
        <input type="radio" name="gender" value="other"> Other &nbsp
        <input type="radio" name="gender" value="lgbtq"> LGBTQ(If you are a member of LGBTQ don't sign up bitch) &nbsp
      </div>

      <div class="form-group">
        <label for="phone number">Phone Number:</label>
        <input type="phone number" class="form-control" placeholder="Enter Phone Number" name="phone_number" id="phone_number">
      </div>

      <div class="form-group">
        <label for="address">Address:</label>
        <input type="address" class="form-control" placeholder="Enter Address" name="address" id="address">
      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" placeholder="Enter password" name="password" id="password">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </body>
</html>