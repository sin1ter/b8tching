<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Page</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css" integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" />
    <link rel="stylesheet" href = "{{asset('css/style.css')}}">
</head>
<body>
    <section id = "header">
        <a href="#"> <img src = "img/logo.png" class = "logo"alt=""</a>
        <div>
            <ul id = "navbar">
                <li><a class = "active" href= "index.html">Home</a></li>
                <li><a href= "male.html">Male</a></li>
                <li><a href= "female.html">Female</a></li>
                <li><a href= "kids.html">Kids</a></li>
                <li><a href= "cart.html">Carts</a></li>
                @if (Route::has('login'))
                
                    @auth
                    <li><a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a></li>
                    <button><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">{{ __('Log Out') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                        </form>
                    </button>
                    @else
                        <li><a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a></li>
                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a></li>
                        @endif
                    @endauth
                
                @endif
            </ul>
        </div>
    </section>
    
    <section id ="hero">
        <h4>Trade-in-offer</h4>
        <h2>Super value deals</h2>
        <h1>On all products</h1>
        <p>Save more with coupons & up to 70% off! </p>
        <button>Shop Now</button>
    </section>

    <section id = "feature" class="section-p1">
        <div class="fe-box">
            <img src="img/features/f1.png" alt="">
            <h6> Free shipping </h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f2.png" alt="">
            <h6> Online Order </h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f3.png" alt="">
            <h6> Save money </h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f4.png" alt="">
            <h6> Promotions </h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f5.png" alt="">
            <h6> Happy Sell </h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f6.png" alt="">
            <h6> F24/7 Support </h6>
        </div>
    </section>

    
    <section id="product1" class="section-p1">
        <div class="pro-container">
            @foreach ($product as $p)
            <div class="pro">
            <a href="{{url('/single_product/')}}/{{$p->product_id}}">
                <img src="{{asset('uploads/product_image/'.$p->image)}}"> 
            </a>
                <div class="des">
                    <span></span>
                    <h5>{{$p->product_name}}</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>{{$p->product_price}}/-</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i> </a>
            </div>
            @endforeach
        </div>

    </section>

    <section id = "banner" class= "section-m1">  /*after section product1 */
        <h4> Repair Services </h4>
        <h2>Up to <span> 70% Off </span> All t-shirts & Accerssories </h2>
        <button class="normal"> Explore More </button>
    </section>

    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Summer Collection New Modern Design</p>
        <div class="pro-container">
            @foreach ($products as $p)
                <div class="pro">
                    <img src="{{asset('uploads/product_image/'.$p->image)}}" alt="">
                    <div class="des">
                        <span></span>
                        <h5>{{$p->product_name}}/-</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>{{$p->product_price}}/-</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i> </a>
                </div>
            @endforeach
        </div>

    </section>

    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>crazy deals</h4>
            <h2>buy 1 get 1 free</h2>
            <span>The best classic dress is on sale at cara</span>
            <button class="white">Learn More</button>
        </div>
        <div class="banner-box banner-box2">
            <h4>Spring/Summer</h4>
            <h2>buy 1 get 1 free</h2>
            <span>The best classic dress is on sale at cara</span>
            <button class="white">Collection</button>
        </div>
    </section>

    <section id="banner3">
        <div class="banner-box">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection -50% OFF</h3>
        </div>
        <div class="banner-box banner-box2">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection -50% OFF</h3>
        </div>
        <div class="banner-box banner-box3">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection -50% OFF</h3>
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

</body>
</html>