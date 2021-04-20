<?php 

class Usuarios
{
    private $_documento_usu,$_p_nombre_usu,$_s_nombre_usu,$_p_apellido_usu,$_s_apellido_usu,
    $_telefono,$_correo,$_usuario,$_contraseña,$_fkpk_rol_usu,$_fkpk_t_documento;

    public function __construct($documento_usu,$p_nombre_usu,$s_nombre_usu,$p_apellido_usu,
    $s_apellido_usu,$telefono,$correo,$usuario,$contraseña,$fkpk_rol_usu,$fkpk_t_documento)
    {
        $this->_documento_usu = $documento_usu;
        $this->_p_nombre_usu = $p_nombre_usu;
        $this->_s_nombre_usu = $s_nombre_usu;
        $this->_p_apellido_usu = $p_apellido_usu;
        $this->_s_apellido_usu = $s_apellido_usu;
        $this->_telefono = $telefono;
        $this->_correo = $correo;
        $this->_usuario = $usuario;
        $this->_contraseña = $contraseña;
        $this->_fkpk_rol_usu = $fkpk_rol_usu;
        $this->_fkpk_t_documento = $fkpk_t_documento;
    }

    public function getDocumentoUsu()
    {
        return $this->_documento_usu;
    }

    public function setDocumentoUsu($documento_usu)
    {
        $this->_documento_usu = $documento_usu;
    }

    public function getPNomUsu()
    {
        return $this->_p_nombre_usu;
    }

    public function setPNomUsu($p_nombre_usu)
    {
        $this->_p_nombre_usu = $p_nombre_usu;
    }

    public function getSNomUsu()
    {
        return $this->_s_nombre_usu;
    }

    public function setSNomUsu($s_nombre_usu)
    {
        $this->_s_nombre_usu = $s_nombre_usu;
    }

    public function getPApellUsu()
    {
        return $this->_p_apellido_usu;
    }

    public function setPApellUsu($p_apellido_usu)
    {
        $this->_p_apellido_usu = $p_apellido_usu;
    }

    public function getSApellUsu()
    {
        return $this->_s_apellido_usu;
    }

    public function setSApellUsu($s_apellido_usu)
    {
        $this->_s_apellido_usu = $s_apellido_usu;
    }

    public function getTelefono()
    {
        return $this->_telefono;
    }

    public function setTelefono($telefono)
    {
        $this->_telefono = $telefono;
    }

    public function getCorreo()
    {
        return $this->_correo;
    }

    public function setCorreo($correo)
    {
        $this->_correo = $correo;
    }

    public function getUsuario()
    {
        return $this->_usuario;
    }

    public function setUsuario($usuario)
    {
        $this->_usuario = $usuario;
    }

    public function getContraseña()
    {
        return $this->_contraseña;
    }

    public function setContraseña($contraseña)
    {
        $this->_contraseña = $contraseña;
    }

    public function getFkPkRolUsu()
    {
        return $this->_fkpk_rol_usu;
    }

    public function setFkPkRolUsu($fkpk_rol_usu)
    {
        $this->_fkpk_rol_usu = $fkpk_rol_usu;
    }

    public function getFkPkTDocumento()
    {
        return $this->_fkpk_t_documento;
    }

    public function setFkPkTDocumento($fkpk_t_documento)
    {
        $this->_fkpk_t_documento = $fkpk_t_documento;
    }

    public function insertarUsuarios()
    {
        $documento_usu = $this->getDocumentoUsu();
        $p_nombre_usu = $this->getPNomUsu();
        $s_nombre_usu = $this->getSNomUsu();
        $p_apellido_usu = $this->getPApellUsu();
        $s_apellido_usu = $this->getSApellUsu();
        $telefono = $this->getTelefono();
        $correo = $this->getCorreo();
        $usuario = $this->getUsuario();
        $contraseña = $this->getContraseña();
        $fkpk_rol_usu = $this->getFkPkRolUsu();
        $fkpk_t_documento = $this->getFkPkTDocumento();

        $consulta = "INSERT INTO usuarios(documento_usu,p_nombre_usu,s_nombre_usu,p_apellido_usu,s_apellido_usu,telefono,correo,usuario,contras,fkpk_rol_usu,fkpk_t_documento)
        VALUES('$documento_usu','$p_nombre_usu','$s_nombre_usu','$p_apellido_usu','$s_apellido_usu','$telefono','$correo','$usuario','$contraseña','$fkpk_rol_usu','$fkpk_t_documento')";

        return $consulta;
    }
}

?>