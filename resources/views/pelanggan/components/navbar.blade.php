<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand" href="">NewsGeek</a>
  </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #344955">
    <div class="container">
        <a class="navbar-brand fs-4" href="/">Your #1 Trusted News Source</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end gap-4" id="navbarSupportedContent">
            <ul class="navbar-nav gap-4">
                <li class="nav-item">
                    <a class="nav-link {{ Request::path() == '/' ? 'active' : '' }}" aria-current="page"
                        href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::path() == 'shop' ? 'active' : '' }}" href="/shop">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::path() == 'contact' ? 'active' : '' }}" href="/contact">Contact</a>
                </li>
            </ul>
            <div class="d-flex gap-4 align-items-center">
                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">Login</button>
                <div class="notif">
                    <a href="/transaksi" class="fs-5">
                        <i class="fa-solid fa-bag-shopping icon-nav"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
