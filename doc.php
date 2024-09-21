<?php

function scanDirectory($dir, $output_file, $exclude = []) {
    $files = scandir($dir);
    foreach ($files as $file) {
        if ($file != "." && $file != "..") {
            $path = $dir . DIRECTORY_SEPARATOR . $file;
            $relative_path = str_replace(realpath($dir) . DIRECTORY_SEPARATOR, '', $path);
            
            // Überprüfen, ob der Pfad ausgeschlossen werden soll
            if (in_array($relative_path, $exclude) || shouldExclude($relative_path, $exclude)) {
                continue;
            }
            
            if (is_dir($path)) {
                scanDirectory($path, $output_file, $exclude);
            } elseif (pathinfo($path, PATHINFO_EXTENSION) == 'php') {
                $content = file_get_contents($path);
                file_put_contents($output_file, "\n\n## File: $relative_path\n\n```php\n$content\n```\n", FILE_APPEND);
            }
        }
    }
}

function shouldExclude($path, $exclude) {
    foreach ($exclude as $item) {
        if (strpos($path, $item) === 0) {
            return true;
        }
    }
    return false;
}

// Benutzereingaben abfragen
echo "Willkommen zum Code-Dokumentations-Generator!\n\n";

$directory = readline("Geben Sie das zu scannende Verzeichnis ein (Enter für aktuelles Verzeichnis): ");
$directory = $directory ?: __DIR__;

$output_file = readline("Geben Sie den Namen der Ausgabedatei ein (Standard: project_code.md): ");
$output_file = $output_file ?: 'project_code.md';

$exclude_input = readline("Geben Sie auszuschließende Ordner/Dateien ein, getrennt durch Kommas (optional): ");
$exclude = $exclude_input ? explode(',', $exclude_input) : [];
$exclude = array_map('trim', $exclude);

// Fügen Sie das aktuelle Skript zur Ausschlussliste hinzu
$exclude[] = basename(__FILE__);

// Überprüfen Sie, ob das angegebene Verzeichnis existiert
if (!is_dir($directory)) {
    echo "Fehler: Das angegebene Verzeichnis existiert nicht.\n";
    exit(1);
}

// Löschen Sie die Ausgabedatei, falls sie bereits existiert
if (file_exists($output_file)) {
    unlink($output_file);
}

// Erstellen Sie die Markdown-Datei und fügen Sie einen Titel hinzu
$project_name = basename($directory);
file_put_contents($output_file, "# Code-Dokumentation für $project_name\n\n");

// Starten Sie den Scan
scanDirectory($directory, $output_file, $exclude);

echo "\nCode-Dokumentation wurde in $output_file generiert.\n";
echo "Gescanntes Verzeichnis: $directory\n";
echo "Ausgeschlossene Elemente: " . ($exclude_input ?: "Keine") . "\n";

?>