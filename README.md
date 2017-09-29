# Webseite der Webworker NRW

Hier liegen die Quellen der Webseite
[http://www.webworker-nrw.de](http://www.webworker-nrw.de)

Das offizielle Repositiory ist
[https://github.com/Schepp/wwnrw](https://github.com/Schepp/wwnrw)

# Anleitung

Neue Treffen werden durch anlegen einer Datei index.html im Ordner
/_treffen/YYMM-Monat-Jahr definiert. Diese hat den Aufbau:
```
---
datum: "Di. 30.08.2017, 19 Uhr"
talks:
-
  title: "Vortragstitel"
  author: Christian "Schepp" Schaefer
  twitter:
  description: |
    Beschreibung 1
  material: http://schepp.github.io/wwnrw
-
  title: "Vortragstitel"
  author: Jens Hauke
  twitter: "@jens4321"
  description: |
    Beschreibung 2
  material: http://www.webworker-nrw.de
---
Extra Hinweise zum Termin (optional)
```

Liegt ein JPG im gleichen Ordner, wird dieses auf der Seite
des Treffens und bei der Ankündigung angezeigt.

`template.html` kann als Vorlage dienen.
