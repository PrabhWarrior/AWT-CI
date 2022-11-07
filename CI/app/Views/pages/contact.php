<nav class="navbar navbar-expand-lg navbar-dark cl1">

        <div class="container-fluid">

            <a class="navbar-brand" href="home"><img src="lo.png" alt="" width="30" height="24"></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"

                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"

                aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">

                        <a class="nav-link " aria-current="page" href="home">Home</a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="about">About</a>

                    </li>

                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"

                            data-bs-toggle="dropdown" aria-expanded="false">

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

                        <a class="nav-link active" href="contact">Contact Us </a>

                    </li>

                </ul>

                <form class="d-flex">

                    <input class="form-control mx-2 rounded-pill" type="search" placeholder="Search" aria-label="Search">

                    <button class="btn cl btn-outline-cl  rounded-pill" type="submit"><img src="search.png" alt="" width="30" height="24"></button>

                  </form>

                

            </div>

        </div>

    </nav>

    <div class="container mt-4">

        <h2>Contact Us</h2>

        <form>



            <div class="form-group">

                <label for="example FormControlInput1"> Email address </label>

                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder=" name@example.com ">

            </div>

            <div class="form-group mt-2">

                <label for="exampleFormControlSelect1"> Select your Query </label>

                <select class=" form-control " id="exampleFormControlSelect1">

                    <option> Web </option>

                    <option> Tech </option>

                    <option> API </option>

                    <option> Login Issue </option>

                    <option> Other </option>

                </select>

            </div>

            <div class=" form-group row mt-2 ">

                <div class=" col-sm-2 "> Are you a Member ? </div>

                        <div class=" col-sm-10 ">

                            <div class=" form-check ">

                                <input class=" form-check-input " type="checkbox" id="gridCheck1">

                                <label class=" form-check-label " for="gridCheck1">

                                    Yes

                                </label>

                            </div>  

                        </div>

                </div>

                <div class="form-group mt-2">

                    <label for="exampleFormControlTextarea1"> Elaborate Your Concern </label>

                    <textarea class="form-control" id="exampleFormControlTextareal" rows="3"></textarea>

                </div>

        </form>

        <button class="btn btn-primary mt-2"> Submit </button>

    </div>
