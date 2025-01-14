    <!-- Navbar Start -->
    <nav
        class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
        <a href="index-2.html" class="navbar-brand d-flex align-items-center">
            <h1 class="m-0">
                <img src="{{asset('front')}}/img/logo.png" style="width: 70px;" alt="">INDO TEKNIK JAYA
            </h1>
        </a>
        <button
            type="button"
            class="navbar-toggler"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-3 py-lg-0">
                <a href="{{url('/')}}" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                <a href="{{url('about-us')}}" class="nav-item nav-link {{ request()->is('about-us') ? 'active' : '' }}">About Us</a>
                <a href="{{url('contact-us')}}" class="nav-item nav-link {{ request()->is('contact-us') ? 'active' : '' }}">Contact Us</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->