<?php

/**
 * Created by PhpStorm.
 * User: dcarmada
 * Date: 17/04/2017
 * Time: 21:20
 */
class ALUMNO_ADD_View
{
    public function render(){
        ?>
        <html>
        <head>
            <title>Add Alumno</title>
            <link rel="stylesheet" type="text/css" href="/View/css/iu.css">
            <meta charset="UTF-8">
        </head>
        <style>
            h3 {
                color: chartreuse;
                margin-top: 25px;
                margin-left: 100px;
                text-align: left;
                text-decoration: underline;
                text-anchor: 100px;
                letter-spacing: 20px;
                text-indent: 40px;
                word-spacing: 20px;
                text-transform: uppercase;
                border-style: solid;
                border-color: blue;
                border-width: 5px;
                font-size: 500%;
                background-color: blue;
                width: 25S%;

            }
            label{
                margin-top: 10px;
                margin-bottom: 10px;
                margin-right: 10px;
                margin-left: 10px;
                padding-top: 10px;
                padding-bottom: 10px;
                padding-right: 10px;
                padding-left: 10px;
                border-radius: 10px;
                color: red;
                text-decoration: underline;
                font-size: 150%;
            }
            input{
                color: black;
            }
        </style>
        <body>
        <h3>Añadir Alumno</h3>
        <form
            action="?controller=ALUMNO&action=ADD" method="post">
            <label for="dni">DNI</label><br>
            <input id="dni" type="text" name="dni"><br>

            <label for="nombre">Nombre</label><br>
            <input id="nombre" type="text" name="nombre"><br>

            <label for="apellidos">Apellidos</label><br>
            <input id="apellidos" type="text" name="apellidos"><br>

            <label for="fecha_nacimiento">Fecha_Nacimiento</label><br>
            <input id="fecha_nacimiento" type="text" name="fecha_nacimiento"><br>

            <label for="telefono">Telefono</label><br>
            <input id="telefono" type="number" min="0" name="telefono"><br>

            <label for="direccion">Direccion</label><br>
            <input id="direccion" type="text" name="direccion"><br>

            <input type="checkbox" id="es_becario" name="es_becario"><br>
            <label for="es_becario">Es_Becario</label><br>

            <input type="submit" value="Añadir">




        </form>
        </body>
        </html>
        <?php
    }
}