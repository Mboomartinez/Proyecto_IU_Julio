<?php

/**
 * Created by PhpStorm.
 * User: dcarmada
 * Date: 26/04/2017
 * Time: 11:35
 */
class ALUMNO_UPDATE_View
{
    private $values_list;
    public function __construct($values_list)
    {
        //parent::__construct($field_list, $values_list);
        $this->values_list=$values_list;
    }
    /**
     * @return array
     */
    public function getValuesList()
    {
        return $this->values_list;
    }

    /**
     * @param array $values_list
     */
    public function setValuesList($values_list)
    {
        $this->values_list = $values_list;
    }
    public function render(){
        ?>
        <html>
        <head>
            <title>Update Alumno</title>
            <meta>
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
        <h3>Actualizar Alumno</h3>
        <form
            action="?controller=ALUMNO&action=UPDATE&id=<?php echo $this->values_list["dni"];  ?>" method="post">
            <label for="dni">DNI</label><br>
            <input id="dni" type="text" name="dni" value="<?php echo $this->values_list["dni"];  ?>"><br>

            <label for="nombre">Nombre</label><br>
            <input id="nombre" type="text" name="nombre" value="<?php echo $this->values_list["nombre"];  ?>"><br>

            <label for="apellidos">Apellidos</label><br>
            <input id="apellidos" type="text" name="apellidos" value="<?php echo $this->values_list["apellidos"]; ?>"><br>

            <label for="fecha_nacimiento">Fecha_Nacimiento</label><br>
            <input id="fecha_nacimiento" type="text" name="fecha_nacimiento" value="<?php echo $this->values_list["fecha_nacimiento"]; ?>"><br>

            <label for="telefono">Telefono</label><br>
            <input id="telefono" type="number" min="0" name="telefono" value="<?php echo $this->values_list["telefono"]; ?>"><br>

            <label for="direccion">Direccion</label><br>
            <input id="direccion" type="text" name="direccion" value="<?php echo $this->values_list["direccion"]; ?>"><br>

            <input type="checkbox" id="es_becario" name="es_becario" value="<?php echo $this->values_list["es_becario"]; ?>"><br>
            <label for="es_becario">Es_Becario</label><br>

            <input type="submit" value="Actualizar">




        </form>
        </body>
        </html>
        <?php
    }
}