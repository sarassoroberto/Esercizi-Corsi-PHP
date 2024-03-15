
```php
<?php

// Esempio di violazione del principio di singola responsabilità
class Utente {
    public function salvaUtente($datiUtente) {
        // Salva l'utente nel database
        // Invia un'email di conferma all'utente
    }
}

// Esempio di applicazione del principio di singola responsabilità
class UtenteRepository {
    public function salvaUtente($datiUtente) {
        // Salva l'utente nel database
    }
}

class Notificatore {
    public function inviaEmailConferma($utente) {
        // Invia un'email di conferma all'utente
    }
}

?>
