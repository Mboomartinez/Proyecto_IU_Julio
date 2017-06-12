<?php

class ASIGNATURA_SHOWCURRENT_View
{
    private $values_list;

    public function __construct(array $values_list)
    {
        $this->values_list = $values_list;
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

    public function render()
    {
        ?>
        <html>
        <head>
            <title> Asignatura</title>
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
        <h3>Asignatura</h3>
        <?php
        foreach ($this->values_list as $clave => $i) {
            echo "<label>".ucfirst($clave).":$i</label><br>";
        }

        ?>


        </body>
        </html>
        <?php
    }
}