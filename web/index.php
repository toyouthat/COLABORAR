<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Contactos</title>
</head>
<body>
    <h1>Contactos</h1>
    <table>
        <?php
        REQUIRE_ONCE "../config.php";
        $pdo = new PDO("mysql:host={$host};port={$port};dbname={$dbname}", $user, $pass);

        $sql = "SELECT * FROM contacto;";
        $res = $pdo->query($sql);
        foreach ($res as $fila) {
                echo "<tr>";  
                foreach ($fila as $value){
                    echo "<td>$value</td>";
                }
                echo "</tr>";
        }
        ?>

   </table>
</body>

</html>