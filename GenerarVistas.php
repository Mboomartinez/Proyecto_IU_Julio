<?php
/**
 * Created by PhpStorm.
 * User: DACA
 * Date: 07/06/2017
 * Time: 21:19
 */
const HOST = "localhost";
$DBNAME = "mysql";
const PORT = "3306";
$USER = "root";
$PASSWORD = "";
const DRIVER = "mysql";
$connection = NULL;
function generateConnection()
{
    global $connection, $DBNAME, $USER, $PASSWORD;
    $connection = new PDO(DRIVER . ":host=" . HOST . ";dbname=" . $DBNAME . ";port=" . PORT, $USER, $PASSWORD);
}

function askCredentials()
{
    global $USER, $PASSWORD;
    $USER = readline("Introducir usuario de la base de datos:/n");
    $PASSWORD = readline("Introducir contraseña de la base de datos:/n");
}

function listDatabases()
{
    global $connection;
    $sql = "SHOW DATABASES";
    $stmt = $connection->prepare($sql);
    $stmt->execute();
    var_dump($stmt->fetchAll(PDO::FETCH_COLUMN));
}

//askCredentials();
generateConnection();
listDatabases();
