<?php
$views_dir = __DIR__ . '/resources/views';
$files = glob($views_dir . '/*.blade.php');

foreach ($files as $file) {
    if (!file_exists($file)) continue;
    $content = file_get_contents($file);
    $original_content = $content;
    
    // 1. Remove dropdown item
    // Match the refactored url syntax
    $content = preg_replace('/<a href="\{\{\s*url\(\'\/aiMahasiswa\.html\'\)\s*\}\}" class="dropdown-item">Artificial Intelligence<\/a>\s*/s', '', $content);
    // Match the old syntax
    $content = preg_replace('/<a href="aiMahasiswa\.html" class="dropdown-item">Artificial Intelligence \(AI\)<\/a>\s*/s', '', $content);
    
    // 2. Remove AI Card from Carousel
    $card_pattern = '/<div class="courses-item text-center">\s*<img[^>]+src="\{\{\s*asset\(\'img\/aiMahasiswa2\.png\'\)\s*\}\}"[^>]*>\s*<h4[^>]*>AI Mahasiswa<\/h4>\s*<a[^>]+href="\{\{\s*url\(\'\/aiMahasiswa\.html\'\)\s*\}\}"[^>]*>.*?<\/a>\s*<\/div>\s*/is';
    $content = preg_replace($card_pattern, '', $content);
    
    if ($content !== $original_content) {
        file_put_contents($file, $content);
        echo "Updated: " . basename($file) . "\n";
    }
}

// Remove the view file
$ai_file = $views_dir . '/aiMahasiswa.blade.php';
if (file_exists($ai_file)) {
    unlink($ai_file);
    echo "Deleted aiMahasiswa.blade.php\n";
} else {
    echo "aiMahasiswa.blade.php not found.\n";
}

echo "Clean up done!\n";
