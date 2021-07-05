
<?php

    class Empleados extends Model{

        public function GetEmpleados(){
            $this->db->query("select * from empleados");
            return $this->db->fetchAll();
        }

        public function CrearEmpleado($nombre,$email,$pasword,$apellido,$telefono,$dni){
            if($this->validarString($nombre));
                $nombre = $this->db->escape($nombre);
            if($this->validarMail($email));
                $email = $this->db->escape($email);
            if($this->validarString($pasword)){
                $pasword = $this->db->escape($pasword);
                $pasword = $this->aplicarhash($pasword);
            }
            if($this->validarString($apellido));
                $apellido = $this->db->escape($apellido);
            if($this->validarNumero($telefono));
            if($this->validarNumero($dni));
            
            
            $this->db->query("INSERT INTO empleados (nombre,email,password,fecha_alta,apellido,telefono,dni,salario) VALUES ('$nombre','$email','$pasword',NOW(),'$apellido','$telefono','$dni',17000); ");
        }

        public function validarString($string){
                
            if(!isset($string)) throw new validarExcepcion('error1- no existe contenido en el campo');     //validar que exista
            if(strlen($string) <3) throw new validarExcepcion('error2- la extencion del campo es menor a 3 caracteres');  //validar tamaño minimo
            if(strlen($string) >30) throw new validarExcepcion('error3- el campo no puede ser mayor a 30 caracteres');  //validar tamaño maximo
            return true;
        }

        public function validarNumero($precio){
            if(!isset($precio)) throw new validarExcepcion ('error7- no existe contenido del precio');     //validar que exista
            if(!ctype_digit($precio)) throw new validarExcepcion('error8- el precio no es un digito');  //validar que sea un numero
            if($precio <= 0) throw new validarExcepcion('error9- el precio no puede ser menor a 0');  //validar que sea un monto posible
            return true;
        }

        public function EliminarEmpleado($idempleado){
            if($this->ValidarNumero($idempleado));
            $this->db->query("DELETE FROM empleados WHERE idempleados = $idempleado ");
        }

        public function aplicarhash($pasword){
            return sha1($pasword);
        }

        public function IniciarSesion($email,$pasword){

            //validar mail y password
            $this->validarMail($email);
                $email = $this->db->escape($email);
            $resultado = $this->db->query("SELECT * FROM empleados WHERE email = '$email' AND password = '$pasword'");
            
            if($this->db->numRows($resultado) == 1){
                return true;
            }else{
                return false;
            }
        }

        public function validarMail($email){
            $this->validarString($email);
            if(str_contains($email,'@gmail.com') || str_contains($email,'@hotmail.com') ){
                return true;
            }else{
                throw new validarExcepcion ('error10- no haz ingresado un mail valido');
            }
            
        }

    }

?>