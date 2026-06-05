import os
import glob
import re

NEW_NAVBAR = """    <!-- Navbar Start -->
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
    <!-- Navbar End -->"""

PREMIUM_CSS_LINK = """<!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    
    <!-- Premium Landing Page CSS -->
    <link href="{{ asset('css/premium-index.css') }}" rel="stylesheet" />"""

views_dir = r"e:\kuliah\hima\clone_part_2\code_challenge\resources\views"

for filepath in glob.glob(os.path.join(views_dir, "*.blade.php")):
    if "index.blade.php" in filepath:
        continue
    
    print(f"Processing {filepath}...")
    with open(filepath, "r", encoding="utf-8") as f:
        content = f.read()
    
    # Replace navbar
    # Mencari pola dari <!-- Navbar Start --> hingga <!-- Navbar End -->
    new_content = re.sub(r'<!-- Navbar Start -->.*?<!-- Navbar End -->', NEW_NAVBAR, content, flags=re.DOTALL)
    
    # Tambahkan link premium-index.css jika belum ada (kita replace baris style.css yang lama)
    if "premium-index.css" not in new_content:
        # Variasi pertama (asli)
        new_content = new_content.replace(
            '<!-- Customized Bootstrap Stylesheet -->\n    <link href="css/style.css" rel="stylesheet" />', 
            PREMIUM_CSS_LINK
        )
        # Variasi kedua (jika sudah diubah ke asset())
        new_content = new_content.replace(
            '<!-- Customized Bootstrap Stylesheet -->\n    <link href="{{ asset(\'css/style.css\') }}" rel="stylesheet" />', 
            PREMIUM_CSS_LINK
        )
        # Variasi ketiga (jika belum ke-replace)
        new_content = new_content.replace(
            '<link href="css/style.css" rel="stylesheet" />', 
            PREMIUM_CSS_LINK
        )
        
    with open(filepath, "w", encoding="utf-8") as f:
        f.write(new_content)

print("Navbar updated in all files successfully!")
