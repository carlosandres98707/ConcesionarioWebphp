<?php 

class Roles
{
    private $_rol_usu;

    public function __construct($rol_usu)
    {
        $this->_rol_usu = $rol_usu;
    }

    public function getRol(){
        return $this->_rol_usu;
    }

    public function setRol($rol_usu)
    {
        $this->_rol_usu = $rol_usu;
    }

    public function insertarRol()
    {
        $rol_usu = $this->getRol();

        $consulta = "INSERT INTO roles (rol_usu)
        VALUES('$rol_usu')";

        return $consulta;
    
    }

    public function traerRol()
    {
        $consulta = "SELECT * FROM roles ";

        return $consulta;
    }

}

?>