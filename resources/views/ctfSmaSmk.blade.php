@extends('layouts.app')

@section('title', 'Code Challenge - CTF SMA/SMK')

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
                        <img src="{{ asset('img/ctfSmaSmk2.png') }}" alt="CTF SMA/SMK"
                            style="object-position: center" />
                    </div>
                </div>
                <div class="col-lg-7" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                    <div class="comp-overview-content">
                        <div class="comp-overview-badge">
                            <i class="fas fa-shield-alt"></i> Overview
                        </div>
                        <h1 class="comp-overview-title">
                            CTF <span class="title-accent">(Capture the Flag)</span> SMA/SMK
                        </h1>
                        <p class="comp-overview-text">
                            Kompetisi <span class="comp-highlight">Capture The Flag (CTF) SMA/SMK</span> dalam C.O.D.E Challenge hadir sebagai arena bagi para pelajar
                            tingkat SMA/SMK untuk mulai menyelami dunia keamanan siber secara praktis dan menyenangkan. Dirancang khusus
                            untuk menumbuhkan minat generasi muda terhadap <span class="comp-highlight">cybersecurity</span>, kompetisi ini mengajak peserta untuk
                            memecahkan beragam tantangan digital yang meliputi kategori seperti <span class="comp-highlight">kriptografi, forensik digital,
                            web security</span>, hingga soal-soal logika kreatif dalam kategori miscellaneous.
                            Melalui format kompetisi yang seru dan terstruktur, peserta tidak hanya diuji kecepatan berpikirnya,
                            tetapi juga dilatih untuk berpikir kritis, analitis, dan kreatif dalam menghadapi skenario keamanan siber
                            yang nyata. Kompetisi ini diharapkan menjadi <span class="comp-highlight">batu loncatan</span> bagi pelajar berbakat untuk mengenal,
                            mencintai, dan mendalami dunia keamanan digital sejak dini, serta mempersiapkan mereka untuk menjadi
                            generasi profesional siber masa depan yang kompeten dan berdedikasi.
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
                <p class="comp-subtitle">CTF SMA/SMK</p>
            </div>

            <div class="comp-timeline">
                <div class="comp-timeline-item" data-aos="fade-right" data-aos-duration="600" data-aos-delay="100">
                    <div class="comp-timeline-card">
                        <h6>Pendaftaran</h6>
                        <p class="comp-timeline-date"><i class="fas fa-clock"></i> -</p>
                    </div>
                </div>
                <div class="comp-timeline-item" data-aos="fade-left" data-aos-duration="600" data-aos-delay="200">
                    <div class="comp-timeline-card">
                        <h6>Technical Meeting Babak Penyisihan</h6>
                        <p class="comp-timeline-date"><i class="fas fa-clock"></i> -</p>
                    </div>
                </div>
                <div class="comp-timeline-item" data-aos="fade-right" data-aos-duration="600" data-aos-delay="300">
                    <div class="comp-timeline-card">
                        <h6>Pengerjaan Babak Penyisihan</h6>
                        <p class="comp-timeline-date"><i class="fas fa-clock"></i> -</p>
                    </div>
                </div>
                <div class="comp-timeline-item" data-aos="fade-left" data-aos-duration="600" data-aos-delay="400">
                    <div class="comp-timeline-card">
                        <h6>Pengumuman Peserta yang Lolos ke Tahap Final</h6>
                        <p class="comp-timeline-date"><i class="fas fa-clock"></i> -</p>
                    </div>
                </div>
                <div class="comp-timeline-item" data-aos="fade-right" data-aos-duration="600" data-aos-delay="500">
                    <div class="comp-timeline-card">
                        <h6>Technical Meeting Babak Final</h6>
                        <p class="comp-timeline-date"><i class="fas fa-clock"></i> -</p>
                    </div>
                </div>
                <div class="comp-timeline-item" data-aos="fade-left" data-aos-duration="600" data-aos-delay="600">
                    <div class="comp-timeline-card">
                        <h6>Persiapan Babak Final</h6>
                        <p class="comp-timeline-date"><i class="fas fa-clock"></i> -</p>
                    </div>
                </div>
                <div class="comp-timeline-item" data-aos="fade-right" data-aos-duration="600" data-aos-delay="700">
                    <div class="comp-timeline-card">
                        <h6>Babak Final</h6>
                        <p class="comp-timeline-date"><i class="fas fa-clock"></i> -</p>
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
                <p class="comp-subtitle">CTF SMA/SMK</p>
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
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSfQKkcpgvf850BUb-F53pFS-fDcGSV313tMIz92G0YsSr0_wg/viewform"
                        class="comp-btn comp-btn-primary">
                        DAFTAR SEKARANG <i class="fas fa-user-plus"></i>
                    </a>
                    <a href="https://linktr.ee/guidebookcodex" class="comp-btn comp-btn-outline">
                        GUIDEBOOK <i class="fas fa-download"></i>
                    </a>
                    <a href="https://linktr.ee/registcodechallenge?utm_source=linktree_admin_share"
                        class="comp-btn comp-btn-outline">
                        CONTACT PERSON <i class="fas fa-user"></i>
                    </a>
                </div>

                <div class="comp-extend-notice">
                    <i class="fas fa-calendar-alt"></i>
                    <span class="extend-badge">Extend</span>
                    <span>Pendaftaran! Jangan sampai ketinggalan!</span>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA End -->

@endsection
