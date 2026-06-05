<?php
$views_dir = __DIR__ . '/resources/views';
$files = [
    'about.blade.php',
    'aiMahasiswa.blade.php',
    'ctfMahasiswa.blade.php',
    'ctfSmaSmk.blade.php',
    'lktiMahasiswa.blade.php',
    'lktiSmaSmk.blade.php',
    'quadraLink2025.blade.php'
];

$footer_html = <<<HTML
    <!-- Redesigned Footer -->
    <footer class="footer-premium mt-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-5" data-aos="fade-up">
            <img src="{{ asset('img/logo_code_challange.png') }}" alt="Logo C.O.D.E Challenge" class="img-fluid mb-4" style="height: 90px; filter: brightness(0) invert(1);" />
            <p class="mb-4 pr-lg-4" style="line-height: 1.8;">Ajang kompetisi nasional untuk menyalurkan potensi generasi muda dalam menciptakan inovasi nyata di bidang teknologi terkini.</p>
            <div class="social-links">
              <a href="https://www.instagram.com/code.challenge.it/" target="_blank"><i class="fab fa-instagram"></i></a>
              <a href="https://www.instagram.com/it.telkomsurabaya/" target="_blank"><i class="fab fa-instagram"></i></a>
              <a href="https://www.instagram.com/himatisi.telkomuniversitysby/" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 mb-5" data-aos="fade-up" data-aos-delay="100">
            <h4>Contact Info</h4>
            <div class="contact-info mt-4">
              <p><i class="fas fa-map-marker-alt"></i> <span>Telkom University Surabaya</span></p>
              <p><i class="fas fa-phone-alt"></i> <span>0858-5050-7207</span></p>
              <p><i class="fas fa-envelope"></i> <span>codechallengecompetitions@gmail.com</span></p>
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
        
        <div class="border-top pt-4 mt-2 text-center text-md-left d-flex flex-column flex-md-row justify-content-between align-items-center" style="border-color: rgba(255,255,255,0.05) !important;">
          <p class="mb-2 mb-md-0" style="font-size: 0.9rem;">&copy; {{ date('Y') }} C.O.D.E Challenge. All Rights Reserved.</p>
          <p class="mb-0" style="font-size: 0.9rem;">Designed with <i class="fas fa-heart text-danger"></i> for Digital Excellence</p>
        </div>
      </div>
    </footer>

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary rounded-circle back-to-top shadow" style="position: fixed; bottom: 30px; right: 30px; width: 45px; height: 45px; display: flex; align-items: center; justify-content: center; z-index: 99; transition: all 0.3s ease;"><i class="fa fa-angle-up text-white" style="font-size: 1.5rem;"></i></a>
HTML;

$aos_css = <<<HTML
    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
HTML;

$aos_js = <<<HTML
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
          $('.navbar-glass').css('box-shadow', '0 4px 30px rgba(0, 0, 0, 0.1)');
        } else {
          $('.navbar-glass').css('background', 'rgba(255, 255, 255, 0.85) !important');
          $('.navbar-glass').css('box-shadow', '0 4px 30px rgba(0, 0, 0, 0.05)');
        }
      });
    </script>
  </body>
HTML;

foreach ($files as $filename) {
    $filepath = $views_dir . '/' . $filename;
    if (!file_exists($filepath)) continue;
    
    $content = file_get_contents($filepath);
    
    // 1. Replace Footer
    // The old footer might be wrapped in <!-- Footer Start --> ... <!-- Footer End -->
    // or it might just be <div class="container-fluid bg-dark...
    // Let's use a regex to match the old footer and back-to-top button
    $content = preg_replace('/<!-- Footer Start -->.*?<!-- Footer End -->/s', '', $content);
    // Remove old back-to-top
    $content = preg_replace('/<a href="#" class="btn btn-lg btn-primary rounded-0 btn-lg-square back-to-top">.*?<\/a>/s', '', $content);
    // Or if it lacks comments:
    $content = preg_replace('/<div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5".*?<\/footer>/s', '', $content); // In case it has a footer tag or similar block.
    // A safer way for old footer:
    $content = preg_replace('/<div class="container-fluid bg-dark.*?&copy;.*?<\/div>\s*<\/div>/s', '', $content);

    // Some pages have specific text like "codechallengecompetitions@gmail.com" in their dark footer
    $content = preg_replace('/<div class="container-fluid bg-dark text-white-50.*?(?=<!-- Back to Top -->|<a href="#" class="btn btn-lg)/s', '', $content);
    $content = preg_replace('/<!-- Back to Top -->.*?<\/a>/s', '', $content);
    
    // Inject new footer before <!-- JavaScript Libraries -->
    if (strpos($content, $footer_html) === false) {
        $content = str_replace('<!-- JavaScript Libraries -->', $footer_html . "\n\n    <!-- JavaScript Libraries -->", $content);
    }
    
    // 2. Add AOS CSS to Head
    if (strpos($content, 'aos.css') === false) {
        $content = str_replace('<!-- Font Awesome -->', "<!-- Font Awesome -->\n" . $aos_css, $content);
    }
    
    // 3. Add AOS JS and Navbar scroll script to before </body>
    if (strpos($content, 'AOS.init') === false) {
        $content = str_replace('</body>', $aos_js, $content);
    }
    
    // 4. Asset replacements (img/ to {{ asset('img/') }})
    // For specific tags like src="img/something.jpg"
    $content = preg_replace('/src="img\/([^"]+)"/', 'src="{{ asset(\'img/$1\') }}"', $content);
    $content = preg_replace('/href="img\/([^"]+)"/', 'href="{{ asset(\'img/$1\') }}"', $content);
    $content = preg_replace('/url\(\'img\/([^"]+)\'\)/', 'url(\'{{ asset("img/$1") }}\')', $content);
    
    // 5. Add margin-top for content below the transparent navbar
    // Cari elemen pertama setelah Navbar End. Biasanya <div class="jumbotron"> atau <div class="container-fluid page-header">
    // Kita pastikan ada class pt-5 mt-5 supaya tidak ketutup navbar.
    $content = str_replace('class="jumbotron jumbotron-fluid', 'class="jumbotron jumbotron-fluid pt-5 mt-5', $content);
    $content = str_replace('class="container-fluid page-header', 'class="container-fluid page-header pt-5 mt-5', $content);
    $content = str_replace('class="container-fluid py-5"', 'class="container-fluid py-5 pt-lg-5 mt-lg-5"', $content);
    
    // Inject aos data attributes for headings or images if possible
    // A quick blind injection to h1, h2, images. Just the first few.
    $content = preg_replace('/<h1 class="display-4 text-white">/', '<h1 class="display-4 text-white" data-aos="fade-down">', $content, 1);
    
    file_put_contents($filepath, $content);
    echo "Refactored: " . $filename . "\n";
}
echo "All pages processed!\n";
