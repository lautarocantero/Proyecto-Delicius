<?php

    //models/Bebidas.php

    class Bebidas extends Model{
        
        public function GetMenu(){
            $this->db->query("select * from bebida");
            return $this->db->fetchAll();
        }

        public function CrearBebidas($nombre,$descripcion,$precio,$imagen){

            if($this->validarNombre($nombre));
                $nombre = $this->db->escape($nombre);
            if($this->validarDescripcion($descripcion)); 
                $descripcion = $this->db->escape($descripcion);
            if($this->validarNumero($precio));
    
             $this->db->query("INSERT INTO bebida (nombre,descripcion,precio,imagen) VALUES ('$nombre','$descripcion','$precio','$imagen'); ");
             
        }
    
        public function validarNombre($nombre){
                
            if(!isset($nombre)) throw new validarExcepcion('error1- no existe contenido en el nombre');     //validar que exista
            if(strlen($nombre) <3) throw new validarExcepcion('error2- la extencion del nombre es menor a 3 caracteres');  //validar tamaño minimo
            if(strlen($nombre) >30) throw new validarExcepcion('error3- el nombre no puede ser mayor a 30 caracteres');  //validar tamaño maximo
            return true;
        }

        public function validarDescripcion($descripcion){
                
            if(!isset($descripcion)) throw new validarExcepcion('error4- no existe contenido en la descripcion');     
            if(strlen($descripcion) < 3) throw new validarExcepcion('error5- la extencion de la descripcion es menor a 3 caracteres');  
            if(strlen($descripcion) >80) throw new validarExcepcion('error6-la descripcion no puede ser mayor a 80 caracteres');  
            return true;
        }
    
        public function validarNumero($precio){
            if(!isset($precio)) throw new validarExcepcion ('error4');     //validar que exista
            if(!ctype_digit($precio)) throw new validarExcepcion('error5');  //validar que sea un numero
            if($precio <= 0) throw new validarExcepcion('error6');  //validar que sea un monto posible
            return true;
        }
            
        public function BorrarBebidas($idbebida){
            if($this->validarNumero($idbebida));   //validacion
            $this->db->query("DELETE FROM bebida WHERE idbebida = $idbebida ");
        }

        public function Precio($idbebidas){
            $this->db->query("SELECT precio FROM bebida WHERE idbebida = $idbebidas ");       //toma el query
            $pre = $this->recorrerPrecio($this->db->fetch());       //lo hace array, pasa a recorrer precio
            return $pre;    //devuelve el precio
        }

        public function recorrerPrecio($bebidas){           //recorrer precio devuelve solo el valor del precio
            return $bebidas['precio'];
        }


    }

?>