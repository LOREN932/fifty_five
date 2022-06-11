<?php
    require_once("modelo/index.php");

    class ModeloController{
        private $model;
        public function __construct(){
            $this->model=new Modelo();
        }
        // Iniciar en la pagina de inicio
        static function iniciar(){
          require_once("vista/index.php");
        }
        // mostrar
        static function index(){
            $datos=new Modelo();
            $datos2=new Modelo();
            $dato=$datos->mostrar("tarea","0");
            $dato2=$datos2->mostrar_nota("anotaciones","0");
            require_once("vista/tareas.php");
        }
       
        static function busqueda(){
          require_once("vista/tareas.php");
      }
        // NUEVO
        static function nuevo(){
           require_once("vista/nuevo.php");
        }

        //datos personales
        static function personales(){
          require_once("vista/DatosPersonales.php");
       }


        // Guardar
        static function guardar(){
            $titulo=$_REQUEST['titulo'];
            $mensaje=$_REQUEST['mensaje'];
            $color=$_REQUEST['color'];
            $fecha_inicio=date('d/m/y');
            $fecha_finalizacion=$_REQUEST['fecha'];
            $condicion=0;
            $id_usuario=1;
            $data="'".$titulo."','".$mensaje."','".$fecha_inicio."','".$fecha_finalizacion."','".$color."',".$condicion.",".$id_usuario;
            $usuario=new Modelo();
              $dato=$usuario->insertar("tarea",$data);
               header('location:'.'index.php?n=index');
         }

        // inciar busqueda
        static function buscar(){
          $titulo=$_REQUEST['titulo'];
          $data="titulo='".$titulo."'";
          $usuario=new Modelo();
            $dato=$usuario->mostrar2("tarea",$data);
            require_once("vista/tareas.php");
       }
          // editar
        static function editar(){
            $id=$_REQUEST['id'];
            $datos=new Modelo();
            $dato=$datos->mostrar2("tarea","id=".$id);
            require_once("vista/editar.php");
         }
        
 
         // actualizar
         static function actualizar(){
            $id=$_REQUEST['id'];
             $titulo=$_REQUEST['titulo'];
            $mensaje=$_REQUEST['mensaje'];
            $color=$_REQUEST['color'];
            $fecha_finalizacion=$_REQUEST['fecha'];
            $data="titulo='".$titulo."',descripcion='".$mensaje."',color='".$color."',fecha_finalizacion='".$fecha_finalizacion."'";
             $datos=new Modelo();
             $dato=$datos->actualizar("tarea",$data,"id=".$id);
             header('location:'.'index.php?n=index');
          }
          static function archivar(){
            $id=$_REQUEST['id'];
            $datos=new Modelo();
            $dato=$datos->archivar("tarea","id=".$id,1);
            $dato=$datos->mostrar("tarea","0");
            require_once("vista/tareas.php");
          }
          static function sacarArch(){
            $id=$_REQUEST['id'];
            $datos=new Modelo();
            $dato=$datos->archivar("tarea","id=".$id,0);
            $dato=$datos->mostrar("tarea","1");
            require_once("vista/archivados.php");
          }
          static function paginaArch(){
            $datos=new Modelo();
            $datos2=new Modelo();
            $dato=$datos->mostrarArchivados("tarea");
            $dato2=$datos2->mostrarArchivados_nota("anotaciones");
            require_once("vista/archivados.php");
          }
        // Eliminar
          static function eliminar(){
            $id=$_REQUEST['id'];
            $datos=new Modelo();
            $dato=$datos->eliminar("tarea","id=".$id);
            header('location:'.'index.php?n=index');
         }

         // Eliminar nota
         static function eliminar_nota(){
          $id=$_REQUEST['id'];
          $datos2=new Modelo();
          $dato=$datos2->eliminar("anotaciones","id=".$id);
          header('location:'.'index.php?n=index');
       }
       

          // Guardar nota
        static function guardar_nota(){
          $descripcion=$_REQUEST['descripcion_nota'];
          $condicion=0;
          $id_usuario=1;
          $data="'".$descripcion."',".$condicion.",".$id_usuario;
          $usuario=new Modelo();
            $dato=$usuario->insertar("anotaciones",$data);
             header('location:'.'index.php?n=index');
       }
      //archivar nota
       static function archivar_nota(){
        $id=$_REQUEST['id'];
        $datos2=new Modelo();
        $dato2=$datos2->archivar("anotaciones","id=".$id,1);
        $dato2=$datos2->mostrar_nota("anotaciones","0");
        require_once("vista/tareas.php");
      }
      //sacar nota de los archivados
      static function sacarArch_nota(){
        $id=$_REQUEST['id'];
        $datos2=new Modelo();
        $dato2=$datos2->archivar("anotaciones","id=".$id,0);
        $dato2=$datos2->mostrar_nota("anotaciones","1");
        require_once("vista/archivados.php");
      }

         // editar nota
         static function editar_nota(){
          $id=$_REQUEST['id'];
          $datos2=new Modelo();
          $dato=$datos2->mostrar2_nota("anotaciones","id=".$id);
          require_once("vista/editar_nota.php");
       }
     

         // actualizar nota
         /*
         static function actualizar_nota(){
          $id=$_REQUEST['id'];
          $descripcion=$_REQUEST['descripcion_nota'];
          $data="'".$descripcion."'";
           $datos2=new Modelo();
           $dato=$datos2->actualizar("anotaciones",$data,"id=".$id);
           header('location:'.'index.php?n=index');
        }
        */




/*
         static function actualizar_personales(){
          $id = $_REQUEST['id']; //obtener id
          $nombre= $_REQUEST['nombre']; //obtener nombre
          $apellido= $_REQUEST['apellido']; 
          $correo= $_REQUEST['correo']; 
          $n_usuario= $_REQUEST['n_usuario'];
          $clave=$_REQUEST['clave'];

          $data = "nombre='".$nombre."',apellido='".$apellido."',correo='".$correo."',n_usuario='".$n_usuario."',clave='".$clave."'";
          $usuario = new Modelo(); //instanciar usuario
          $dato = $usuario->actualizar_personales("usuario",$data,"id=".$id); //consulta
          header('location:'.'index.php?n=index'); //redireccionar 
      }

      static function editar_personal(){    
        $id = $_REQUEST['id']; //obtener id
        $usuario = new Modelo(); //instanciar 
        $dato = $usuario->mostrar("usuario","id=".$id);   //consulta      
        require_once("vista/DatosPersonales.php"); //vista
    }

*/

    }
?>