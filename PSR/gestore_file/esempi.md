```php
<?php

// Esempio di violazione del principio di singola responsabilità
class GestioneFile {
    public function leggiFile($nomeFile) {
        // Legge il contenuto del file
    }

    public function scriviFile($nomeFile, $contenuto) {
        // Scrive nel file
    }

    public function validaFile($nomeFile) {
        // Valida il file
    }
}

```
```php

// Esempio di applicazione del principio di singola responsabilità
class GestoreFile {
    public function leggiFile($nomeFile) {
        // Legge il contenuto del file
    }

    public function scriviFile($nomeFile, $contenuto) {
        // Scrive nel file
    }
}

class ValidatoreFile {
    public function validaFile($nomeFile) {
        // Valida il file
    }
}

?>
```
