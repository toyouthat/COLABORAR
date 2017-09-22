<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Ccontactos</title>
</head>
<body>
    <h1>Contatctos</h1>
    <table>
   <?php
   REQUIRE_ONCE "../CONFIG.PHP";
   $pdo = new PDO("mysql:host={$host);port={$port};DBNAME={$DBNAME}", $user, $pass);

   $SQL = "SELECT * FROM CONTATCTO;";
   $RES = $PDO->QUERY($SQL);
   foreach ($FILE as $value) {
        echo "<tr>"   
        foreach ($fila as $value){
            echo "<td>$VALUE</td>";
        }
        echo "</tr>";
   }
   ?>

   </table>
</body>

</html>