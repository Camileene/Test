##Test per Sviluppatori
Realizzato da Martina Mamone

## Step per configurare correttamente il progetto

### Installazione dei node_modules

Aprire un terminale all'interno del progetto ed eseguire i seguenti comandi:



```
npm install

```

```
composer update

```

```
npm run watch

```

### Avviare laravel

Aprire un secondo terminale all'interno del progetto ed eseguire il comando:


```
php artisan serve

```

### Configurazione completata - Testing dell'applicazione

Da questo punto in poi è possibile testare l'applicativo andando da browser su 127.0.0.1:8000.

##Step dell'applicazione

- Inserimento dei dati e click su submit
- Caricamento dei dati da DBJson e mostrati a video in tabella, compreso l'ultimo inserimento
- Click su restart per riavviare l'inserimento comprensivo di svuotamento dei campi.



**Note: Non è stato possibile fare uso del metodo built-in per la retrieve nonostante l'applicazione aggiorni correttamente il json. E' stato aggiunto un commento in tal senso all'interno del codice. Tuttavia è stato implementato un secondo metodo per la retrieve consistente.
