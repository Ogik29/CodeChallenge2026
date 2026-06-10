<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title', 'C.O.D.E Challenge - Cyber Competition & Digital Excellence')</title>
    <link rel="icon" href="{{ asset('img/logo_code_challange.png') }}" type="image/png" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Code Challenge, Kompetisi IT, Mahasiswa, SMA, SMK" name="keywords" />
    <meta content="Cyber Competition and Digital Excellence Challenge" name="description" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />

    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />

    <!-- Premium Landing Page CSS -->
    <link href="{{ asset('css/premium-index.css') }}" rel="stylesheet" />

    <!-- Extra CSS (per-page overrides, e.g. competition-pages.css) -->
    @yield('extra-css')
</head>

<body>
    <!-- ==========================================
         PRELOADER
         ========================================== -->
    <div id="preloader">
        <div class="loader-inner">
            <div class="loader-circle"></div>
            <img src="{{ asset('img/logo_code_challange.png') }}" alt="CODE" class="loader-logo" />
            <div class="loader-text">Loading CODE Challenge...</div>
        </div>
    </div>

    <!-- ==========================================
         NAVBAR
         Active state ditentukan otomatis dari URL saat ini
         ========================================== -->
    <nav class="navbar navbar-expand-lg navbar-glass fixed-top py-2 px-lg-5">
        <a href="{{ url('/') }}" class="navbar-brand ml-lg-3">
            <img src="{{ asset('img/logo_code_challange.png') }}" alt="Logo" style="height: 65px; width: auto" />
        </a>
        <button type="button" class="navbar-toggler border-0" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end px-lg-3" id="navbarCollapse">
            <div class="navbar-nav py-0">
                <a href="{{ route('home') }}"
                    class="nav-item nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>

                <a href="{{ route('about') }}"
                    class="nav-item nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a>

                <div class="nav-item dropdown">
                    <a href="#"
                        class="nav-link dropdown-toggle {{ request()->routeIs('lkti.sma') || request()->routeIs('ctf.sma') ? 'active' : '' }}"
                        data-toggle="dropdown">Kompetisi SMA/SMK</a>
                    <div class="dropdown-menu m-0 border-0 shadow-sm rounded-lg">
                        <a href="{{ route('ctf.sma') }}"
                            class="dropdown-item {{ request()->routeIs('ctf.sma') ? 'active' : '' }}">CTF</a>
                        <a href="{{ route('lkti.sma') }}"
                            class="dropdown-item {{ request()->routeIs('lkti.sma') ? 'active' : '' }}">LKTI</a>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#"
                        class="nav-link dropdown-toggle {{ request()->routeIs('ctf.mahasiswa') ? 'active' : '' }}"
                        data-toggle="dropdown">Kompetisi Mahasiswa</a>
                    <div class="dropdown-menu m-0 border-0 shadow-sm rounded-lg">
                        <a href="{{ route('ctf.mahasiswa') }}"
                            class="dropdown-item {{ request()->routeIs('ctf.mahasiswa') ? 'active' : '' }}">CTF</a>
                    </div>
                </div>

                <a href="{{ route('home') }}" class="nav-item nav-link">Talkshow</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- ==========================================
         MAIN CONTENT (per-page)
         ========================================== -->
    @yield('content')

    <!-- ==========================================
         FOOTER
         ========================================== -->
    <footer class="footer-premium">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-5" data-aos="fade-up">
                    <img src="{{ asset('img/logo_code_challange.png') }}" alt="Logo C.O.D.E Challenge"
                        class="img-fluid mb-4" style="height: 90px;" />
                    <p class="mb-4 pr-lg-4" style="line-height: 1.8;">Ajang kompetisi nasional untuk menyalurkan
                        potensi generasi muda dalam menciptakan inovasi nyata di bidang teknologi terkini.</p>
                </div>

                <div class="col-lg-4 col-md-6 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <h4>Contact Info</h4>
                    <div class="contact-info mt-4">
                        <p><i class="fas fa-map-marker-alt"></i> <span>Telkom University Surabaya</span></p>
                        <p><i class="fas fa-phone-alt"></i> <span>nomor</span></p>
                        {{-- <p><i class="fas fa-envelope"></i> <span>Hidupjokowi@gmail.com</span></p> --}}
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 mb-5" data-aos="fade-up" data-aos-delay="200">
                    <h4>Presented By</h4>
                    <div class="presented-logos d-flex flex-wrap mt-4">
                        <img src="{{ asset('img/logoTelyu.png') }}" alt="Telkom University" />
                        <img src="{{ asset('img/LOGO HIMATISI.png') }}" alt="HIMATISI" />
                    </div>
                </div>
            </div>

            <div class="border-top pt-4 mt-2 text-center text-md-left d-flex flex-column flex-md-row justify-content-between align-items-center"
                style="border-color: rgba(255,255,255,0.05) !important;">
                <p class="mb-2 mb-md-0" style="font-size: 0.9rem;">&copy; {{ date('Y') }} C.O.D.E Challenge. All
                    Rights Reserved.</p>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary rounded-circle back-to-top shadow"
        style="position: fixed; bottom: 30px; right: 30px; width: 45px; height: 45px; display: flex; align-items: center; justify-content: center; z-index: 99; transition: all 0.3s ease;">
        <i class="fa fa-angle-up text-white" style="font-size: 1.5rem;"></i>
    </a>

    <!-- ==========================================
         JAVASCRIPT LIBRARIES (Common)
         ========================================== -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            offset: 50,
        });

        // Navbar scroll effect
        $(window).scroll(function() {
            if ($(this).scrollTop() > 50) {
                $('.navbar-glass').css('background', 'rgba(255, 255, 255, 0.95) !important');
                $('.navbar-glass').css('box-shadow', '0 4px 30px rgba(0, 0, 0, 0.12)');
            } else {
                $('.navbar-glass').css('background', 'rgba(255, 255, 255, 0.95) !important');
                $('.navbar-glass').css('box-shadow', '0 4px 30px rgba(0, 0, 0, 0.05)');
            }
        });
    </script>

    <!-- Extra JS (per-page scripts, e.g. gallery pagination) -->
    @yield('extra-js')
</body>

</html>
