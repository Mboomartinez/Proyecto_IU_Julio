<?php

/**
 * Created by PhpStorm.
 * User: dcarmada
 * Date: 15/05/2017
 * Time: 20:38
 */
class ASIGNATURA_ADD_View
{
    public function render(){
        ?>
        <html>
        <head>
            <title>Add Asignatura</title>
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
        <h3>Añadir Asignatura</h3>
        <form
            action="?controller=ASIGNATURA&action=ADD" method="post">
            <label for="id">ID</label><br>
            <input id="id" type="number" step="1" name="id"><br>

            <label for="nombre">Nombre</label><br>
            <input id="nombre" type="text" name="nombre"><br>

            <label for="num_creditos">Num_creditos</label><br>
            <input id="num_creditos" type="number" step="1" name="num_creditos"><br>

            <label for="departamento">Departamento</label><br>
            <input id="departamento" type="text" name="departamento"><br>

            <label for="categoria">Categoria</label><br>
            <input id="categoria" type="text" name="categoria"><br>

            <input type="submit" value="Añadir">




        </form>
        </body>
        </html>
        <?php
    }
}