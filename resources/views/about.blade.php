@extends('layouts.app')

@section('title', 'About - C.O.D.E Challenge')

@section('content')

    <!-- ==========================================
         HERO / HEADER SECTION
         ========================================== -->
    <div class="jumbotron jumbotron-fluid pt-5 mt-5 position-relative bg-image" style="margin-bottom: 90px">
        <div class="container text-center my-5 py-5" data-aos="fade-down" data-aos-duration="1000">
            <img src="{{ asset('img/logo_code_challange.png') }}" alt="Logo" class="img-fluid header-main-logo"
                style="margin-bottom: 20px" />
            <h3 class="text-primary mb-5">Cyber Competition and Digital Excellence Challenge</h3>
            <div class="mx-auto mb-5" style="width: 100%; max-width: 600px"></div>
        </div>
    </div>

    <!-- ==========================================
         TENTANG KAMI (ABOUT US) SECTION
         ========================================== -->
    <div class="container-fluid py-5 pt-lg-5 mt-lg-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px" data-aos="fade-right">
                    <div class="position-relative h-100 premium-card p-2" style="border-radius: 15px; overflow: hidden">
                        <img class="position-absolute w-100 h-100" src="{{ asset('img/abaoutimg.JPG') }}"
                            style="object-fit: cover" alt="About C.O.D.E Challenge" />
                    </div>
                </div>
                <div class="col-lg-7" data-aos="fade-left">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">C.O.D.E
                            Challenge</h6>
                        <h1 class="display-4 font-weight-bold">About Us</h1>
                    </div>
                    <p style="line-height: 1.8;">
                        C.O.D.E Challenge adalah ajang kompetisi nasional yang diselenggarakan oleh <b>Himpunan
                            Mahasiswa Teknologi Informasi Telkom University Surabaya</b> yang dirancang untuk
                        menyalurkan potensi serta kreativitas generasi muda,
                        baik pelajar maupun mahasiswa, dalam menciptakan inovasi nyata di bidang teknologi. Kami
                        mendorong lahirnya inovasi dalam pemanfaatan teknologi digital seperti Cybersecurity dan Internet
                        of Things (IoT) untuk pengembangan Smart City and Smart Farming sebagai solusi masa depan yang
                        berkelanjutan. Tujuan utama kami adalah mengasah kemampuan peserta dalam mengembangkan solusi
                        untuk tantangan nyata di
                        masyarakat.
                    </p>

                    <!-- Pilar Kompetisi -->
                    <div class="row pt-3 mx-0 mt-4">
                        <div class="col-12 col-md-6 px-0 mb-3 mb-md-0">
                            <div class="bg-success text-center p-4 h-100 d-flex flex-column justify-content-center premium-card shadow-sm"
                                style="border: none;">
                                <h6 class="text-uppercase text-white font-weight-bold mb-0">Keamanan<span
                                        class="d-block mt-2">Siber</span></h6>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 px-0">
                            <div class="bg-primary text-center p-4 h-100 d-flex flex-column justify-content-center premium-card shadow-sm"
                                style="border: none;">
                                <h6 class="text-uppercase text-white font-weight-bold mb-0">Internet<span
                                        class="d-block mt-2">of Things</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==========================================
         TEMA (THEME) SECTION
         ========================================== -->
    <div class="container-fluid py-5 bg-image">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10" data-aos="fade-up">
                    <div class="mb-5 text-center">
                        <div class="section-title position-relative mb-5 d-inline-block">
                            <h6 class="text-secondary text-uppercase pb-2" style="letter-spacing: 2px;">Cyber
                                Competition and Digital Excellence Challenge</h6>
                            <h1 class="display-4 font-weight-bold">C.O.D.E Challenge Theme</h1>
                        </div>
                        <p class="text-left" style="line-height: 1.8;">
                            Mengusung semangat kolaborasi yang erat antar peserta serta mendorong gelombang inovasi
                            teknologi terkini, kompetisi ini dirancang secara komprehensif sebagai platform strategis
                            untuk menjawab berbagai tantangan kompleks
                            yang dihadapi oleh masyarakat modern. Dengan mengedepankan tema besar pemberdayaan 'society'
                            atau kemasyarakatan secara luas, kegiatan ini secara proaktif mengajak partisipasi aktif
                            dari para siswa dan mahasiswa bertalenta.
                        </p>
                        <p class="text-left" style="line-height: 1.8;">
                            Peserta didorong untuk mengeksplorasi dan menciptakan beragam solusi kreatif dan aplikatif,
                            khususnya dengan memfokuskan keahlian mereka dalam dua pilar teknologi krusial masa depan:
                            Keamanan Siber (Cybersecurity) yang
                            esensial untuk melindungi aset digital, serta Internet of Things (IoT) yang menghubungkan dunia
                            fisik dan digital untuk efisiensi dan produktivitas.
                            Lebih jauh lagi, para peserta tidak hanya berhenti pada tahap konseptualisasi, melainkan
                            juga diberikan kesempatan berharga untuk melalui seluruh siklus pengembangan, mulai dari
                            pematangan ide awal, perancangan dan
                            penyusunan sistem yang fungsional, hingga akhirnya mempresentasikan hasil karya inovatif
                            mereka secara langsung di hadapan panelis yang terdiri dari para akademisi ahli dan praktisi
                            industri berpengalaman di bidangnya
                            masing-masing.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==========================================
         DOKUMENTASI KEGIATAN (GALLERY) SECTION
         ========================================== -->
    <div class="container-fluid gallery-section py-5 my-5">
        <div class="container">
            <div class="section-title text-center position-relative pb-3 mx-auto mb-5" style="max-width: 800px"
                data-aos="fade-up">
                <h6 class="text-primary text-uppercase font-weight-bold" style="letter-spacing: 2px;">Our Memories
                </h6>
                <h1 class="display-4 font-weight-bold">Dokumentasi Kegiatan</h1>
            </div>

            <!-- Wadah Gambar Galeri -->
            <div id="gallery-container" class="row" data-aos="fade-up" data-aos-delay="200" style="min-height: 580px;"></div>

            <!-- Wadah Pagination (Tombol Next/Prev) -->
            <div id="pagination-wrapper" class="d-flex justify-content-center mt-5" data-aos="fade-up"
                data-aos-delay="300"></div>
        </div>
    </div>

    <!-- Lightbox Modal Start -->
    <div id="gallery-lightbox" class="gallery-lightbox" style="display: none;">
        <span class="lightbox-close">&times;</span>
        <div class="lightbox-content-wrapper">
            <img class="lightbox-content" id="lightbox-img" src="" alt="" />
            <div id="lightbox-caption" class="lightbox-caption"></div>
        </div>
    </div>
    <!-- Lightbox Modal End -->

@endsection

@section('extra-js')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const galleryImages = [
            { src: "{{ asset('img/hiasan-1.jpg') }}", alt: 'pict C.O.D.E Challenge 1' },
            { src: "{{ asset('img/hiasan-2.jpg') }}", alt: 'pict C.O.D.E Challenge 2' },
            { src: "{{ asset('img/kategori_mahasiswa.JPG') }}", alt: 'pict C.O.D.E Challenge 3' },
            { src: "{{ asset('img/explo (4).jpg') }}", alt: 'pict C.O.D.E Challenge 4' },
            { src: "{{ asset('img/explo (5).jpg') }}", alt: 'pict C.O.D.E Challenge 5' },
            { src: "{{ asset('img/explo (6).jpg') }}", alt: 'pict C.O.D.E Challenge 6' },
            { src: "{{ asset('img/explo (7).jpg') }}", alt: 'pict C.O.D.E Challenge 7' },
            { src: "{{ asset('img/explo (8).jpg') }}", alt: 'pict C.O.D.E Challenge 8' },
            { src: "{{ asset('img/explo (9).jpg') }}", alt: 'pict C.O.D.E Challenge 9' },
            { src: "{{ asset('img/explo (10).jpg') }}", alt: 'pict C.O.D.E Challenge 10' },
            { src: "{{ asset('img/hiasan-3.jpg') }}", alt: 'pict C.O.D.E Challenge 11' },
            { src: "{{ asset('img/explo (12).jpg') }}", alt: 'pict C.O.D.E Challenge 12' },
            { src: "{{ asset('img/explo (1).jpg') }}", alt: 'pict C.O.D.E Challenge 13' },
            { src: "{{ asset('img/explo (14).jpg') }}", alt: 'pict C.O.D.E Challenge 14' },
            { src: "{{ asset('img/hiasan-6.jpg') }}", alt: 'pict C.O.D.E Challenge 15' },
            { src: "{{ asset('img/hiasan-7.jpg') }}", alt: 'pict C.O.D.E Challenge 16' },
            { src: "{{ asset('img/hiasan-5.jpg') }}", alt: 'pict C.O.D.E Challenge 17' },
            { src: "{{ asset('img/hiasan-4.jpg') }}", alt: 'pict C.O.D.E Challenge 18' },
        ];

        const ITEMS_PER_PAGE = 6;
        let currentPage = 1;

        const galleryContainer = document.getElementById('gallery-container');
        const paginationWrapper = document.getElementById('pagination-wrapper');

        function renderGallery(page) {
            const startIndex = (page - 1) * ITEMS_PER_PAGE;
            const endIndex = startIndex + ITEMS_PER_PAGE;
            const imagesToShow = galleryImages.slice(startIndex, endIndex);
 
            let htmlContent = '';
            imagesToShow.forEach((image) => {
                htmlContent += `
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="gallery-grid-item premium-card" style="border-radius: 15px; overflow: hidden; position: relative;" onmouseover="this.querySelector('.gallery-overlay').style.opacity='1'" onmouseout="this.querySelector('.gallery-overlay').style.opacity='0'">
                            <img src="${image.src}" alt="${image.alt}" loading="lazy" class="img-fluid w-100" style="height: 250px; object-fit: cover;" />
                            <div class="gallery-overlay" onclick="openLightbox('${image.src}', '${image.alt.replace(/'/g, "\\'")}')" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(13, 110, 253, 0.5); display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s; cursor: pointer;">
                                <i class="fa fa-plus fa-2x text-white"></i>
                            </div>
                        </div>
                    </div>
                `;
            });
 
            galleryContainer.innerHTML = htmlContent;
        }
 
        function renderPagination() {
            const totalPages = Math.ceil(galleryImages.length / ITEMS_PER_PAGE);
            paginationWrapper.innerHTML = '';
 
            const nav = document.createElement('nav');
            nav.setAttribute('aria-label', 'Gallery Page Navigation');
 
            const ul = document.createElement('ul');
            ul.className = 'pagination';
 
            function createPageItem(pageNumber, text, isDisabled = false, isActive = false) {
                const li = document.createElement('li');
                li.className = 'page-item';
                if (isDisabled) li.classList.add('disabled');
                if (isActive) li.classList.add('active');
 
                const a = document.createElement('a');
                a.className = 'page-link rounded-circle mx-1 border-0 shadow-sm font-weight-bold';
                a.href = '#';
                a.innerHTML = text;
                if (isActive) {
                    a.style.backgroundColor = 'var(--primary-color)';
                    a.style.color = 'white';
                } else {
                    a.style.color = '#334155';
                }
 
                a.addEventListener('click', (e) => {
                    e.preventDefault();
                    if (!isDisabled) {
                        currentPage = pageNumber;
                        updateApp();
                    }
                });
                li.appendChild(a);
                return li;
            }
 
            ul.appendChild(createPageItem(currentPage - 1, '&laquo;', currentPage === 1));
            for (let i = 1; i <= totalPages; i++) {
                ul.appendChild(createPageItem(i, i, false, i === currentPage));
            }
            ul.appendChild(createPageItem(currentPage + 1, '&raquo;', currentPage === totalPages));
 
            nav.appendChild(ul);
            paginationWrapper.appendChild(nav);
        }
 
        function updateApp() {
            renderGallery(currentPage);
            renderPagination();
        }
 
        // Lightbox Functions
        const lightbox = document.getElementById('gallery-lightbox');
        const lightboxImg = document.getElementById('lightbox-img');
        const lightboxCaption = document.getElementById('lightbox-caption');
        const closeBtn = document.querySelector('.lightbox-close');

        window.openLightbox = function(src, alt) {
            lightboxImg.src = src;
            lightboxCaption.textContent = alt;
            
            lightbox.style.display = 'flex';
            // Force reflow
            lightbox.offsetHeight;
            lightbox.classList.add('show');
            document.body.style.overflow = 'hidden'; // Lock scrolling
        };

        function closeLightbox() {
            lightbox.classList.remove('show');
            setTimeout(() => {
                lightbox.style.display = 'none';
                document.body.style.overflow = 'auto'; // Unlock scrolling
            }, 400);
        }

        closeBtn.addEventListener('click', closeLightbox);

        // Close when clicking background backdrop
        lightbox.addEventListener('click', function(e) {
            if (e.target === lightbox || e.target.classList.contains('lightbox-content-wrapper')) {
                closeLightbox();
            }
        });

        // Close on ESC key press
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && lightbox.classList.contains('show')) {
                closeLightbox();
            }
        });

        renderGallery(currentPage);
        renderPagination();
    });
</script>
@endsection

@section('extra-css')
<style>
    /* Lightbox Modal Styles */
    .gallery-lightbox {
        position: fixed;
        z-index: 9999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(15, 23, 42, 0.9);
        backdrop-filter: blur(8px);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        opacity: 0;
        transition: opacity 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
    }
    
    .gallery-lightbox.show {
        opacity: 1;
    }

    .lightbox-content-wrapper {
        position: relative;
        max-width: 85%;
        max-height: 85%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .lightbox-content {
        margin: auto;
        display: block;
        max-width: 100%;
        max-height: 80vh;
        border-radius: 12px;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        transform: scale(0.9);
        transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    .gallery-lightbox.show .lightbox-content {
        transform: scale(1);
    }

    .lightbox-close {
        position: absolute;
        top: 30px;
        right: 40px;
        color: #f1f5f9;
        font-size: 50px;
        font-weight: 300;
        transition: all 0.3s ease;
        cursor: pointer;
        z-index: 10000;
        line-height: 1;
    }

    .lightbox-close:hover {
        color: #f43f5e;
        transform: rotate(90deg);
    }

    .lightbox-caption {
        margin-top: 20px;
        color: #cbd5e1;
        font-size: 16px;
        text-align: center;
        font-weight: 500;
        letter-spacing: 0.5px;
    }
</style>
@endsection

