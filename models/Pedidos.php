<?php

    //models/Pedidos.php

    class Pedidos extends Model{ //representa a todas las hamburguesas.

            public function GetPedidos(){
                $this->db->query("select * from pedidos");
                return $this->db->fetchAll();
            }

            public function GetPedidosEmail($email){
                $this->db->query("select * from pedidos where email_cliente = '$email'");
                return $this->db->fetchAll();
            }

            public function CrearPedidos($monto,$nombre,$email_cliente,$hamburguesa,$bebida,$papas,$combo,$direccion){

                if($this->validarPrecio($monto));
                if($this->validarString($nombre));
                    $nombre = $this->db->escape($nombre);
                if($this->validarMail($email_cliente));
                    $email_cliente = $this->db->escape($email_cliente);
                if($hamburguesa != ""){         //si el select tiene contenido
                    if($this->validarNumero($hamburguesa)){
                        $hamburguesa = "'$hamburguesa'";    //la comida llevara un par de comillas
                    }   
                }else{                          //si no tiene contenido
                    $hamburguesa = 'NULL';      //se enviara null
                }
                if($bebida != ""){
                    if($this->validarNumero($bebida)){
                        $bebida = "'$bebida'";
                    }
                }else{                          
                    $bebida = 'NULL';      
                }
                if($papas != ""){
                    if($this->validarNumero($papas)){
                        $papas = "'$papas'";
                    }
                }else{
                    $papas = 'NULL';
                }
                if($combo != ""){
                    if($this->validarNumero($combo)){
                        $combo = "'$combo'";
                    }
                }else{
                    $combo = 'NULL';
                }
                if($this->validarString($direccion));
                    $direccion = $this->db->escape($direccion);
        
                 $this->db->query("INSERT INTO pedidos (fecha_pedido,monto,nombre,email_cliente,idhamburguesa,idpapas,idbebidas,idcombo,direccion,estado) VALUES (NOW(),'$monto','$nombre','$email_cliente',$hamburguesa,$bebida,$papas,$combo,'$direccion','pendiente'); ");
            }

            public function validarString($string){
                
                if(!isset($string)) throw new validarExcepcion('error1- no existe contenido en el string');     //validar que exista
                if(strlen($string) <3) throw new validarExcepcion('error2- la extencion de la string es menor a 3 caracteres');  //validar tamaño minimo
                if(strlen($string) >30) throw new validarExcepcion('error3- la string no puede ser mayor a 30 caracteres');  //validar tamaño maximo
        
                return true;
            }

            public function validarMail($email){
                $this->validarString($email);
                    $email = $this->db->escape($email);
                if(str_contains($email,'@gmail.com') || str_contains($email,'@hotmail.com') ){
                    return true;
                }else{
                    throw new validarExcepcion ('error4- no haz ingresado un mail valido');
                }
                
            }
        
            public function validarNumero($numero){
                if(!isset($numero)) throw new validarExcepcion ('error5- no existe contenido del numero');     //validar que exista
                if(!ctype_digit($numero)) throw new validarExcepcion('error6- el monto no es un digito');  //validar que sea un numero posible
                if($numero <= 0) throw new validarExcepcion('error7- el numero no puede ser menor a 0');  //validar que sea un monto posible
                
                return true;
            }

            public function validarPrecio($precio){
                if(!isset($precio)) throw new validarExcepcion ('error8- no existe contenido del precio');     //validar que exista
                if(!is_numeric($precio)) throw new validarExcepcion("error9- el precio no es un flotante $precio ");  //validar que sea un numero hexadecimal
                if($precio <= 0) throw new validarExcepcion('error10- No puedes realizar un pedido sin almenos un producto');  //validar que sea un monto posible
                return true;
            }

            public function BorrarPedidos($idpedidos){
                if($this->validarNumero($idpedidos));   //validacion
                $this->db->query("DELETE FROM pedidos WHERE idpedidos = $idpedidos ");
            }

            public function CrearMonto($ham,$beb,$pap,$com){
                $monto = ($ham + $beb + $pap + $com);
                return $monto; 
            }

            public function ModificarEstado($idpedido,$estado){
                if($this->validarNumero($idpedido));
                if($this->validarString($estado));
                $this->db->query("UPDATE pedidos set estado = '$estado' WHERE idpedidos = $idpedido ");
            }


    }


?>