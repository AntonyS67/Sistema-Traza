<?php

class Conexion{
    public function conectar(){
        $link=new PDO("mysql:host=localhost;dbname=trazabilidad","root","");
        return $link;
    }
}