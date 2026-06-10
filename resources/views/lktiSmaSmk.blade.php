@extends('layouts.app')

@section('title', 'Code Challenge - LKTI SMA/SMK')

@section('extra-css')
    <link href="{{ asset('css/competition-pages.css') }}" rel="stylesheet" />
@endsection

@section('content')

    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid pt-5 mt-5 position-relative bg-image" style="margin-bottom: 90px">
        <div class="container text-center my-5 py-5">
            <img src="{{ asset('img/logo_code_challange.png') }}" alt="Logo" class="img-fluid header-main-logo"
                style="margin-bottom: 20px" />
            <h3 class="text-primary mb-5">Cyber Competition and Digital Excellence Challenge</h3>
            <div class="mx-auto mb-5" style="width: 100%; max-width: 600px"></div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Overview Start -->
    <section class="comp-overview-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0" data-aos="fade-right" data-aos-duration="800">
                    <div class="comp-overview-img-wrapper">
                        <img src="{{ asset('img/lktiSmaSmk2.png') }}" alt="LKTI SMA/SMK"
                            style="object-fit: cover" />
                    </div>
                </div>
                <div class="col-lg-7" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                    <div class="comp-overview-content">
                        <div class="comp-overview-badge">
                            <i class="fas fa-graduation-cap"></i> Overview
                        </div>
                        <h1 class="comp-overview-title">
                            LKTI <span class="title-accent">(Lomba Karya Tulis Ilmiah)</span> SMA/SMK
                        </h1>
                        <p class="comp-overview-text">
                            Lomba Karya Tulis Ilmiah (LKTI) ini dirancang sebagai platform bagi para pelajar tingkat SMA/SMK
                            untuk menumbuhkan minat dan kreativitas di bidang riset dan teknologi. Dengan mengusung tema
                            <span class="comp-highlight">"Inovasi Teknologi Berbasis IoT untuk Smart City &amp; Smart Farming"</span>, kompetisi ini mengajak para siswa untuk mulai berpikir
                            kritis terhadap tantangan di sekitar mereka dan menawarkan solusi imajinatif. Peserta ditantang
                            untuk mengeksplorasi konsep <span class="comp-highlight">Internet of Things (IoT)</span> dalam merancang model kota cerdas (Smart City)
                            maupun pertanian pintar (Smart Farming) di masa depan. Lebih dari sekadar ajang perlombaan,
                            kegiatan ini bertujuan untuk mengasah
                            kemampuan <span class="comp-highlight">analisis, penulisan ilmiah, dan presentasi</span> sejak dini, sekaligus memantik semangat
                            para pelajar untuk menjadi inovator dan kontributor aktif bagi masyarakat berbasis teknologi di
                            kemudian hari.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Overview End -->

    <!-- Timeline Start -->
    <section class="comp-timeline-section">
        <div class="container">
            <div class="comp-timeline-header" data-aos="fade-up" data-aos-duration="600">
                <div class="comp-section-label"><i class="fas fa-calendar-alt mr-2"></i> Jadwal Kegiatan</div>
                <h2><span>TIMELINE</span></h2>
                <p class="comp-subtitle">LKTI SMA/SMK</p>
            </div>

            <div class="comp-timeline">
                <div class="comp-timeline-item" data-aos="fade-right" data-aos-duration="600" data-aos-delay="100">
                    <div class="comp-timeline-card">
                        <h6>Pendaftaran Peserta dan Seleksi Administrasi dan Teknis Awal, Seleksi Abstrak</h6>
                        <p class="comp-timeline-date"><i class="fas fa-clock"></i> 11 Juni - 30 Agustus 2026</p>
                    </div>
                </div>
                <div class="comp-timeline-item" data-aos="fade-left" data-aos-duration="600" data-aos-delay="200">
                    <div class="comp-timeline-card">
                        <h6>Pengumuman Lolos Penyisihan</h6>
                        <p class="comp-timeline-date"><i class="fas fa-clock"></i> 6 September 2026</p>
                    </div>
                </div>
                <div class="comp-timeline-item" data-aos="fade-right" data-aos-duration="600" data-aos-delay="300">
                    <div class="comp-timeline-card">
                        <h6>Penyusunan Proposal Lomba Babak Penyisihan (Early Bid)</h6>
                        <p class="comp-timeline-date"><i class="fas fa-clock"></i> 8 September - 15 September 2026</p>
                    </div>
                </div>
                <div class="comp-timeline-item" data-aos="fade-left" data-aos-duration="600" data-aos-delay="400">
                    <div class="comp-timeline-card">
                        <h6>Penyusunan Proposal Lomba Babak Penyisihan (Reguler)</h6>
                        <p class="comp-timeline-date"><i class="fas fa-clock"></i> 16 September - 23 September 2026</p>
                    </div>
                </div>
                <div class="comp-timeline-item" data-aos="fade-right" data-aos-duration="600" data-aos-delay="500">
                    <div class="comp-timeline-card">
                        <h6>Pengumuman Finalis & Waiting list</h6>
                        <p class="comp-timeline-date"><i class="fas fa-clock"></i> 3 Oktober 2026</p>
                    </div>
                </div>
                <div class="comp-timeline-item" data-aos="fade-left" data-aos-duration="600" data-aos-delay="600">
                    <div class="comp-timeline-card">
                        <h6>Technical Meeting Babak Final</h6>
                        <p class="comp-timeline-date"><i class="fas fa-clock"></i> TBA</p>
                    </div>
                </div>
                <div class="comp-timeline-item" data-aos="fade-right" data-aos-duration="600" data-aos-delay="700">
                    <div class="comp-timeline-card">
                        <h6>Pembuatan PPT (Finalis)</h6>
                        <p class="comp-timeline-date"><i class="fas fa-clock"></i> TBA</p>
                    </div>
                </div>
                <div class="comp-timeline-item" data-aos="fade-left" data-aos-duration="600" data-aos-delay="800">
                    <div class="comp-timeline-card">
                        <h6>Babak Final</h6>
                        <p class="comp-timeline-date"><i class="fas fa-clock"></i> TBA</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Timeline End -->

    <!-- Reward Start -->
    <section class="comp-reward-section">
        <div class="container">
            <div class="comp-reward-header" data-aos="fade-up" data-aos-duration="600">
                <div class="comp-section-label"><i class="fas fa-trophy mr-2"></i> Penghargaan</div>
                <h2>Penghargaan Juara</h2>
                <p class="comp-subtitle">LKTI SMA/SMK</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
                    <div class="comp-reward-card gold">
                        <div class="comp-trophy-container"><i class="fas fa-trophy"></i></div>
                        <p class="comp-rank">Champion</p>
                        <h3 class="comp-rank-title">Juara 1</h3>
                        <div class="comp-reward-divider"></div>
                        <p class="comp-reward-detail">Uang Pembinaan</p>
                        <div class="comp-reward-bonus">
                            <i class="fas fa-plus-circle"></i> Sertifikat Penghargaan & piala
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="600" data-aos-delay="250">
                    <div class="comp-reward-card silver">
                        <div class="comp-trophy-container"><i class="fas fa-trophy"></i></div>
                        <p class="comp-rank">Runner Up</p>
                        <h3 class="comp-rank-title">Juara 2</h3>
                        <div class="comp-reward-divider"></div>
                        <p class="comp-reward-detail">Uang Pembinaan</p>
                        <div class="comp-reward-bonus">
                            <i class="fas fa-plus-circle"></i> Sertifikat Penghargaan & piala
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="600" data-aos-delay="400">
                    <div class="comp-reward-card bronze">
                        <div class="comp-trophy-container"><i class="fas fa-trophy"></i></div>
                        <p class="comp-rank">3rd Place</p>
                        <h3 class="comp-rank-title">Juara 3</h3>
                        <div class="comp-reward-divider"></div>
                        <p class="comp-reward-detail">Uang Pembinaan</p>
                        <div class="comp-reward-bonus">
                            <i class="fas fa-plus-circle"></i> Sertifikat Penghargaan & piala
                        </div>
                    </div>
                </div>
            </div>
            <div class="comp-finalis-note" data-aos="fade-up" data-aos-duration="600" data-aos-delay="500">
                <i class="fas fa-certificate"></i>
                <p>Peserta yang lolos tahap final akan mendapatkan sertifikat finalis</p>
            </div>
        </div>
    </section>
    <!-- Reward End -->

    <!-- CTA Start -->
    <section class="comp-cta-section">
        <div class="container">
            <div class="comp-cta-content" data-aos="fade-up" data-aos-duration="600">
                <h3>Siap Untuk Berkompetisi?</h3>
                <p class="comp-cta-desc">Daftarkan dirimu sekarang dan tunjukkan kemampuan terbaikmu!</p>

                <div class="comp-cta-buttons">
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSe28esd9213ofRzAqcFFgq9bLlFhF3CbBhhbl1qkFJgBrtKZA/viewform" target="_blank"
                        class="comp-btn comp-btn-primary">
                        DAFTAR SEKARANG <i class="fas fa-user-plus"></i>
                    </a>
                    <a href="https://linktr.ee/guidebookCODEChallange" target="_blank" class="comp-btn comp-btn-outline">
                        GUIDEBOOK <i class="fas fa-download"></i>
                    </a>
                    <a href="https://api.whatsapp.com/send/?phone=6285853477764&text&type=phone_number&app_absent=0" target="_blank"
                        class="comp-btn comp-btn-outline">
                        CONTACT PERSON <i class="fas fa-user"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA End -->

@endsection
