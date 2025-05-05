<div class="offcanvas offcanvas-start" data-bs-backdrop="static"
     tabindex="-1" id="off-can"
     aria-labelledby="staticBackdropLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title fw-bold" id="staticBackdropLabel">
            {{config('app.name')}}
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <p class="mb-4 text-dark h5 fw-lighter">Sharp Solutions for Smarter Retail</p>
        <ul class="nav flex-column">
            <li class="nav-item mb-2">
                <a class="nav-link text-dark hover-bg-primary" href="{{route('product.index')}}">
                    <i class="fa fa-ils mx-2" aria-hidden="true"></i> Products
                </a>
            </li>
            <li class="nav-item mb-2">
                <a class="nav-link text-dark hover-bg-primary" href="{{route('category.index')}}">
                    <i class="fa fa-rss mx-2" aria-hidden="true"></i> Category
                </a>
            </li>
            <li class="nav-item mb-2">
                <a class="nav-link text-dark hover-bg-primary" href="{{route('supplier.index')}}">
                    <i class="fa fa-users mx-2" aria-hidden="true"></i> Supplier
                </a>
            </li>
            <li class="nav-item mb-2">
                <a class="nav-link text-dark hover-bg-primary" href="{{route('stock.index')}}">
                    <i class="fa fa-list mx-2" aria-hidden="true"></i> Stock
                </a>
            </li>
            <li class="nav-item mb-2">
                <a class="nav-link text-dark hover-bg-primary" href="#">
                    <i class="fa fa-user-circle mx-2" aria-hidden="true"></i> Customer
                </a>
            </li>
        </ul>
    </div>
</div>
