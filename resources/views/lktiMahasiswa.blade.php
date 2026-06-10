@extends('layouts.app')

@section('title', 'Code Challenge - LKTI Mahasiswa')

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
                        <img src="{{ asset('img/lktiMahasiswa2.png') }}" alt="LKTI Mahasiswa"
                            style="object-fit: cover" />
                    </div>
                </div>
                <div class="col-lg-7" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                    <div class="comp-overview-content">
                        <div class="comp-overview-badge">
                            <i class="fas fa-lightbulb"></i> Overview
                        </div>
                        <h1 class="comp-overview-title">
                            LKTI <span class="title-accent">(Lomba Karya Tulis Ilmiah)</span> Smart
                        </h1>
                        <p class="comp-overview-text">
                            Lomba Karya Tulis Ilmiah (LKTI) ini merupakan bagian penting dari Kompetisi Inovasi Teknologi
                            yang secara khusus dirancang untuk menjadi wadah bagi mahasiswa dalam menyalurkan gagasan dan
                            solusi kreatif untuk menghadapi
                            tantangan masyarakat modern. Dengan mengangkat tema utama <span class="comp-highlight">"Inovasi Teknologi Berbasis IoT untuk Smart City &amp; Smart Farming"</span>, kompetisi ini secara spesifik menantang peserta untuk
                            menganalisis masalah dan menawarkan
                            solusi inovatif. Peserta didorong untuk mengintegrasikan konsep <span class="comp-highlight">Internet of Things (IoT)</span> dalam pengembangan kota cerdas (Smart City) yang efisien serta
                            pertanian pintar (Smart Farming) yang
                            produktif dan berkelanjutan. Lebih dari sekadar kompetisi, kegiatan yang melibatkan seleksi
                            hingga presentasi ini bertujuan mengasah kemampuan <span class="comp-highlight">berpikir kritis dan ilmiah</span>, dengan harapan
                            dapat menghasilkan inovasi teknologi
                            yang aplikatif, berdampak nyata, serta memperkuat kontribusi generasi muda dalam mewujudkan
                            Smart Society.
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
                <p class="comp-subtitle">LKTI Mahasiswa</p>
            </div>

            <div class="comp-timeline">
                <div class="comp-timeline-item" data-aos="fade-right" data-aos-duration="600" data-aos-delay="100">
                    <div class="comp-timeline-card">
                        <div class="comp-timeline-step">1</div>
                        <h6>Pendaftaran Peserta, Seleksi Administrasi dan Teknis Awal, Seleksi Abstrak</h6>
                        <p class="comp-timeline-date"><i class="fas fa-clock"></i> 01 Juli - 21 Juli 2025</p>
                    </div>
                </div>
                <div class="comp-timeline-item" data-aos="fade-left" data-aos-duration="600" data-aos-delay="200">
                    <div class="comp-timeline-card">
                        <div class="comp-timeline-step">2</div>
                        <h6>Penyusunan Proposal Lomba Babak Penyisihan</h6>
                        <p class="comp-timeline-date"><i class="fas fa-clock"></i> 22 Juli - 06 Agustus</p>
                    </div>
                </div>
                <div class="comp-timeline-item" data-aos="fade-right" data-aos-duration="600" data-aos-delay="300">
                    <div class="comp-timeline-card">
                        <div class="comp-timeline-step">3</div>
                        <h6>Pengumpulan Babak Penyisihan</h6>
                        <p class="comp-timeline-date"><i class="fas fa-clock"></i> 06 Agustus 2025</p>
                    </div>
                </div>
                <div class="comp-timeline-item" data-aos="fade-left" data-aos-duration="600" data-aos-delay="400">
                    <div class="comp-timeline-card">
                        <div class="comp-timeline-step">4</div>
                        <h6>Pengumuman Peserta yang Lolos ke Tahap Final</h6>
                        <p class="comp-timeline-date"><i class="fas fa-clock"></i> 07 Agustus 2025</p>
                    </div>
                </div>
                <div class="comp-timeline-item" data-aos="fade-right" data-aos-duration="600" data-aos-delay="500">
                    <div class="comp-timeline-card">
                        <div class="comp-timeline-step">5</div>
                        <h6>Technical Meeting Babak Final</h6>
                        <p class="comp-timeline-date"><i class="fas fa-clock"></i> 08 Agustus 2025</p>
                    </div>
                </div>
                <div class="comp-timeline-item" data-aos="fade-left" data-aos-duration="600" data-aos-delay="600">
                    <div class="comp-timeline-card">
                        <div class="comp-timeline-step">6</div>
                        <h6>Persiapan Babak Final</h6>
                        <p class="comp-timeline-date"><i class="fas fa-clock"></i> 09 - 12 Agustus 2025</p>
                    </div>
                </div>
                <div class="comp-timeline-item" data-aos="fade-right" data-aos-duration="600" data-aos-delay="700">
                    <div class="comp-timeline-card">
                        <div class="comp-timeline-step">7</div>
                        <h6>Babak Final</h6>
                        <p class="comp-timeline-date"><i class="fas fa-clock"></i> 13 Agustus 2025</p>
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
                <p class="comp-subtitle">LKTI Mahasiswa</p>
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
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSfQKkcpgvf850BUb-F53pFS-fDcGSV313tMIz92G0YsSr0_wg/viewform" target="_blank"
                        class="comp-btn comp-btn-primary">
                        DAFTAR SEKARANG <i class="fas fa-user-plus"></i>
                    </a>
                    <a href="https://linktr.ee/guidebookcodex" target="_blank" class="comp-btn comp-btn-outline">
                        GUIDEBOOK <i class="fas fa-download"></i>
                    </a>
                    <a href="https://linktr.ee/registcodechallenge?utm_source=linktree_admin_share" target="_blank"
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
