<?php
    include_once "config.php";

    if (isset($_GET["confirm_delete"]) && $_GET["confirm_delete"] === "1") {
        $id = $_GET["delete_id"];
    
        $query = "DELETE FROM album WHERE id = $id";
        if ($conn->query($query) === TRUE) {
            echo "<h3 style='color: green'> Album cancellato con successo! </h5><hr>";
        } else {
            echo "<h3 style='color: red'> Errore nella cancellazione dell'album! </h5><hr>";
        }
    }

    $query = "SELECT * FROM album";
    $result = $conn->query($query);
?>

<html>
<head>
    <title>Lista degli Album</title>
    <script>
        function conferma(id) {
            var ok = confirm("Sei sicuro di voler cancellare questo album?");
            if (ok) {
                window.location.href = "?delete_id=" + id + "&confirm_delete=1";
            }
        }
    </script>
</head>
<body>
    <h2>Lista degli Album</h2>
    <a href="home.php">← HOME</a>
    <br><br>
    <table border=1>
            <tr>
                <th>ID</th>
                <th>Titolo</th>
                <th>Artista</th>
                <th>Anno</th>
                <th>Genere</th>
            </tr>
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["titolo"] . "</td>";
            echo "<td>" . $row["artista"] . "</td>";
            echo "<td>" . $row["anno"] . "</td>";
            echo "<td>" . $row["genere"] . "</td>";
            echo "<td><button onclick='conferma(" . $row["id"] . ")'>CANCELLA</a>";
            echo "</tr>";
        }
    } else {
        echo "Nessun album trovato.";
    }

    $conn->close();
    ?>
    </table>
    

</body>
</html>
