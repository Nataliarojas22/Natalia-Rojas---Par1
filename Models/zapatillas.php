<?php

Class zapatillas {
    private $id;
    private $texto;
    private $titulo;
    private $vinculo;
    private $descripcion;


    public function __construct($id,$texto,$titulo,$vinculo,$descripcion){
        $this->id=$id;
        $this->texto = $texto;
        $this->titulo = $titulo;
        $this->vinculo = $vinculo;
        $this->descripcion = $descripcion;

    }
    public function setid($id){
        $this->id= $id;
    }
    public function settexto($texto){
        $this->texto= $texto;
    }

    public function settitutlo($titulo){
        $this->titulo = $titulo;
    }

    public function setvinculo($vinculo){
        $this->vinculo = $vinculo;
    }

    public function setdescripcion($descripcion){
        $this->descripcion = $descripcion;
    }


    public function getid(){
        return $this->id;
    }


    public function gettexto(){
        return $this->texto;
    }

    public function gettitulo(){
        return $this->titulo;
    }

    public function getvinculo(){
        return $this->vinculo;
    }

    public function getdescripcion(){
        return $this->descripcion;
    }








}


?>