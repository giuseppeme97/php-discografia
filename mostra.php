<?php
    include_once "config.php";

    $query = "SELECT * FROM album";
    $result = $conn->query($query);
?>

<html>
<head>
    <title>Lista degli Album</title>
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
            echo "<td><a href=''>CANCELLA</a>";
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
