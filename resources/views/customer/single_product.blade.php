<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css" integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" />
    <link rel="stylesheet" href = "{{asset('css/style.css')}}">
</head>
<body>
    <section id = "header">
        <a href="#"> <img src = "img/logo.png" class = "logo"alt=""</a>
        <div>
            <ul id = "navbar">
                <li><a class = "active"href= "index.html">Home</a></li>
                <li><a href= "male.html">Male</a></li>
                <li><a href= "female.html">Female</a></li>
                <li><a href= "kids.html">Kids</a></li>
                <li><a href= "cart.html">Carts</a></li>
            </ul>
        </div>
    </section>

    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <img src="{{asset('uploads/product_image/'.$product->image)}}" width="100%">
            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="img/products/f1.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/products/f2.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/products/f3.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/products/f4.jpg" width="100%" class="small-img" alt="">
                </div>
            </div>
        </div>



        <div class="single-pro-details">
            <h6>Home / {{$product->product_name}} </h6>
            <h4>{{$product->product_name}}</h4>
            <h2>{{$product->product_price}}/-</h2>
            <select>
                <option>Select Size</option>
                <option>XL</option>
                <option>XXL</option>
                <option>Small</option>
                <option>Large</option>
            </select>
            <input type="number" Value="1">
            <form action="/add_to_cart" method="post">
                @csrf
                <input type = "hidden" name="product_id" value={{$product->product_id}}>
                <button class="normal">Add To Cart</button>
            </form>
            <h4>Product Details</h4>
            <span>The Classic Cotton T-Shirt is a wardrobe essential that combines comfort and style. This versatile piece of clothing is perfect for casual outings, lounging at home, or as a base layer for various outfits. Made from premium quality 100% cotton fabric, it ensures a soft and breathable feel, making it suitable for year-round wear.</span>
        </div>

    </section>
    <section id="product1" class="section-p1">
        <h2>Feature Products</h2>
        <p>Summer Collection New Modern Design</p>
        <div class="pro-container">
            @foreach ($pro as $product)
                <div class="pro">
                    <a href="{{url('/single_product/')}}/{{$product->product_id}}">
                        <img src="{{asset('uploads/product_image/'.$product->image)}}" width="100%"> 
                    </a>
                    <div class="des">
                        <span></span>
                        <h5>{{$product->product_name}}</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>{{$product->product_price}}</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i> </a>
                </div>
            @endforeach
        </div>    
    </section>


<footer class="section-p1">
    <div class="col">
        <img class="logo" src="img/logo.png" alt="">
        <h4>Contact</h4>
        <p><strong>Address: </strong> 2Number gate,Nasirabad,Chittagong</p>
        <p><strong>Phone: </strong> +800-1856576315</p>
        <p><strong>Hours: </strong> 10:00 - 18:00, Mon - Sat </p>
        <div class="follow">
            <h4>Follow Us</h4>
            <div class="icon">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-pinterest-p"></i>
                <i class="fab fa-youtube"></i>
            </div>
        </div>
    </div>

    <div class="col">
        <h4>About</h4>
        <a href="#">About us</a>
        <a href="#">Delivery Information</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms & Conditions</a>
        <a href="#">Contact Us</a>
    </div>

    <div class="col">
        <h4>About</h4>
        <a href="#">My Account</a>
        <a href="#">Sign In</a>
        <a href="#">View Cart</a>
        <a href="#">My Wishlist</a>
        <a href="#">Track My Order</a>
        <a href="#">Help</a>
    </div>

    <div class="col install">
        <h4>Insall App</h4>
        <p>From App Store or Google Play</p>
        <div class="row">
            <img src="img/pay/app.jpg" alt="">
            <img src="img/pay/play.jpg" alt="">
        </div>
        <p>Secured Payment Gateways</p>
        <img src="img/pay/pay.png" alt=""> 
    </div>

</footer>
<script>
    var MainImg = document.getElementById("MainImg");
    var smallimg = document.getElementsByClassName("small-img");

    smallimg[0].onclick = function(){
        MainImg.src = smallimg[0].src;
    }
    smallimg[1].onclick = function(){
        MainImg.src = smallimg[1].src;
    }

    smallimg[2].onclick = function(){
        MainImg.src = smallimg[2].src;
    }

    smallimg[3].onclick = function(){
        MainImg.src = smallimg[3].src;
    }
</script>

</body>
</html>