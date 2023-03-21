<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">

    <img src = "https://mir-s3-cdn-cf.behance.net/projects/404/a07b33114604795.Y3JvcCw4MDgsNjMyLDAsMA.png" width="150px",height="150px" alt = "site icon">
  
      <a class="navbar-brand" href="">Carousel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('admin_login')}}">Home</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('registration')}}">registration</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link active ,btn btn-dark" aria-current="page" href="{{route('book')}}">book list</a>
          </li>

         
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('logout')}}">logout</a>

            
          </li>
        </ul>


        
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
</header>