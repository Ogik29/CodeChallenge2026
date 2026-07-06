<?php
/**
 * Script untuk memperbaiki semua halaman agar responsif:
 * 1. Mengganti navbar lama dengan navbar baru (navbar-glass, tombol hamburger, dll)
 * 2. Menambahkan link ke premium-index.css
 * 3. Memperbaiki path asset agar menggunakan {{ asset() }}
 * 4. Menambahkan script AOS dan navbar scroll effect
 * 5. Menambahkan preloader
 */

$views_dir = __DIR__ . '/resources/views';
$files = glob($views_dir . '/*.blade.php');

// Template navbar baru (konsisten di semua halaman)
$new_navbar_html = '    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-glass fixed-top py-2 px-lg-5">
        <a href="{{ url(\'/\') }}" class="navbar-brand ml-lg-3">
            <img src="{{ asset(\'img/logo_code_challange.png\') }}" alt="Logo" style="height: 65px; width: auto" />
        </a>
        <button type="button" class="navbar-toggler border-0" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end px-lg-3" id="navbarCollapse">
            <div class="navbar-nav py-0">
                <a href="{{ url(\'/\') }}" class="nav-item nav-link">Home</a>
                <a href="{{ url(\'/about.html\') }}" class="nav-item nav-link">About</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Kompetisi SMA/SMK</a>
                    <div class="dropdown-menu m-0 border-0 shadow-sm rounded-lg">
                        <a href="{{ url(\'/lktiSmaSmk.html\') }}" class="dropdown-item">LKTI</a>
                        <a href="{{ url(\'/ctfSmaSmk.html\') }}" class="dropdown-item">Capture The Flag</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Kompetisi Mahasiswa</a>
                    <div class="dropdown-menu m-0 border-0 shadow-sm rounded-lg">
                        <a href="{{ url(\'/lktiMahasiswa.html\') }}" class="dropdown-item">LKTI</a>
                        <a href="{{ url(\'/ctfMahasiswa.html\') }}" class="dropdown-item">Capture The Flag</a>
                        <a href="{{ url(\'/aiMahasiswa.html\') }}" class="dropdown-item">Artificial Intelligence</a>
                    </div>
                </div>
                <a href="{{ url(\'/quadraLink2025.html\') }}" class="nav-item nav-link">QuadraLink 2025</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->';

// Template head CSS links (premium-index.css)
$new_head_links = '    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />

    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset(\'lib/owlcarousel/assets/owl.carousel.min.css\') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset(\'css/style.css\') }}" rel="stylesheet" />

    <!-- Premium Landing Page CSS -->
    <link href="{{ asset(\'css/premium-index.css\') }}" rel="stylesheet" />';

// Template JS scripts (di bagian bawah body)
$new_scripts = '    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset(\'lib/easing/easing.min.js\') }}"></script>
    <script src="{{ asset(\'lib/waypoints/waypoints.min.js\') }}"></script>
    <script src="{{ asset(\'lib/owlcarousel/owl.carousel.min.js\') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset(\'js/main.js\') }}"></script>
    <script>
        AOS.init({ once: true, offset: 50 });

        // Navbar scroll effect
        $(window).scroll(function() {
            if ($(this).scrollTop() > 50) {
                $(\'.navbar-glass\').css(\'background\', \'rgba(255, 255, 255, 0.98) !important\');
                $(\'.navbar-glass\').css(\'box-shadow\', \'0 4px 30px rgba(0, 0, 0, 0.12)\');
            } else {
                $(\'.navbar-glass\').css(\'background\', \'rgba(255, 255, 255, 0.95) !important\');
                $(\'.navbar-glass\').css(\'box-shadow\', \'0 4px 30px rgba(0, 0, 0, 0.05)\');
            }
        });
    </script>';

// Pages to skip (index & about already done properly)
$skip_pages = ['index.blade.php', 'welcome.blade.php'];

foreach ($files as $file) {
    $basename = basename($file);
    
    if (in_array($basename, $skip_pages)) {
        echo "Skipping: $basename\n";
        continue;
    }
    
    $content = file_get_contents($file);
    $original = $content;
    
    // 1. REPLACE <head> CSS section - remove old fonts/css and add new ones
    // Remove old google fonts / font awesome / AOS / owlcarousel / style.css links
    $content = preg_replace(
        '/<!\-\- Google Web Fonts \-\->.*?(?=<\/head>|<body>)/si',
        $new_head_links . "\n\n",
        $content
    );
    
    // If no Google Web Fonts comment found, try to replace just before </head>
    if (strpos($content, 'premium-index.css') === false) {
        // Add before </head>
        $content = str_replace('</head>', $new_head_links . "\n</head>", $content);
    }
    
    // 2. REPLACE OLD NAVBAR with new navbar-glass
    // Handle various navbar patterns
    
    // Pattern 1: Old Bootstrap light navbar in container
    $content = preg_replace(
        '/<div class="container-fluid p-0">\s*<nav class="navbar[^"]*navbar-light[^"]*"[^>]*>.*?<\/nav>\s*<\/div>/si',
        $new_navbar_html,
        $content
    );
    
    // Pattern 2: navbar without container wrapper but with old style (non-glass)
    // Only replace if it doesn't already have navbar-glass
    if (strpos($content, 'navbar-glass') === false) {
        $content = preg_replace(
            '/<!\-\- Navbar Start \-\->.*?<!\-\- Navbar End \-\->/si',
            $new_navbar_html,
            $content
        );
    }
    
    // Pattern 3: nav without comments but with navbar-light
    if (strpos($content, 'navbar-glass') === false) {
        $content = preg_replace(
            '/<nav class="navbar[^"]*navbar-light[^"]*"[^>]*>.*?<\/nav>/si',
            $new_navbar_html,
            $content
        );
    }
    
    // 3. REPLACE OLD JS SCRIPTS at bottom with new ones
    // Find and replace script block
    $content = preg_replace(
        '/<!\-\- JavaScript Libraries \-\->.*?<\/script>\s*(?=<\/body>)/si',
        $new_scripts . "\n",
        $content
    );
    
    // 4. Fix old relative asset paths to use Laravel asset()
    // Fix CSS paths
    $content = str_replace('href="css/style.css"', 'href="{{ asset(\'css/style.css\') }}"', $content);
    $content = str_replace('href="css/premium-index.css"', 'href="{{ asset(\'css/premium-index.css\') }}"', $content);
    
    // Fix image paths in img tags
    $content = preg_replace('/src="img\/([^"]+)"/', 'src="{{ asset(\'img/$1\') }}"', $content);
    
    // Fix lib paths
    $content = str_replace('src="lib/', 'src="{{ asset(\'lib/', $content);
    $content = str_replace('.min.js"', '.min.js\') }}"', $content);
    // Revert double replacement for CDN links
    $content = str_replace('https://code.jquery.com/jquery-3.4.1.min.js\') }}"', 'https://code.jquery.com/jquery-3.4.1.min.js"', $content);
    $content = str_replace('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js\') }}"', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"', $content);
    $content = str_replace('https://unpkg.com/aos@2.3.1/dist/aos.js\') }}"', 'https://unpkg.com/aos@2.3.1/dist/aos.js"', $content);
    
    // Fix owlcarousel css
    $content = str_replace(
        'href="lib/owlcarousel/assets/owl.carousel.min.css"',
        'href="{{ asset(\'lib/owlcarousel/assets/owl.carousel.min.css\') }}"',
        $content
    );
    
    // Fix js/main.js
    $content = str_replace('src="js/main.js"', 'src="{{ asset(\'js/main.js\') }}"', $content);
    
    // 5. Fix href paths for navbar links if they're plain relative
    $content = str_replace('href="index.html"', 'href="{{ url(\'/\') }}"', $content);
    $content = str_replace('href="about.html"', 'href="{{ url(\'/about.html\') }}"', $content);
    
    if ($content !== $original) {
        file_put_contents($file, $content);
        echo "Updated: $basename\n";
    } else {
        echo "No change: $basename\n";
    }
}

echo "\nDone! All pages processed.\n";
