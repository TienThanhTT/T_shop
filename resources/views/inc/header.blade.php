

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <div class="header">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                  <button
                    class="navbar-toggler"
                    type="button"
                    data-mdb-toggle="collapse"
                    data-mdb-target="#navbarTogglerDemo03"
                    aria-controls="navbarTogglerDemo03"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                  >
                  <i class="fa-solid fa-bars"></i>
                  </button>
                  <a class="navbar-brand" href="{{URL::to('/')}}">T-SHOP</a>
                  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item active">
                        <a class="nav-link " aria-current="page" href="{{URL::to('/')}}">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">PC</a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link" href="">Laptop</a>
                      </li>
                    </ul>
                    <form class="d-flex input-group w-auto">
                      <input type="search" class="form-control" placeholder="Tìm kiếm" aria-label="Search"/>
                      <button class="btn btn-outline-primary" type="button" data-mdb-ripple-color="dark">
                        Search
                      </button>
                    </form>

                    <div class="d-flex align-items-center">
                        <a href="{{URL::to('/login')}}" class="btn btn-link px-3 me-2">
                          Login
                        </a>
                        <button type="button" class="btn btn-primary me-3">
                          Sign up for free
                        </button>
                        <ul class="navbar-nav">
                            <!-- Badge -->
                            <li class="nav-item">
                              <a class="nav-link" href="">

                                <span class="badge badge-pill bg-danger"></span>

                                <a href="{{URL::to('/cat')}}"><i class="fas fa-shopping-cart"></i></a>

                              </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>

