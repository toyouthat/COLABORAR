<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Instalación contactos</title>
</head>
<body>
    <h1>Instalación contactos</h1>
    <?php
        require_once "../config.php";
        $pdo = new PDO("pgsql:host={$host};port={$port};dbname={$dbname}", $user, $pass);

        //$sql = "create database $dbname; use $dbname;";
        //$pdo->exec($sql);

        $sql = "create table contacto(
            id serial primary key,
            nombre varchar(20),
            mail varchar(60)
            )";
        $pdo->exec($sql);
        $sql = "insert into contacto(nombre, mail) values
        ('pepe','pepe@server.com'),('concha','concha@email.net')"
        ;

        $pdo->exec($sql);
    ?> 

    <p>Base de datos creada. <a href="index.php"> Ir a la lista de contactos</a></p>
</body>

</html>
