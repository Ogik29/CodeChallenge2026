<?php
$views_dir = __DIR__ . '/resources/views';
$files = glob($views_dir . '/*.blade.php');

$old_not_scroll = "rgba(255, 255, 255, 0.85)";
$new_not_scroll = "rgba(255, 255, 255, 0.95)";

$old_scroll_shadow = "rgba(0, 0, 0, 0.1)";
$new_scroll_shadow = "rgba(0, 0, 0, 0.12)";

// Also fix scroll value from 0.95 to 0.98
$old_scroll_bg = "rgba(255, 255, 255, 0.95) !important";
$new_scroll_bg = "rgba(255, 255, 255, 0.98) !important";

foreach ($files as $file) {
    $content = file_get_contents($file);
    $original = $content;
    
    // Replace not-scrolled bg
    $content = str_replace($old_not_scroll, $new_not_scroll, $content);
    
    // Replace scrolled shadow
    // Find pattern: scrollTop() > 50 block and update shadow
    // But to be safe, just do the opacity change and shadow change for the scrollTop > 50 block
    $content = preg_replace(
        "/(scrollTop\(\) > 50\).*?background.*?0\.95[^;]*;.*?box-shadow.*?)0\.1\)/s",
        '${1}0.12)',
        $content
    );
    
    if ($content !== $original) {
        file_put_contents($file, $content);
        echo "Updated: " . basename($file) . "\n";
    } else {
        echo "Unchanged: " . basename($file) . "\n";
    }
}
echo "Done!\n";
