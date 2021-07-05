//variables

const formulario = document.querySelector('#formulario');   //todo el formulario

const nombre = document.querySelector('#nombre');   //nombre del producto

const descripcion = document.querySelector('#descripcion'); //descripcion del producto

const precio = document.querySelector('#precio');   //precio del producto

const imagen = document.querySelector('#imagen');  //imagen del producto

const btnLimpiar = document.querySelector('#limpiar');      //boton de limpiar

const btnCrear = document.querySelector('#crear');  //boton de enviar del formulario 

//eventos

eventListeners();
function eventListeners(){
    //iniciando la app
    document.addEventListener('DOMContentLoaded', activarBoton(false) );

    //validar campos
    nombre.addEventListener('blur',validarFormulario);   //blur
    descripcion.addEventListener('blur',validarFormulario);
    precio.addEventListener('blur',validarFormulario);
    imagen.addEventListener('blur',validarFormulario);

    //resetear
    btnLimpiar.addEventListener('click',resetearFormulario);
}

//funciones
function validarFormulario(e){

    //validacion pasada
    if( validarNombre(nombre.value) && validarDescripcion(descripcion.value) && validarPrecio(precio.value) && validarImagen(imagen.value) ){
        activarBoton(true);
        const error = document.querySelector('p.error');
        if(error){
            error.remove();
        }
    }else{
        activarBoton(false);
        mostrarError('Quedan campos por llenar o no cumplen con los requerimentos');
    }

}

function validarNombre(nombre){

    if(nombre.length > 3 && nombre.length < 30){    
        return true;
    }else{
        return false;
    }

}

function validarDescripcion(descripcion){

    if(descripcion.length > 3 && descripcion.length < 80){    
        return true;
    }else{
        return false;
    }

}

function validarPrecio(precio){

    if(precio > 0){    
        return true;
    }else{
        return false;
    }

}

function validarImagen(imagen){

    if(imagen.length > 0){    
        return true;
    }else{
        return false;
    }

}

// function campo(e,respuesta){
//     if(respuesta == true){
//         e.target.classList.remove('campo-error');
//         e.target.classList.add('campo-correcto');
//     }else{
//         e.target.classList.remove('campo-correcto');    //sacar marco verde
//         e.target.classList.add('campo-error'); 
//     }
// }

function activarBoton(resultado){
    if(resultado == true){
        btnCrear.disabled = false;
        btnCrear.classList.remove('cursor-not-allowed', 'opacity-50');
    }else{
        btnCrear.disabled = true;
        btnCrear.classList.add('cursor-not-allowed', 'opacity-50');
    }

}

function mostrarError(mensaje){

    const mensajeError = document.createElement('P');
    mensajeError.textContent = mensaje;
    mensajeError.classList.add('error');
    
    const errores = document.querySelectorAll('.error');
    if(errores.length === 0  ){
        formulario.insertBefore(mensajeError,document.querySelector('#limpiar'));
    }else{
        formulario.re
    }

}

//resetear formulario

function resetearFormulario(){
    formulario.reset();
    nombre.classList.remove('campo-correcto');   
    descripcion.classList.remove('campo-correcto');   
    precio.classList.remove('campo-correcto');   
    imagen.classList.remove('campo-correcto');   
    iniciarApp();
}