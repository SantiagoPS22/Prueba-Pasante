/*const nombre = document.getElementsByName('Nombre');
const correo = document.getElementById('Correo');
const comentario = document.getElementById('Comentarios')
const Boton = document.getElementById('Boton')*/
const formulario = document.getElementById('Formulario');
const alertas = document.getElementById('alerta');


Boton.addEventListener('click',() =>{
    event.preventDefault();
    alertas.innerHTML = ''; 
    const nombre = formulario.Nombre.value;
    const correo = formulario.Correo.value;
    const comentario = formulario.Comentarios.value;

    if (!nombre || nombre == "") {
        const divError = document.createElement('div');  
        divError.className = 'error'; 
        const imagen = document.createElement('img');
        imagen.src='./source/crisis.png'
        const parrafoError = document.createElement('p');
        parrafoError.textContent = 'El nombre es obligatorio';
        alertas.style.display="flex"
        divError.appendChild(imagen)
        divError.appendChild(parrafoError);
        alertas.appendChild(divError);
        
    }

    if (!validarCorreo(correo)) {
        const divError = document.createElement('div');  
        divError.className = 'error'; 
        const imagen = document.createElement('img');
        imagen.src='./source/crisis.png'
        const parrafoError = document.createElement('p');
        parrafoError.textContent = 'Por favor introduce un correo electrónico válido';
        divError.appendChild(imagen)
        divError.appendChild(parrafoError);
        alertas.appendChild(divError);
     }

    if (comentario.length < 10) {
        const divError = document.createElement('div');  
        divError.className = 'error'; 
        const imagen = document.createElement('img');
        imagen.src='./source/crisis.png'
        const parrafoError = document.createElement('p');
        parrafoError.textContent = 'El comentario debe de tener almenos 10 caracteres';
        divError.appendChild(imagen)
        divError.appendChild(parrafoError);
        alertas.appendChild(divError);
    }
    if (comentario.length > 10 && nombre && validarCorreo(correo)) {
        alertas.innerHTML = ''; 
    
        const divExitoso = document.createElement('div');  
        divExitoso.className = 'exitoso'; 
    
        const imagen = document.createElement('img');
        imagen.src = './source/comprobado.png';
        imagen.alt = 'Éxito';
    
        const parrafoExito = document.createElement('p');
        parrafoExito.textContent = 'Registro EXITOSO';
    
        divExitoso.appendChild(imagen);
        divExitoso.appendChild(parrafoExito);
    
        alertas.appendChild(divExitoso);
        
        alertas.style.display = 'block';
    }
})


function validarCorreo(correo) {
    const Gmail = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    return Gmail.test(correo)
}
