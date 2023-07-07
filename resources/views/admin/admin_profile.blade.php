<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  </head>
  <body>

<style>
    body {
    background: rgb(125, 143, 230)
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(125, 143, 230);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #6666FF
}

.profile-button:focus {
    background: #6666FF;
    box-shadow: none
}

.profile-button:active {
    background: #6666FF;
    box-shadow: none
}

.back:hover {
    color: #6666FF;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
</style>


<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">{{$admin->name}}</span><span class="text-black-50">{{$admin->gmail}}</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Name</label><input type="text" class="form-control" value="{{$admin->name}}" name = "name"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control"  value="{{$admin->gmail}}" name = "gmail"></div>
                    <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control"  value="{{$admin->address}}" name = "address"></div>
                    <div class="col-md-12"><label class="labels">Password</label><input type="password" class="form-control"  value="{{$admin->password}}" name = "password"></div>
                    <div class="col-md-12"><label class="labels">Date of Birth</label><input type="text" class="form-control"  placeholder="Password" value="{{$admin->date_of_birth}}" name = "date_of_birth"></div>
                </div>
                <a href="{{url('/admin_profile/edit/')}}/{{$admin->id}}" class="btn btn-outline-primary">Edit profile</a>
            </div>
        </div>
    </div>
</div>
</div>
</div>

  </body>
  
</html>