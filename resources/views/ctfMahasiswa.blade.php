@extends('layouts.app')

@section('title', 'Code Challenge - CTF Mahasiswa')

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
                        <img src="{{ asset('img/ctfMahasiswa2.png') }}" alt="CTF Mahasiswa"
                            style="object-position: 35% 65%" />
                    </div>
                </div>
                <div class="col-lg-7" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                    <div class="comp-overview-content">
                        <div class="comp-overview-badge">
                            <i class="fas fa-shield-alt"></i> Overview
                        </div>
                        <h1 class="comp-overview-title">
                            CTF <span class="title-accent">(Capture the Flag)</span> Mahasiswa
                        </h1>
                        <p class="comp-overview-text">
                            Sebagai sorotan utama dan bagian esensial dari C.O.D.E Challenge 2025, kompetisi <span class="comp-highlight">Capture The
                            Flag (CTF)</span> hadir sebagai platform yang dirancang secara cermat untuk mengasah, menguji, dan
                            mengangkat keahlian keamanan siber di
                            kalangan mahasiswa. Ajang ini sengaja diciptakan untuk menantang para calon profesional pada
                            tantangan siber yang nyata, menjembatani konsep akademis dengan aplikasi industri dalam sebuah
                            lingkungan yang kompetitif. Dalam
                            arena digital ini, setiap peserta akan didorong untuk menyelami skenario <span class="comp-highlight">peretasan etis</span>, di mana
                            mereka harus memecahkan studi kasus keamanan yang kompleks dan mengidentifikasi celah kerentanan
                            sistem untuk merebut 'flag'
                            tersembunyi. Tantangan tersebut tersebar dalam beragam kategori fundamental seperti <span class="comp-highlight">kriptografi,
                            forensik digital, serta web security</span>, hingga kategori miscellaneous yang menantang kreativitas
                            tanpa batas. Setiap tantangan
                            dirancang untuk tidak hanya menguji kecepatan, tetapi juga untuk menstimulasi kemampuan berpikir
                            kritis dalam menganalisis masalah, berpikir kreatif untuk menemukan solusi tak terduga
                            (out-of-the-box), dan berpikir strategis
                            dalam merencanakan langkah-langkah penyelesaian. Kompetisi ini diselenggarakan melalui <span class="comp-highlight">dua tahap
                            krusial</span>: babak penyisihan yang dilaksanakan secara daring untuk menjangkau talenta dari seluruh
                            penjuru, diikuti oleh babak final
                            yang menegangkan secara luring bagi para finalis terbaik. Pada akhirnya, C.O.D.E Challenge CTF
                            memiliki visi yang lebih besar: melahirkan generasi profesional siber berikutnya. Mereka adalah
                            talenta-talenta unggul yang tidak
                            hanya kompeten secara teknis, tetapi juga memiliki kesadaran mendalam akan urgensi keamanan
                            digital. Diharapkan, para alumni kompetisi ini akan menjadi talenta siap kerja yang dapat
                            berkontribusi aktif dalam membangun dan
                            melindungi fondasi Smart Society yang cerdas, aman, dan tangguh di masa depan.
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
                <p class="comp-subtitle">CTF Mahasiswa</p>
            </div>

            <div class="comp-timeline">
                <div class="comp-timeline-item" data-aos="fade-right" data-aos-duration="600" data-aos-delay="100">
                    <div class="comp-timeline-card">
                        <h6>Pendaftaran Peserta (Early Bid)</h6>
                        <p class="comp-timeline-date"><i class="fas fa-clock"></i> 11 Juni - 30 Juni 2026</p>
                    </div>
                </div>
                <div class="comp-timeline-item" data-aos="fade-left" data-aos-duration="600" data-aos-delay="200">
                    <div class="comp-timeline-card">
                        <h6>Pendaftaran Peserta (Reguler)</h6>
                        <p class="comp-timeline-date"><i class="fas fa-clock"></i> 1 Juli - 1 Agustus 2026</p>
                    </div>
                </div>
                <div class="comp-timeline-item" data-aos="fade-right" data-aos-duration="600" data-aos-delay="300">
                    <div class="comp-timeline-card">
                        <h6>Technical Meeting Babak Penyisihan</h6>
                        <p class="comp-timeline-date"><i class="fas fa-clock"></i> 17 September 2026</p>
                    </div>
                </div>
                <div class="comp-timeline-item" data-aos="fade-left" data-aos-duration="600" data-aos-delay="400">
                    <div class="comp-timeline-card">
                        <h6>Pengerjaan Babak Penyisihan</h6>
                        <p class="comp-timeline-date"><i class="fas fa-clock"></i> 20 September 2026</p>
                    </div>
                </div>
                <div class="comp-timeline-item" data-aos="fade-right" data-aos-duration="600" data-aos-delay="500">
                    <div class="comp-timeline-card">
                        <h6>Pengumuman Finalis</h6>
                        <p class="comp-timeline-date"><i class="fas fa-clock"></i> 23 September 2026</p>
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
                        <h6>Persiapan Babak Final</h6>
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
                <p class="comp-subtitle">CTF Mahasiswa</p>
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
                    <a href="https://api.whatsapp.com/send/?phone=6282125471784&text&type=phone_number&app_absent=0" target="_blank"
                        class="comp-btn comp-btn-outline">
                        CONTACT PERSON <i class="fas fa-user"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA End -->

@endsection
