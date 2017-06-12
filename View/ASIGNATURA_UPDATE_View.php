<?php

/**
 * Created by PhpStorm.
 * User: dcarmada
 * Date: 15/05/2017
 * Time: 20:56
 */
class ASIGNATURA_UPDATE_View
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
            <title>Update Asignatura</title>
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
        <h3>Actualizar Asignatura</h3>
        <form
            action="?controller=ASIGNATURA&action=UPDATE&id=<?php echo $this->values_list["id"];  ?>" method="post">
            <label for="id">ID</label><br>
            <input id="id" type="number" step="1" name="id" value="<?php echo $this->values_list["id"];  ?>"><br>

            <label for="nombre">Nombre</label><br>
            <input id="nombre" type="text" name="nombre" value="<?php echo $this->values_list["nombre"];  ?>"><br>

            <label for="num_creditos">Num_creditos</label><br>
            <input id="num_creditos" type="number" step="1" name="num_creditos" value="<?php echo $this->values_list["num_creditos"]; ?>"><br>

            <label for="departamento">Departamento</label><br>
            <input id="departamento" type="text" name="departamento" value="<?php echo $this->values_list["departamento"]; ?>"><br>

            <label for="categoria">Categoria</label><br>
            <input id="categoria" type="text" name="categoria" value="<?php echo $this->values_list["categoria"]; ?>"><br>

            <input type="submit" value="Actualizar">




        </form>
        </body>
        </html>
        <?php
    }
}