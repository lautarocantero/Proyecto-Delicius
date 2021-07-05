<?php

    class Combos extends Model{

        public function GetMenu(){
            $this->db->query("select * from combo");
            return $this->db->fetchAll();
        }

        public function GetCombos(){
            $this->db->query("select * from combo limit 4");
            return $this->db->fetchAll();
        }

        public function CrearCombos($precio,$imagen,$nombre,$descripcion,$hamburguesa,$bebida,$papas){
            if($this->validarPrecio($precio));
            if($this->validarNombre($nombre));
                $nombre = $this->db->escape($nombre);
            if($this->validarDescripcion($descripcion));
                $descripcion = $this->db->escape($descripcion);
            if($this->validarNumero($hamburguesa));
            if($this->validarNumero($bebida));
            if($this->validarNumero($papas));

            $this->db->query("INSERT INTO combo (precio,imagen,nombre,descripcion,hamburguesaid,bebidaid,papasid) VALUES ('$precio','$imagen','$nombre','$descripcion','$hamburguesa','$bebida','$papas'); ");

        }

        public function validarNombre($string){
                
            if(!isset($string)) throw new validarExcepcion('error1- no existe contenido en el nombre');     //validar que exista
            if(strlen($string) <3) throw new validarExcepcion('error2- la extencion del nombre es menor a 3 caracteres');  //validar tamaño minimo
            if(strlen($string) >30) throw new validarExcepcion('error3- el nombre no puede ser mayor a 30 caracteres');  //validar tamaño maximo
            return true;
        }

        public function validarDescripcion($string){
                
            if(!isset($string)) throw new validarExcepcion('error4- no existe contenido en la descripcion');     
            if(strlen($string) < 3) throw new validarExcepcion('error5- la extencion de la descripcion es menor a 3 caracteres');  
            if(strlen($string) >80) throw new validarExcepcion('error6-la descripcion no puede ser mayor a 80 caracteres');  
            return true;
        }

        public function validarPrecio($precio){
            if(!isset($precio)) throw new validarExcepcion ('error8- no existe contenido del precio');     //validar que exista
            if(!is_numeric($precio)) throw new validarExcepcion("error9- el precio no es un flotante $precio ");  //validar que sea un numero hexadecimal
            if($precio <= 0) throw new validarExcepcion('error10- el precio no puede ser menor a 0');  //validar que sea un monto posible
            return true;
        }

        public function validarNumero($numero){
            if(!isset($numero)) throw new validarExcepcion ('error11- no existe contenido del numero');     //validar que exista
            if(!ctype_digit($numero)) throw new validarExcepcion("error12- el numero no es un digito $numero ");  //validar que sea un numero
            if($numero <= 0) throw new validarExcepcion('error13- el numero no puede ser menor a 0');  //validar que sea un monto posible
            return true;
        }

        public function BorrarCombos($idcombo){
            if($this->ValidarNumero($idcombo));
            $this->db->query("DELETE FROM combo WHERE idcombo= $idcombo ");
        }

        public function Precio($idcombo){
            $this->db->query("SELECT precio FROM combo WHERE idcombo = $idcombo ");       //toma el query
            $pre = $this->recorrerPrecio($this->db->fetch());       //lo hace array, pasa a recorrer precio
            return $pre;    //devuelve el precio
        }

        public function recorrerPrecio($combo){           //recorrer precio devuelve solo el valor del precio
            return $combo['precio'];
        }

        public function CrearMonto($ham,$beb,$pap){
            $monto = ($ham + $beb + $pap);
            $porcentaje = $monto * 0.10;        //cada combo cuesta la suma de sus partes y se le aplica un 10% de descuento
            return ($monto - $porcentaje); 
        }

    }

?>