<?php
//---------------------------------------------------------------------------------------------------
// Proyecto: Finitus
// Archivo: class/persona.php
// Tipo: definicion de clase
// Hecho con Cascara - http://cascara.aletia8.com
//---------------------------------------------------------------------------------------------------
// Descripcion: gestiona las personas
//---------------------------------------------------------------------------------------------------

class persona extends ADOdb_Active_Record
{
  //Propiedades de la clase
  var $_table = 'personas';
  var $rol_actual;
  var $perfil_actual;
  var $perfiles; //A extinguir
  var $alumnos;
  var $profesores;
  var $gestores;
  
  // Carga en el objeto los perfiles de esta persona
  function perfiles_cargar()
  {
    $hoy = date("Y-m-d H:i:s");
    $condicion = "persona_id = $this->id AND fecha_inicio < '$hoy' AND fecha_fin > '$hoy'";
    // Comprobamos que el this tiene un perfil activo como alumno
    $alumno = new alumno();
    $this->alumnos = $alumno->Find($condicion);
    // Comprobamos que el this tiene un perfil activo como profesor
    $profesor = new profesor();
    $this->profesores = $profesor->Find($condicion);
    // Comprobamos que el this tiene un perfil activo como gestor
    $gestor = new gestor();
    $this->gestores = $gestor->Find($condicion);
  }

  //TODO: comprobar que el perfil que se carga existe
  function perfil_actual_cargar($rol, $perfil)
  {
    $this->perfil_actual = $this->$rol[$perfil];
    $this->rol_actual = $rol;
  }
  
}
?>
