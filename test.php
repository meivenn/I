<?php
// Example PHP script to search through HTML files
$searchQuery = $_GET['query'] ?? '';

if ($searchQuery) {
    $files = glob('*.html'); // Get all HTML files in the current directory
    $results = [];

    foreach ($files as $file) {
        $content = file_get_contents($file);
        if (stripos($content, $searchQuery) !== false) {
            $results[] = $file;
        }
    }

    echo "Search results for '$searchQuery':<br>";
    foreach ($results as $result) {
        echo "<a href='$result'>$result</a><br>";
    }
} else {
    echo "Enter a search term.";
}
?>
