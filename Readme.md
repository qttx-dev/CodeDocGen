# 📚 CodeDocGen

<p align="center">
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP">
  <img src="https://img.shields.io/badge/Markdown-000000?style=for-the-badge&logo=markdown&logoColor=white" alt="Markdown">
  <img src="https://img.shields.io/badge/Shell-4EAA25?style=for-the-badge&logo=gnu-bash&logoColor=white" alt="Shell">
</p>

<p align="center">
  <strong>Ein leistungsstarkes Tool zur automatischen Generierung von Code-Dokumentation für PHP-Projekte</strong>
</p>

## 🌟 Funktionen

- 🔍 Scannt rekursiv alle PHP-Dateien in einem Verzeichnis
- 📝 Generiert eine übersichtliche Markdown-Dokumentation
- 🎛️ Anpassbare Ausgabe und Ausschlussmöglichkeiten
- 🖥️ Benutzerfreundliche Kommandozeilen-Schnittstelle

## 🚀 Schnellstart

1. Klonen Sie das Repository:
   ```
   git clone https://github.com/qttx-dev/CodeDocGen.git
   ```

2. Navigieren Sie zum Projektverzeichnis:
   ```
   cd CodeDocGen
   ```

3. Führen Sie das Skript aus:
   ```
   php doc.php
   ```

## 💻 Verwendung

Führen Sie das Skript in der Shell aus und folgen Sie den Anweisungen:

```bash
php doc.php
```

Sie werden nach folgenden Eingaben gefragt:

- 📂 Zu scannendes Verzeichnis
- 📄 Name der Ausgabedatei
- 🚫 Auszuschließende Ordner/Dateien (optional)

## 📋 Beispiel

```bash
$ php doc.php
Willkommen zum Code-Dokumentations-Generator!

Geben Sie das zu scannende Verzeichnis ein (Enter für aktuelles Verzeichnis): /pfad/zu/ihrem/projekt
Geben Sie den Namen der Ausgabedatei ein (Standard: project_code.md): mein_projekt_doku.md
Geben Sie auszuschließende Ordner/Dateien ein, getrennt durch Kommas (optional): vendor,tests

Code-Dokumentation wurde in mein_projekt_doku.md generiert.
Gescanntes Verzeichnis: /pfad/zu/ihrem/projekt
Ausgeschlossene Elemente: vendor, tests
```

## 🤝 Beitrag

Beiträge sind willkommen! Bitte lesen Sie [CONTRIBUTING.md](CONTRIBUTING.md) für Details zum Prozess für Pull-Requests.

## 📜 Lizenz

Dieses Projekt ist unter der MIT-Lizenz lizenziert - siehe die [LICENSE.md](LICENSE.md) Datei für Details.

## 🙏 Danksagungen

- [PHP-Gemeinschaft](https://www.php.net/)
- Alle Mitwirkenden und Nutzer dieses Projekts

---

<p align="center">
  Erstellt mit ❤️ von <a href="https://github.com/qttx-dev">qttx</a>
</p>