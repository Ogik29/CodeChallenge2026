<?php
$views_dir = __DIR__ . '/resources/views';
$files = glob($views_dir . '/*.blade.php');

$new_navbar = <<<HTML
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-glass fixed-top py-2 px-lg-5">
      <a href="{{ url('/') }}" class="navbar-brand ml-lg-3">
        <img src="{{ asset('img/logo_code_challange.png') }}" alt="Logo" style="height: 65px; width: auto" />
      </a>
      <button type="button" class="navbar-toggler border-0" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end px-lg-3" id="navbarCollapse">
        <div class="navbar-nav py-0">
          <a href="{{ url('/') }}" class="nav-item nav-link">Home</a>
          <a href="{{ url('/about.html') }}" class="nav-item nav-link">About</a>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Kompetisi SMA/SMK</a>
            <div class="dropdown-menu m-0 border-0 shadow-sm rounded-lg">
              <a href="{{ url('/lktiSmaSmk.html') }}" class="dropdown-item">LKTI</a>
              <a href="{{ url('/ctfSmaSmk.html') }}" class="dropdown-item">Capture The Flag</a>
            </div>
          </div>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Kompetisi Mahasiswa</a>
            <div class="dropdown-menu m-0 border-0 shadow-sm rounded-lg">
              <a href="{{ url('/lktiMahasiswa.html') }}" class="dropdown-item">LKTI</a>
              <a href="{{ url('/ctfMahasiswa.html') }}" class="dropdown-item">Capture The Flag</a>
              <a href="{{ url('/aiMahasiswa.html') }}" class="dropdown-item">Artificial Intelligence</a>
            </div>
          </div>
          <a href="{{ url('/quadraLink2025.html') }}" class="nav-item nav-link">QuadraLink 2025</a>
        </div>
      </div>
    </nav>
    <!-- Navbar End -->
HTML;

$premium_link = <<<HTML
<!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    
    <!-- Premium Landing Page CSS -->
    <link href="{{ asset('css/premium-index.css') }}" rel="stylesheet" />
HTML;

foreach ($files as $file) {
    if (strpos($file, 'index.blade.php') !== false) {
        continue;
    }
    
    $content = file_get_contents($file);
    
    // Replace navbar
    $pattern = '/<!-- Navbar Start -->.*?<!-- Navbar End -->/s';
    $content = preg_replace($pattern, $new_navbar, $content);
    
    // Add premium link
    if (strpos($content, 'premium-index.css') === false) {
        $content = str_replace(
            '<!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />',
            $premium_link,
            $content
        );
        $content = str_replace(
            '<!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset(\'css/style.css\') }}" rel="stylesheet" />',
            $premium_link,
            $content
        );
    }
    
    file_put_contents($file, $content);
    echo "Updated: " . basename($file) . "\n";
}
echo "Done!\n";
