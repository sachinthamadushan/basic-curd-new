<nav class="navbar navbar-expand-lg bg-primary bg-body-tertiary">
    <div class="container-fluid">
        <button class="btn btn-light shadow-sm me-2"
                type="button"
                data-bs-toggle="offcanvas"
                data-bs-target="#off-can"
                aria-controls="off-can">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <a class="navbar-brand mx-3 fw-bold" href="#">
            {{config('app.name')}}
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="d-flex ms-auto" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
@include('partials.sidebar')

