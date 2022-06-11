<?php

class Modelo{
    private $Modelo;
    private $db;
    private $datos;
    private $datos2;

    public function __construct(){
        $this->Modelo=array();
        $this->db=new PDO('mysql:host=localhost;dbname=fiftyfive',"root","");
    }
    public function insertar($tabla, $data){
        $consulta="insert into ".$tabla." values(null,".$data.")";
        $resultado=$this->db->query($consulta);
        if($resultado){
            return true;
        }else{
            return false;
        }
    }

    //tareas
    public function mostrar($tabla,$condicion){
        $consul="select * from ".$tabla." where condicion=".$condicion;
        $resul=$this->db->query($consul);
        while($filas=$resul->FETCHALL(PDO::FETCH_ASSOC)){
            $this->datos[]=$filas;
        }
        return $this->datos;
    }
//notas
    public function mostrar_nota($tabla,$condicion){
        $consul="select * from ".$tabla." where condicion=".$condicion;
        $resul=$this->db->query($consul);
        while($filas=$resul->FETCHALL(PDO::FETCH_ASSOC)){
            $this->datos2[]=$filas;
        }
        return $this->datos2;
    }

    public function mostrar2($tabla,$condicion){
        $consul="select * from ".$tabla." where ".$condicion;
        $resul=$this->db->query($consul);
        while($filas=$resul->FETCHALL(PDO::FETCH_ASSOC)){
            $this->datos[]=$filas;
        }
        return $this->datos;
    }

    public function mostrar2_nota($tabla,$condicion){
        $consul="select * from ".$tabla." where ".$condicion;
        $resul=$this->db->query($consul);
        while($filas=$resul->FETCHALL(PDO::FETCH_ASSOC)){
            $this->datos2[]=$filas;
        }
        return $this->datos2;
    }

    public function actualizar($tabla, $data, $condicion){
        $consulta="update ".$tabla." set ". $data ." where ".$condicion;
        $resultado=$this->db->query($consulta);
        if($resultado){
            return true;
        }else{
            return false;
        }
    }

    public function archivar($tabla, $data,$condicion){
        $consulta="update ".$tabla." set condicion=".$condicion." where ".$data;
        $resultado=$this->db->query($consulta);
        if($resultado){
            return true;
        }else{
            return false;
        }
    }
    public function mostrarArchivados($tabla){
        $consul="select * from tarea where condicion=1";
        $resul=$this->db->query($consul);
        while($filas=$resul->FETCHALL(PDO::FETCH_ASSOC)){
            $this->datos[]=$filas;
        }
        return $this->datos;
    }
// para notas
    public function mostrarArchivados_nota($tabla){
        $consul="select * from anotaciones where condicion=1";
        $resul=$this->db->query($consul);
        while($filas=$resul->FETCHALL(PDO::FETCH_ASSOC)){
            $this->datos2[]=$filas;
        }
        return $this->datos2;
    }
    public function eliminar($tabla, $condicion){
        $eli="delete from ".$tabla." where ".$condicion;
        $res=$this->db->query($eli);
        if($res){
            return true;
        }else{
            return false;
        }
    }  

   

 



    /*
    public function actualizar_personales($tabla, $data, $condicion){        //metodo actualizar
        $consulta="update ".$tabla." set ". $data ." where ".$condicion; //consulta
        $resultado=$this->db->query($consulta);
        if ($resultado) { //verificar si se realizo la consulta correctamente
            return true;
        }else {
            return false;
        }
    }

    
    public function mostrar_personal($tabla,$condicion){ //crear metodo para mostrar datos  $condicion: condicion
        $consul="select * from ".$tabla." where ".$condicion.";"; //consulta
        $resu=$this->db->query($consul);        
        while($filas = $resu->FETCHALL(PDO::FETCH_ASSOC)) { //retorna un objeto
                $this->datos[]=$filas; //lo pasamos a un array
        }
        return $this->datos;
    } 
   */
}