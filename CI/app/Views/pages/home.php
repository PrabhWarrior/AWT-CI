<nav class="navbar navbar-expand-lg navbar-dark cl1">

  <div class="container-fluid">

    <a class="navbar-brand" href="home"><img src="lo.png" alt="" width="30" height="24"></a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"

      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

      <span class="navbar-toggler-icon"></span>

    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">

          <a class="nav-link active" aria-current="page" href="home">Home</a>

        </li>

        <li class="nav-item">

          <a class="nav-link" href="about">About</a>

        </li>

        <li class="nav-item dropdown">

          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"

            aria-expanded="false">

            Topics

          </a>

          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

            <li><a class="dropdown-item" href="#">Css</a></li>

            <li><a class="dropdown-item" href="#">Php</a></li>

            <li>

              <hr class="dropdown-divider">

            </li>

            <li><a class="dropdown-item" href="#">Node Js</a></li>

          </ul>

        </li>

        <li class="nav-item">

          <a class="nav-link" href="contact">Contact Us </a>

        </li>

      </ul>

      <form class="d-flex">

        <input class="form-control mx-2 rounded-pill" type="search" placeholder="Search" aria-label="Search">

        <button class="btn cl btn-outline-cl  rounded-pill" type="submit"><img src="search.png" alt="" width="30" height="24"></button>

      </form>

      <div class="mx-2">
      <form method="post" action="http://localhost:8080/news/login">
        <input class="btn btn-danger rounded-pill" type="submit" name="submit" value="login" >
        </form>

        <button class="btn btn-danger rounded-pill" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#LoginModal">Login</button>

        <button class="btn btn-danger rounded-pill" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#SignupModal">Sign Up</button>

    </div>

    </div>

  </div>

</nav>



<!-- Login Modal -->

<div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="LoginModalLabel" aria-hidden="true">

  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header">

        <h5 class="modal-title" id="LoginModalLabel">Login to WebEx</h5>

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

      </div>

      <div class="modal-body">

        <form method="post" action="http://localhost:8080/news/create">

          <div class="mb-3">

            <label for="exampleInputEmail1" class="form-label">Email address</label>

            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>

          </div>

          <div class="mb-3">

            <label for="exampleInputPassword1" class="form-label">Password</label>

            <input type="password" class="form-control" id="exampleInputPassword1">

          </div>

          <div class="mb-3 form-check">

            <input type="checkbox" class="form-check-input" id="exampleCheck1">

            <label class="form-check-label" for="exampleCheck1">Check me out</label>

          </div>

          <button type="submit" class="btn btn-primary">Login</button>

        </form>

      </div>

      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

      </div>

    </div>

  </div>

</div>



<!-- Signup Modal -->

<div class="modal fade" id="SignupModal" tabindex="-1" aria-labelledby="SignupModalLabel" aria-hidden="true">

  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header">

        <h5 class="modal-title" id="SignupModalLabel">Get a WebEx Account</h5>

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

      </div>

      <div class="modal-body">

        <form>

          <div class="mb-3">

            <label for="exampleInputEmail1" class="form-label">Email address</label>

            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>

          </div>

          <div class="mb-3">

            <label for="exampleInputPassword1" class="form-label">Password</label>

            <input type="password" class="form-control" id="exampleInputPassword1">

          </div>

          <div class="mb-3">

            <label for="cexampleInputPassword1" class="form-label">Confirm Password</label>

            <input type="password" class="form-control" id="exampleInputPassword1">

          </div>

          <div class="mb-3 form-check">

            <input type="checkbox" class="form-check-input" id="exampleCheck1">

            <label class="form-check-label" for="exampleCheck1">Check me out</label>

          </div>

          <button type="submit" class="btn btn-primary">Create Account</button>

        </form>

      </div>

      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

      </div>

    </div>

  </div>

</div>



<!-- Carousel -->

<div id="carouselExampleDark" class="carousel carousel-light slide carousel-fade" data-bs-ride="carousel">

  <div class="carousel-indicators">

    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true"

      aria-label="Slide 1"></button>

    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>

    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>

  </div>

  <div class="carousel-inner">

    <div class="carousel-item active" data-bs-interval="10000">

      <img src="11.jpg" class="d-block w-100" alt="...">

      <div class="carousel-caption d-none d-md-block">

        <h2>Welcome to WebEx</h2>

        <p>Exploring the technologies</p>

        <button class="btn btn-outline-success rounded-pill">Php</button>

        <button class="btn btn-outline-danger rounded-pill">Css</button>

        <button class="btn btn-outline-primary rounded-pill">Node Js</button>

      </div>

    </div>

    <div class="carousel-item" data-bs-interval="2000">

      <img src="22.jpg" class="d-block w-100" alt="...">

      <div class="carousel-caption d-none d-md-block">

        <h2>Welcome to WebEx</h2>

        <p>Exploring the technologies</p>

        <button class="btn btn-outline-success rounded-pill">Php</button>

        <button class="btn btn-outline-danger rounded-pill">Css</button>

        <button class="btn btn-outline-primary rounded-pill">Node Js</button>

      </div>

    </div>

    <div class="carousel-item">

      <img src="33.jpg" class="d-block w-100" alt="...">

      <div class="carousel-caption d-none d-md-block">

        <h2>Welcome to WebEx</h2>

        <p>Exploring the technologies</p>

        <button class="btn btn-outline-success rounded-pill">Php</button>

        <button class="btn btn-outline-danger rounded-pill">Css</button>

        <button class="btn btn-outline-primary rounded-pill">Node Js</button>

      </div>

    </div>

  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">

    <span class="carousel-control-prev-icon" aria-hidden="true"></span>

    <span class="visually-hidden">Previous</span>

  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">

    <span class="carousel-control-next-icon" aria-hidden="true"></span>

    <span class="visually-hidden">Next</span>

  </button>

</div>



<!-- Carousel 2 -->

<div class="container mt-4">

  <div class="row mb-2">

    <div class="col-md-6">

      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">

        <div class="col p-4 d-flex flex-column position-static">

          <strong class="d-inline-block mb-2 text-primary">Front End</strong>

          <h3 class="mb-0">Bootstrap Basics</h3>

          <div class="mb-1 text-muted">Sep 4</div>

          <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to

            additional content.</p>

          <a href="#" class="stretched-link">Continue reading</a>

        </div>

        <div class="col-auto d-none d-lg-block">

          <img src="thumb1.jpg" alt="">



        </div>

      </div>

    </div>

    <div class="col-md-6">

      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">

        <div class="col p-4 d-flex flex-column position-static">

          <strong class="d-inline-block mb-2 text-success">Hardware</strong>

          <h3 class="mb-0">Learn Trouble-Shooting</h3>

          <div class="mb-1 text-muted">Sep 11</div>

          <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.

          </p>

          <a href="#" class="stretched-link">Continue reading</a>

        </div>

        <div class="col-auto d-none d-lg-block">

          <img class="bd-placeholder-img" width="200" height="250" src="thumb2.jpg" alt="">

        </div>

      </div>

    </div>

    <div class="col-md-6">

      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">

        <div class="col p-4 d-flex flex-column position-static">

          <strong class="d-inline-block mb-2 text-secondary">Advance Tech</strong>

          <h3 class="mb-0">Machine Learning</h3>

          <div class="mb-1 text-muted">Nov 11</div>

          <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.

          </p>

          <a href="#" class="stretched-link">Continue reading</a>

        </div>

        <div class="col-auto d-none d-lg-block">

          <img class="bd-placeholder-img" width="200" height="250" src="thumb3.jpg" alt="">

        </div>

      </div>

    </div>

    <div class="col-md-6">

      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">

        <div class="col p-4 d-flex flex-column position-static">

          <strong class="d-inline-block mb-2 text-danger">New</strong>

          <h3 class="mb-0">Artificial Intelligence</h3>

          <div class="mb-1 text-muted">Nov 11</div>

          <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.

          </p>

          <a href="#" class="stretched-link">Continue reading</a>

        </div>

        <div class="col-auto d-none d-lg-block">

          <img class="bd-placeholder-img" width="200" height="250" src="thumb4.jpg" alt="">

        </div>

      </div>

    </div>

  </div>

</div>
