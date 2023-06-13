<?php

class Model
{
    function __construct()
    {
        //nuestro objeto de conexion a la DB
        $this->db = new Database();
    }
}

?>