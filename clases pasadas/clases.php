<?php

interface Model{
    function get($prop);
    function set($prop,$value);
}
abstract class persona implements Model
{
    protected $nombre = null;
    private $apellido = null;
    private $email = null;

abstract  function toString();
    function nombrecompleto()
    {
        return $this->nombre.''.$this->apellido;
    }
    function get($prop){
        return $this-> {$prop};
    }
    function set($prop,$value){
        return $this->{$prop}= $value;
    }

}

    class Estudiante extends persona{
        function toString(){
            $nombre = $this->nombre;
            $apellido = $this->get('apellido');
            $email = $this->get('email');
        
        }
    }

    class Docente extends persona{
        
        function __constructor($nombre, $apellido)
        {
            $this->set('nombre',$nombre);
            $this->set('apellido',$apellido);
            $this->set('email','sin definir');

    
        }
        function toString(){
            $nombre=$this->nombrecompleto();
            $email=$this->get('email');
            return "$nombre $email";
        }
    }

// $estudiante = new Estudiante();
// $estudiante->set('nombre','pedro');
// $estudiante->set('apellido','perez');
// $estudiante->set('email','dwefewQgmail.com');

// echo $estudiante->toString() .'<br>';

// $docente = new Docente("Ana", "Gomez");
// echo $docente->toSting() . '<br>';
// $docente->('email','sin definir');
// echo $docente->toSting() . '<br>';
