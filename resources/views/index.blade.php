@extends('layouts.app')

@section('title', 'C.O.D.E Challenge - Cyber Competition & Digital Excellence')

@section('content')

    <!-- Hero Section Start -->
    <div class="hero-section">
        <div class="container hero-content">
            <div class="row align-items-center text-center text-lg-left">
                <div class="col-lg-6 mb-5 mb-lg-0 order-2 order-lg-1" data-aos="fade-right" data-aos-duration="1000">
                    <h6 class="text-primary text-uppercase font-weight-bold mb-3" style="letter-spacing: 2px;">C.O.D.E
                        Challenge 2026</h6>
                    <h1 class="display-4 font-weight-bold mb-4" style="line-height: 1.2;">Cyber Competition & <span
                            class="text-primary"> Digital Excellence</span></h1>
                    <p class="lead text-muted mb-5">Inovasi Teknologi Berbasis Cyber & IOT untuk Smart City &
                        Smart Farming sebagai solusi masa depan yang berkelanjutan.</p>
                    <div class="d-flex flex-column flex-sm-row justify-content-center justify-content-lg-start gap-3">
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSfQKkcpgvf850BUb-F53pFS-fDcGSV313tMIz92G0YsSr0_wg/viewform"
                            class="btn-modern mb-3 mb-sm-0 mr-sm-3">
                            Daftar Sekarang <i class="fas fa-arrow-right"></i>
                        </a>
                        <a href="https://linktr.ee/guidebookcodex" class="btn btn-outline-primary"
                            style="border-radius: 50px; padding: 12px 35px; font-weight: 600;">
                            Guidebook <i class="fas fa-download ml-2"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 text-center order-1 order-lg-2 mb-4 mb-lg-0" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                    <img src="{{ asset('img/logo_code_challange.png') }}" alt="Hero Image" class="img-fluid"
                        style="max-width: 80%; filter: drop-shadow(0 20px 30px rgba(0,0,0,0.1));" />
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->


    <!-- Kategori SMA/SMK Start -->
    <div class="container-fluid bg-light py-5 Background-SMA">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h6 class="text-primary text-uppercase font-weight-bold" style="letter-spacing: 2px;">C.O.D.E
                    Challenge
                </h6>
                <h2 class="display-4 font-weight-bold">Kategori SMA/SMK</h2>
                <p class="text-muted mx-auto mt-3" style="max-width: 600px; line-height: 1.8;">
                    Kompetisi untuk siswa SMA/SMK yang ingin mengasah kemampuan teknologi di bidang
                    Cybersecurity (CTF) dan Karya Tulis Ilmiah (LKTI).
                </p>
            </div>

            <div class="row justify-content-center align-items-center">
                <div class="col-lg-7 col-md-12 mb-4" data-aos="fade-right">
                    <div class="premium-card p-3">
                        <img src="{{ asset('img/harmony.JPG') }}" class="img-fluid rounded-lg w-100 shadow-sm"
                            alt="Poster Lomba SMA/SMK" style="max-height: 850px; object-fit: cover; border-radius: 15px;" />
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 mb-4 pl-lg-5" data-aos="fade-left">
                    <h3 class="mb-4">Lomba untuk Siswa SMA/SMK</h3>
                    <div class="d-flex mb-4">
                        <div class="flex-shrink-0 bg-primary text-white d-flex align-items-center justify-content-center rounded-circle"
                            style="width: 50px; height: 50px;">
                            <i class="fas fa-flag"></i>
                        </div>
                        <div class="ml-3">
                            <h5 class="mb-1">Capture The Flag (CTF)</h5>
                            <p class="text-muted m-0">Uji kemampuan keamanan siber melalui tantangan kriptografi,
                                forensik digital, dan web security.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <div class="flex-shrink-0 bg-primary text-white d-flex align-items-center justify-content-center rounded-circle"
                            style="width: 50px; height: 50px;">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <div class="ml-3">
                            <h5 class="mb-1">LKTI (Lomba Karya Tulis Ilmiah)</h5>
                            <p class="text-muted m-0">Tuangkan ide inovatif dalam karya tulis ilmiah bertema teknologi
                                masa depan.</p>
                        </div>
                    </div>
                    <a href="{{ url('/ctfSmaSmk.html') }}" class="btn-modern mr-2">
                        CTF <i class="fas fa-arrow-right"></i>
                    </a>
                    <a href="{{ url('/lktiSmaSmk.html') }}" class="btn-modern mr-2">
                        LKTI <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Kategori SMA/SMK End -->

    <!-- Kategori Mahasiswa Start -->
    <div class="container-fluid bg-white py-5 Background-Mahasiswa">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h6 class="text-primary text-uppercase font-weight-bold" style="letter-spacing: 2px;">C.O.D.E
                    Challenge</h6>
                <h2 class="display-4 font-weight-bold">Kategori Mahasiswa</h2>
                <p class="text-muted mx-auto mt-3" style="max-width: 600px; line-height: 1.8;">
                    Kompetisi Capture The Flag untuk mahasiswa yang ingin mengasah dan membuktikan
                    keahlian di bidang Cybersecurity tingkat nasional.
                </p>
            </div>

            <div class="row justify-content-center align-items-center flex-lg-row-reverse">
                <div class="col-lg-7 col-md-12 mb-4" data-aos="fade-left">
                    <div class="premium-card p-3">
                        <img src="{{ asset('img/kategori_mahasiswa.JPG') }}" class="img-fluid rounded-lg w-100 shadow-sm"
                            alt="Poster Lomba Mahasiswa" style="max-height: 850px; object-fit: cover; border-radius: 15px;" />
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 mb-4 pr-lg-5" data-aos="fade-right">
                    <h3 class="mb-4">Lomba untuk Mahasiswa</h3>
                    <div class="d-flex mb-4">
                        <div class="flex-shrink-0 bg-primary text-white d-flex align-items-center justify-content-center rounded-circle"
                            style="width: 50px; height: 50px;">
                            <i class="fas fa-flag"></i>
                        </div>
                        <div class="ml-3">
                            <h5 class="mb-1">Capture The Flag (CTF)</h5>
                            <p class="text-muted m-0">Tantangan cybersecurity level mahasiswa dengan soal yang lebih
                                kompleks dan kompetitif, meliputi kriptografi, forensik digital, dan web security.</p>
                        </div>
                    </div>
                    <a href="{{ url('/ctfMahasiswa.html') }}" class="btn-modern mr-2">
                        CTF <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Kategori Mahasiswa End -->

    <!-- About Section Start -->
    <div class="container-fluid py-5 position-relative" style="background: linear-gradient(145deg, #f8f9fa 0%, #ffffff 100%); overflow: hidden;">
        <!-- Decorative Background Elements -->
        <div class="position-absolute" style="top: -10%; left: -5%; width: 300px; height: 300px; background: radial-gradient(circle, rgba(0,123,255,0.05) 0%, transparent 70%); border-radius: 50%;"></div>
        <div class="position-absolute" style="bottom: -10%; right: -5%; width: 400px; height: 400px; background: radial-gradient(circle, rgba(0,123,255,0.05) 0%, transparent 70%); border-radius: 50%;"></div>

        <div class="container py-5 position-relative z-index-1">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right" data-aos-duration="1200">
                    <div class="position-relative mx-auto" style="max-width: 90%;">
                        <!-- Background Accent for Image -->
                        <div class="position-absolute w-100 h-100 rounded-lg" style="top: 20px; left: -20px; background: linear-gradient(135deg, var(--primary, #007bff) 0%, rgba(0,123,255,0.2) 100%); opacity: 0.2; z-index: 0;"></div>

                        <div class="premium-card p-3 position-relative bg-white shadow-lg" style="border-radius: 20px; z-index: 1; transform: perspective(1000px) rotateY(2deg); transition: transform 0.5s ease;" onmouseover="this.style.transform='perspective(1000px) rotateY(0deg) scale(1.02)'" onmouseout="this.style.transform='perspective(1000px) rotateY(2deg) scale(1)'">
                            <img src="{{ asset('img/ce.JPG') }}" alt="About Image" class="img-fluid"
                                style="object-fit: cover; height: 480px; width: 100%; border-radius: 15px;" />

                            <!-- Floating Badge -->
                            <div class="position-absolute shadow-sm" style="bottom: 40px; right: -30px; background: white; padding: 15px 25px; border-radius: 15px; display: flex; align-items: center; gap: 15px; animation: floatBadge 3s ease-in-out infinite;">
                                <div class="bg-primary text-white d-flex align-items-center justify-content-center rounded-circle shadow-sm" style="width: 45px; height: 45px; margin-right: 15px;">
                                    <i class="fas fa-trophy" style="font-size: 1.2rem;"></i>
                                </div>
                                <div>
                                    <h6 class="m-0 font-weight-bold text-dark">Kompetisi Nasional</h6>
                                    <small class="text-muted">Tingkat Pelajar & Mahasiswa</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 pl-lg-5" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                    <div class="d-inline-flex align-items-center px-4 py-2 rounded-pill mb-4 shadow-sm" style="background: rgba(0,123,255,0.05); border: 1px solid rgba(0,123,255,0.1);">
                        <i class="fas fa-info-circle text-primary mr-2"></i>
                        <span class="text-primary text-uppercase font-weight-bold" style="letter-spacing: 2px; font-size: 0.85rem;">About C.O.D.E Challenge</span>
                    </div>

                    <h2 class="display-5 font-weight-bold mb-4" style="line-height: 1.3;">Mengembangkan <span class="text-primary position-relative">Solusi Inovatif<svg class="position-absolute" style="bottom: -5px; left: 0; width: 100%; height: 10px;" viewBox="0 0 100 10" preserveAspectRatio="none"><path d="M0 5 Q 50 10 100 5" stroke="var(--primary, #007bff)" stroke-width="3" fill="none" opacity="0.4"/></svg></span><br>untuk Masa Depan</h2>

                    <p class="text-muted mb-5" style="line-height: 1.8; font-size: 1.1rem;">C.O.D.E Challenge adalah ajang kompetisi nasional oleh Himpunan Mahasiswa Teknologi Informasi yang dirancang untuk menyalurkan potensi generasi muda dalam menciptakan inovasi nyata di bidang teknologi.</p>

                    <div class="row">
                        <div class="col-12 mb-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="d-flex align-items-start p-4 rounded-lg" style="background: white; border: 1px solid rgba(0,0,0,0.05); box-shadow: 0 5px 15px rgba(0,0,0,0.02); transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 10px 25px rgba(0,123,255,0.1)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 5px 15px rgba(0,0,0,0.02)'">
                                <div class="flex-shrink-0 bg-primary text-white d-flex align-items-center justify-content-center rounded-circle shadow"
                                    style="width: 60px; height: 60px; font-size: 1.4rem;">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <div class="ml-4">
                                    <h5 class="mb-2 font-weight-bold">Fokus Teknologi Masa Depan</h5>
                                    <p class="text-muted m-0" style="line-height: 1.6;">Eksplorasi Cybersecurity & IoT untuk transformasi digital.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12" data-aos="fade-up" data-aos-delay="400">
                            <div class="d-flex align-items-start p-4 rounded-lg" style="background: white; border: 1px solid rgba(0,0,0,0.05); box-shadow: 0 5px 15px rgba(0,0,0,0.02); transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 10px 25px rgba(0,123,255,0.1)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 5px 15px rgba(0,0,0,0.02)'">
                                <div class="flex-shrink-0 bg-primary text-white d-flex align-items-center justify-content-center rounded-circle shadow"
                                    style="width: 60px; height: 60px; font-size: 1.4rem;">
                                    <i class="fas fa-certificate"></i>
                                </div>
                                <div class="ml-4">
                                    <h5 class="mb-2 font-weight-bold">Solusi Inovatif untuk Masyarakat</h5>
                                    <p class="text-muted m-0" style="line-height: 1.6;">Mendorong pengembangan Smart City & Smart Farming.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->

    <!-- Activities / Courses Start -->
    <div class="container-fluid px-0 py-5 bg-image">
        <div class="row mx-0 justify-content-center pt-5">
            <div class="col-lg-6">
                <div class="section-title text-center position-relative mb-4">
                    <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">C.O.D.E Challenge
                    </h6>
                    <h1 class="display-4">Activities</h1>
                </div>
            </div>
        </div>
        <div class="owl-carousel courses-carousel">
            <div class="courses-item position-relative">
                <img class="img-fluid w-100" src="{{ asset('img/carousel_LKTI_Mahasiswa.JPG') }}" alt="" style="height: 450px; object-fit: cover; object-position: center;" />
                <div class="courses-text">
                    <h4 class="text-center text-white px-3">LKTI SMA/SMK</h4>
                    <div class="w-100 bg-white text-center p-4">
                        <a class="btn btn-primary" href="lktiSmaSmk.html">Detail</a>
                    </div>
                </div>
            </div>
            <div class="courses-item position-relative">
                <img class="img-fluid w-100" src="{{ asset('img/ctfSmaSmk2.png') }}" alt="" style="height: 450px; object-fit: cover; object-position: center;" />
                <div class="courses-text">
                    <h4 class="text-center text-white px-3">Lomba CTF SMA/SMK</h4>
                    <div class="w-100 bg-white text-center p-4">
                        <a class="btn btn-primary" href="ctfSmaSmk.html">Detail</a>
                    </div>
                </div>
            </div>
            <div class="courses-item position-relative">
                <img class="img-fluid w-100" src="{{ asset('img/ctfMahasiswa2.png') }}" alt="" style="height: 450px; object-fit: cover; object-position: center;" />
                <div class="courses-text">
                    <h4 class="text-center text-white px-3">Lomba CTF Mahasiswa</h4>
                    <div class="w-100 bg-white text-center p-4">
                        <a class="btn btn-primary" href="ctfMahasiswa.html">Detail</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container text-center mt-5 pt-3 d-flex flex-column align-items-center">
            <div class="mb-3">
                <a href="https://drive.google.com/drive/folders/1qfZQiq2JRemefrbJmWr7ug5P3k8ZyNQq"
                    class="btn-animated-gradient">
                    Download Twibbon & Caption
                    <i class="fas fa-cloud-download-alt btn-animated-gradient-icon"></i>
                </a>
            </div>

            <div class="d-flex justify-content-center flex-wrap">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSfQKkcpgvf850BUb-F53pFS-fDcGSV313tMIz92G0YsSr0_wg/viewform"
                    class="btn-animated-gradient m-2"> DAFTAR LOMBA <i
                        class="fas fa-user-plus btn-animated-gradient-icon"></i> </a>
                <a href="https://linktr.ee/guidebookcodex" class="btn-animated-gradient m-2"> GUIDEBOOK <i
                        class="fas fa-download btn-animated-gradient-icon"></i> </a>
                <a href="https://linktr.ee/registcodechallenge?utm_source=linktree_admin_share"
                    class="btn-animated-gradient m-2"> CONTACT PERSON <i
                        class="fas fa-user btn-animated-gradient-icon"></i> </a>
            </div>
        </div>
    </div>
    <!-- Activities / Courses End -->

    <!-- Sponsors & Media Partners -->
    <div class="container-fluid bg-white py-5 text-center">
        <div class="container">
            <div data-aos="fade-up" class="mb-5 pb-3">
                <h6 class="text-secondary text-uppercase font-weight-bold mb-3" style="letter-spacing: 2px;">Our
                    Supporters</h6>
                <h3 class="font-weight-bold mb-4">Collaboration With</h3>
                <img src="{{ asset('img/logoCyco.jpg') }}" alt="Cyco" class="img-fluid"
                    style="max-width: 220px; filter: drop-shadow(0 10px 20px rgba(0,0,0,0.05));" />
            </div>

            <div data-aos="fade-up" data-aos-delay="100" class="mb-5 pb-3">
                <h3 class="font-weight-bold mb-4">Sponsorship</h3>
                <div class="sponsor-grid">
                    <img src="{{ asset('img/logoTelyu.png') }}" alt="Telkom University" />
                    <img src="{{ asset('img/kemahasiswaanTelyuSby.png') }}" alt="BEM TELU" />
                </div>
            </div>

            <div data-aos="fade-up" data-aos-delay="200">
                <h3 class="font-weight-bold mb-4">Media Partners</h3>
                <div class="sponsor-grid">
                    <img src="{{ asset('img/zonaLomba.jpg') }}" alt="Zona Lomba" />
                    <img src="{{ asset('img/HMIT ITS.png') }}" alt="HMIT ITS" />
                    <img src="{{ asset('img/logoHMSI.png') }}" alt="HMSI" />
                    <img src="{{ asset('img/infoLomba.png') }}" alt="Info Lomba" />
                    <img src="{{ asset('img/himaRPL.png') }}" alt="HIMA RPL" />
                    <img src="{{ asset('img/smkTelkomMalang.png') }}" alt="SMK Telkom" />
                    <img src="{{ asset('img/himaITPolinema.png') }}" alt="HIMA IT Polinema" />
                </div>
            </div>
        </div>
    </div>

@endsection

@section('extra-css')
<style>
    @keyframes floatBadge {
        0%   { transform: translateY(0px); }
        50%  { transform: translateY(-10px); }
        100% { transform: translateY(0px); }
    }
</style>
@endsection
