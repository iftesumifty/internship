@extends('onefolder.master')
@section('content')


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Carousel Template · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">

    

    

<link href="https://getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.3/examples/carousel/carousel.css" rel="stylesheet">
  </head>
<br><br><br><br>
  <main>

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
     
      
      <img src="https://images.unsplash.com/photo-1604062527894-55b0712bbee3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" alt="Girl in a jacket" width="1310" height="600">
      <div class="container">
        <div class="carousel-caption text-start">
          <h1>Digital Library System</h1>
          <p>To be a leader,be a reader</p>
          <p><a class="btn btn-lg btn-primary" href="{{route('admin_login')}}">Sign up today</a></p>
        </div>
      </div>
    </div>
    
      </div> 
    </div>
    
      </div>
    </div>
  </div>
  
</div>
<br><br>
<section id = "popular" class = "py-0">
        <div class = "container">
            <div class = "title text-center pt-0 pb-0">
                <h2 class = "position-relative d-inline-block ms-0">Most Selling Books Of This Year</h2>
            </div>

            <div class = "row">
                <div class = "col-md-6 col-lg-4 row g-3">
                    <h3 class = "fs-5">Top Rated book</h3>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQC5oYFiYGEpqOv-UPIssCqwTov4qkK9mTefG-hFSSw&s"height="300px" width="260px" alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">Silence</p>
                            <span>500 Tk</span>
                        </div>
                    </div>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "https://www.shutterstock.com/image-vector/modern-vector-abstract-book-cover-260nw-246688564.jpg"height="300px" width="260px" alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">Land of God</p>
                            <span>450Tk</span>
                        </div>
                    </div>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "data:image/jpeg;base64,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" height="300px" width="260px"alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">Fantasy</p>
                            <span>400 Tk</span>
                        </div>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-4 row g-3">
                    <h3 class = "fs-5">Best Selling Book</h3>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "data:image/jpeg;base64,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" height="300px" width="260px"alt = "" class = "img-fluid pe-3 w-25" height="300px" width="260px"alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">Fantasy</p>
                            <span>400 Tk</span>
                        </div>
                    </div>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQC5oYFiYGEpqOv-UPIssCqwTov4qkK9mTefG-hFSSw&s"height="300px" width="260px" alt = "" class = "img-fluid pe-3 w-25" height="300px" width="260px"alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">Silence</p>
                            <span>500 Tk</span>
                        </div>
                    </div>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "data:image/jpeg;base64,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"height="300px" width="260px" alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">winter</p>
                            <span>350 Tk</span>
                        </div>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-4 row g-3">
                    <h3 class = "fs-5">On Sale book</h3>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "data:image/jpeg;base64,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" height="300px" width="260px"alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">money</p>
                            <span>600 Tk</span>
                        </div>
                    </div>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ__GHCY4Cj22WGd4LlwtTnJPm1AJDokZ2VSA&usqp=CAU" height="300px" width="260px"alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">Graphic Design</p>
                            <span>800 Tk</span>
                        </div>
                    </div>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTS1plfNRAzGIumWTvHP6DegFHslJLQDzgrGzo10pQWErmHrJl7PGDKMIwGq7VzQrJaHfk&usqp=CAU" height="300px" width="260px"alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">E-Book</p>
                            <span>500 Tk</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <br><br><br>
<section id = "special" class = "">
        <div class = "container">
            <div class = "title text-center py-6">
                <h2 class = "position-relative d-inline-block py-6" >Special Book Collection of Our library</h2>
            </div>

            <div class = "special-list row g-0">
                <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class = "special-img position-relative overflow-hidden">
                        <img src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuo9WJTmOT-y8f1DClp7xuCc-0CqPS8UhkZ8MWPI3Dmg&s"height="300px" width="260px" class = "w-100">
                        <span class = "position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                            <i class = "fas fa-heart"></i>
                        </span>
                    </div>
                    <div class = "text-center">
                        <p class = "text-capitalize mt-3 mb-1">Order Here</p>
                        <span class = "fw-bold d-block">Please Place Order </span>
                        <a href = "{{route('admin_login')}}" class = "btn btn-primary mt-3">Order Book</a>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class = "special-img position-relative overflow-hidden">
                        <img src = "https://thumbs.dreamstime.com/b/stack-books-isolated-white-background-34637153.jpg" height="300px" width="260px"class = "w-100">
                        <span class = "position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                            <i class = "fas fa-heart"></i>
                        </span>
                    </div>
                    <div class = "text-center">
                        <p class = "text-capitalize mt-3 mb-1">Return Book</p>
                        <span class = "fw-bold d-block">Record all return info</span>
                        <a href = "{{route('admin_login')}}" class = "btn btn-primary mt-3">Return Info</a>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class = "special-img position-relative overflow-hidden">
                        <img src = "https://thumbs.dreamstime.com/b/kids-reading-books-fantasy-library-two-children-long-surreal-wooden-chairs-papers-flying-around-them-45107111.jpg"height="300px" width="260px" class = "w-100">
                        <span class = "position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                            <i class = "fas fa-heart"></i>
                        </span>
                    </div>
                    <div class = "text-center">
                        <p class = "text-capitalize mt-3 mb-1">New Book Collection</p>
                        <span class = "fw-bold d-block">20% OFF</span>
                        <a href = "{{route('admin_login')}}" class = "btn btn-primary mt-3">Your Choice </a>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class = "special-img position-relative overflow-hidden">
                        <img src = "./public/asset/frontend/imagess/w4.webp"height="300px" width="260px" class = "w-100">
                        <span class = "position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                            <i class = "fas fa-heart"></i>
                        </span>
                    </div>
                    <div class = "text-center">
                        <p class = "text-capitalize mt-3 mb-1">Smart Watch</p>
                        <span class = "fw-bold d-block">5500 Tk</span>
                        <a href = "{{route('admin_login')}}" class = "btn btn-primary mt-3">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
   

    </main>


    
@endsection
