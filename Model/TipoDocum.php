<?php 

class TipoDocum
{

    private $_t_documento, $_des_documento;

    public function __construct($t_documento,$des_documento)
    
    {
        $this->_t_documento = $t_documento;
        $this->_des_documento = $des_documento;
        
    }

    public function getTDocumento()
    {
        return $this->_t_documento;
    }

    public function setTDocumento($t_documento)
    {
        $this->_t_documento = $t_documento;
    }

    public function getDesDocumento()
    {
        return $this->_des_documento;
    }

    public function setDesDocumento($des_documento)
    {
        $this->_des_documento = $des_documento ;
    }

    public function insertarTipoDocumento()
    {
        $t_documento = $this->getTDocumento();
        $des_documento = $this->getDesDocumento();

        $consulta = "INSERT INTO tipo_documento (t_documento) 
        VALUES ('$t_documento','$des_documento')";

        return $consulta;
    }

    public function traerTipoDocumento()
    {
        $consulta = "SELECT t_documento FROM tipo_documento ";

        return $consulta;
    }
}



?>