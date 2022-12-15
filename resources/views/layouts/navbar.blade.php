<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
    <a href="{{route('home')}}" class="navbar-brand p-0">
        <h1 class="m-0 text-uppercase text-primary"><i class="far fa-smile text-primary me-2"></i>consult</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0 me-n3">
            <a href="{{route('home')}}" class="nav-item nav-link <?= Route::currentRouteName() === 'home' ? 'active' : '' ?>">Home</a>
            <a href="{{route('about')}}" class="nav-item nav-link <?= Route::currentRouteName() === 'about' ? 'active' : '' ?>">About</a>
            <a href="{{route('service')}}" class="nav-item nav-link <?= Route::currentRouteName() === 'service' ? 'active' : '' ?>">Service</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="{{route('blog')}}" class="dropdown-item">Blog Grid</a>
                    <a href="{{route('blog-detail')}}" class="dropdown-item">Blog Detail</a>
                    <a href="{{route('feature')}}" class="dropdown-item">Features</a>
                    <a href="{{route('quote')}}" class="dropdown-item">Quote Form</a>
                    <a href="{{route('team')}}" class="dropdown-item">The Team</a>  
                    <a href="{{route('testimonial')}}" class="dropdown-item">Testimonial</a>
                </div>
            </div>
            <a href="{{route('contact')}}" class="nav-item nav-link <?= Route::currentRouteName() === 'contact' ? 'active' : '' ?>">Contact</a>
        </div>
    </div>
</nav>
<!-- Navbar End -->
