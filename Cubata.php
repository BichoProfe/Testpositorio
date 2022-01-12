<?php
require "Fruta.php";
    class Cubata{
        public $hielo;
        public $alcohol;
        public $refresco;
        public $capacidadmax;
        public $cantidad;

            function __construct($hielo,$alcohol,$refresco,$capacidadmax){
                $this->hielo=$hielo;
                $this->alcohol=$alcohol;
                $this->refresco=$refresco;
                $this->capacidadmax=$capacidadmax;
                $this->cantidad=$capacidadmax;
            }

            function gethielos(){
                return $this->hielo;
            }
            function getalcohol(){
                return $this->alcohol;
            }
            function getcantidad(){
                return $this->cantidad;
            }
            function sethielo($hielo){
                    $this->hielo=$hielo;
            }

            function aguarse(){
                $this->hielo=false;
                $this->cantidad+=20;
                if($this->cantidad > $this->capacidadmax){
                    $this->cantidad = $this->capacidadmax;
                }
            }

            function llenar(){
                $this->cantidad = $this->capacidadmax;
            }

            function beber($trago){
                if($trago > $this->cantidad){
                    $trago=$this->cantidad;
                }
                $this->cantidad-=$trago; 
            }

            function hidalgo(){
                $this->cantidad=0;
                echo "wow! felicidades! Has podido compensar tu micropene haciendo esto! Destrozamos algo de mobiliario publico?";
            }

    }
    $cubatita = new Cubata(true,"Whiskey","7up", 500); 
    $cubatita->beber(50);
    $cubatita->aguarse();
    $cubatita->hidalgo();
    echo $cubatita->getcantidad();

    $fruta= new Fruta("Kiwi","Verde",true,"Ovalado", "Nueva Zelanda");

    echo $fruta->get_nombre();




?>modificacion
holahola
olvidonaaa queeeee
