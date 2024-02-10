<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once "config.php";
    $id = $_POST["id"];
    $titolo = $_POST["titolo"];
    $artista = $_POST["artista"];
    $anno = $_POST["anno"];
    $genere = $_POST["genere"];

    $query = "SELECT * FROM album WHERE
                id LIKE '%$id%' AND 
                titolo LIKE '%$titolo%' AND 
                artista LIKE '%$artista%' AND 
                anno LIKE '%$anno%' AND 
                genere LIKE '%$genere%'";

    $result = $conn->query($query);
}
?>

<html>
<head>
    <title>Ricerca Album</title>
</head>
<body>
    <h2>Ricerca Album</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="id">ID:</label>
        <input type="number" name="id" id="id">
        <br>    
        <label for="titolo">Titolo:</label>
        <input type="text" name="titolo" id="titolo">
        <br>
        <label for="artista">Artista:</label>
        <input type="text" name="artista" id="artista">
        <br>
        <label for="anno">Anno di Pubblicazione:</label>
        <input type="text" name="anno" id="anno">
        <br>
        <label for="genere">Genere Musicale:</label>
        <input type="text" name="genere" id="genere">
        <br><br>
        <input type="submit" value="Ricerca">
    </form>
    <br>
    <a href="home.php">← HOME</a>
    <?php
        if (isset($result)) {
            echo "<hr>";
            echo "<h2> Risultato ricerca </h2>";
            echo "ID: $id - Titolo: $titolo - Artista: $artista - Anno: $anno - Genere: $genere";
            echo "<br><br>";
            echo "<table border=1>
            <tr>
                <th>ID</th>
                <th>Titolo</th>
                <th>Artista</th>
                <th>Anno</th>
                <th>Genere</th>
            </tr>";
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["titolo"] . "</td>";
                    echo "<td>" . $row["artista"] . "</td>";
                    echo "<td>" . $row["anno"] . "</td>";
                    echo "<td>" . $row["genere"] . "</td>";
                    echo "<td><a href=''>CANCELLA</a>";
                    echo "</tr>";
                }
            } else {
                echo "Nessun album trovato.";
            }
        
            $conn->close();
        }
    ?>
    </table>
</body>
</html>
