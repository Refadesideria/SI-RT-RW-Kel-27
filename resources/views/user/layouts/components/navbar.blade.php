<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
    <a href="index.html" class="navbar-brand d-flex align-items-center">
        <h1 class="m-0">
            <i class="fa fa-building text-primary me-3"></i>Kebon Lega II
        </h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-3 py-lg-0">
            <a href="beranda" class="nav-item nav-link active">Beranda</a>
            {{-- @foreach($rt as $data)
            <div class="nav-item dropdown">
                <a href="[{ route('rt.show', $data->id)}]" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">RT {{$data->rt}}</a>
                
            @endforeach
            </div>
            <a href="service.html" class="nav-item nav-link">Our Services</a>
            <a href="contact.html" class="nav-item nav-link">Contact Us</a> --}}
        </div>
    </div>
</nav>