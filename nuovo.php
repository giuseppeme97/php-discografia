<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once "config.php";

    $titolo = $_POST["titolo"];
    $artista = $_POST["artista"];
    $anno = $_POST["anno"];
    $genere = $_POST["genere"];

    $query = "INSERT INTO album (titolo, artista, anno, genere) VALUES ('$titolo', '$artista', '$anno', '$genere')";

    if ($conn->query($query) === TRUE) {
        echo "<h3 style='color: green'> Album inserito con successo! </h3><hr>";
    } else {
        echo "<h3 style='color: red'> Errore nel caricamento dell'album! </h3><hr>";
    }

    $conn->close();
}
?>

<html>
<head>
    <title>Inserimento Album</title>
</head>
<body>

    <h2>Inserisci Nuovo Album</h2>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="titolo">Titolo:</label>
        <input type="text" name="titolo" id="titolo" required>
        <br>
        <label for="artista">Artista:</label>
        <input type="text" name="artista" id="artista" required>
        <br>
        <label for="anno">Anno di Pubblicazione:</label>
        <input type="number" name="anno" id="anno" required>
        <br>
        <label for="genere">Genere:</label>
        <select name="genere" id="genere">
            <option value="Rock">Rock</option>
            <option value="Pop">Pop</option>
            <option value="Classica">Classica</option>
            <option value="Rap">Rap</option>
            <option value="Jazz">Jazz</option>
        </select>
        <br>
        <br>
        <input type="submit" value="Inserisci Album">
    </form>
    <br>
    <a href="home.php">← HOME</a>

</body>
</html>
