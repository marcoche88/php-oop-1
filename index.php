<!-- Oggi pomeriggio ripassate i primi concetti di classe e di proprietà e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza (proprietà)
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà, se possibile cerchiamo di stampare senza ricorrere a var_dump -->

<?php
// importo il file con la classe Movie
require_once __DIR__ . '/Movie.php';

// istanziamento di due oggetti Movie
$movie1 = new Movie("Il Signore degli Anelli - La Compagnia dell'Anello", "Fantasy", "2001", "USA", 4, "Peter Jackson");
$movie2 = new Movie("Il Gladiatore", "Storico", "2000", "USA", 5, "Ridley Scott");
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie class</title>
</head>

<body>

</body>

</html>