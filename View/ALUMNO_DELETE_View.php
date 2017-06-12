<?php

/**
 * Created by PhpStorm.
 * User: dcarmada
 * Date: 26/04/2017
 * Time: 11:35
 */
class ALUMNO_DELETE_View
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
            <title>Delete Alumno</title>
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
        <h3>Borrar Alumno</h3>
        <form
            action="?controller=ALUMNO&action=DELETE&id=<?php echo $this->values_list["dni"];  ?>" method="post">
            <label for="dni">DNI <?php echo $this->values_list["dni"];  ?></label><br>
            <input type="hidden" name="DNI" value="<?php echo $this->values_list["dni"];  ?>">
            <br>

            <label for="nombre">Nombre <?php echo $this->values_list["nombre"];  ?></label><br>
            <br>

            <label for="apellidos">Apellidos <?php echo $this->values_list["apellidos"]; ?></label><br>
            <br>

            <label for="fecha_nacimiento">Fecha_Nacimiento <?php echo $this->values_list["fecha_nacimiento"]; ?></label><br>
            <br>

            <label for="telefono">Telefono <?php echo $this->values_list["telefono"]; ?></label><br>
            <br>

            <label for="direccion">Direccion <?php echo $this->values_list["direccion"]; ?></label><br>
            <br>


            <label for="es_becario">Es_Becario <?php echo $this->values_list["es_becario"]; ?></label><br>
            <br>

            <input type="submit" value="Borrar">




        </form>
        </body>
        </html>
        <?php
    }
}