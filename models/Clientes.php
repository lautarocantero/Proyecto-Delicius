<?php

    class Clientes extends Model{

        public function GetClientes(){
            $this->db->query("select * from cliente");
            return $this->db->fetchAll();
        }

        public function CrearCliente($nombre,$email,$pasword,$telefono,$direccion){
            if($this->validarString($nombre));
                $nombre = $this->db->escape($nombre);
            if($this->validarMail($email));
                $email = $this->db->escape($email);
            if($this->validarString($pasword)){
                $pasword = $this->db->escape($pasword);
                $pasword = $this->aplicarhash($pasword);
            }
            if($this->validarNumero($telefono));
            if($this->validarString($direccion));
                $direccion = $this->db->escape($direccion);
            
            $this->db->query("INSERT INTO cliente (nombre,email,password,telefono,direccion,fecha_alta) VALUES ('$nombre','$email','$pasword','$telefono','$direccion',NOW()); ");
        }

        public function validarString($string){
                
            if(!isset($string)) throw new validarExcepcion('error1- no existe contenido en el campo');     //validar que exista
            if(strlen($string) <3) throw new validarExcepcion('error2- la extencion del campo es menor a 3 caracteres');  //validar tamaño minimo
            if(strlen($string) >30) throw new validarExcepcion('error3- el campo no puede ser mayor a 30 caracteres');  //validar tamaño maximo
            return true;
        }

        public function validarNumero($telefono){
            if(!isset($telefono)) throw new validarExcepcion ('error7- no existe contenido en el telefono');     //validar que exista
            if(!ctype_digit($telefono)) throw new validarExcepcion('error8- el telefono no es un digito');  //validar que sea un numero
            if($telefono <= 0) throw new validarExcepcion('error9- el telefono no puede ser menor a 0');  //validar que sea un monto posible
            return true;
        }

        public function EliminarCliente($idcliente){
            if($this->ValidarNumero($idcliente));
            $this->db->query("DELETE FROM cliente WHERE idcliente= $idcliente ");
        }

        public function aplicarhash($pasword){
            return sha1($pasword);
        }

        public function IniciarSesion($email,$pasword){
            $this->validarMail($email);
                $email = $this->db->escape($email);
            $resultado = $this->db->query("SELECT * FROM cliente WHERE email = '$email' AND password = '$pasword'");
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

        public function verPedidos($emailcliente){ //cambiar para que reciba el id del cliente y no el email
            $pedidos = new Pedidos();
            $mis_pedidos = $pedidos->GetPedidosEmail($emailcliente);
            return $mis_pedidos;

        }

    }

?>