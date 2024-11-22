//Inicio
const iniciarBtn = document.querySelector('.iniciarBtn');
if (iniciarBtn !== null) {
    iniciarBtn.addEventListener('click', iniciarEncusta)
}


function iniciarEncusta(){
    radio = document.querySelector('#terminos').checked
    if (!radio) {
        Swal.fire("Por favor lea los términos y condiciones");
    } else {
        window.location.href = `${location.origin}/encuesta`;
    }
}

//variables para el envio
let provincia = ""; //¿Cuál es su provincia de residencia actualmente?
let genero = ""; //¿Qué edad tiene y cómo se identifica en cuanto a género?
let rangoEdad = "";
let generoAbandonado = ""; //¿Cuál género cree que está más afectado por el abandono de adultos mayores en Costa Rica?
let rangoSoldedad = ""; //¿Cree que tiene personas de confianza que lo apoyarían en caso de necesidad en el futuro?
let rangoCuidado = ""; //¿Cuáles son sus hábitos actuales de actividad física y alimentación?
let rangoPreparado = ""; //¿Cuenta con un plan económico para garantizar su cuidado después de los 65 años?
let preparadoCuidar = ""; //¿Qué tan preparado/a se siente para cuidar de sus familiares mayores, en caso de que requieran atención o cuidados especiales?
let puntaje = 0; //Puntaje total de respuestas
//-----------------------------------------
// Obtener los elementos como botones y contenedores
const siguiente = document.querySelector('.despues'); // Botón siguiente
const anterior = document.querySelector('.antes'); // Botón anterior
const contenedores = document.querySelectorAll('.contenido'); // Todos los divs de contenido

let index = 0; // Para hacer el seguimiento del div actual


// Función para mostrar el siguiente div
function mostrarSiguiente() {
    if (index < contenedores.length - 1) {
        contenedores[index].classList.add('oculto'); // Ocultar el div actual
        index++; // Aumentar el índice
        contenedores[index].classList.remove('oculto'); // Mostrar el siguiente div
    }
}

// Función para mostrar el div anterior
function mostrarAnterior() {
    if (index > 0) {
        contenedores[index].classList.add('oculto'); // Ocultar el div actual
        index--; // Disminuir el índice
        contenedores[index].classList.remove('oculto'); // Mostrar el div anterior
    }
}

// Asignar los eventos de clic a los botones
siguiente.addEventListener('click', mostrarSiguiente);
anterior.addEventListener('click', mostrarAnterior);




//--------------------------------
const opcionesProvincia = document.querySelectorAll('.boton.provincia');
opcionesProvincia.forEach(opc => {
    opc.addEventListener('click', elegirProvincia);
});

const opcionesGenero = document.querySelectorAll('.boton.genero');
opcionesGenero.forEach(opc => {
    opc.addEventListener('click', elegirOpcion);
});

const edad = document.querySelector('.select-edad');
edad.addEventListener('change', elegirEdad);

const rangoPreg4 = document.querySelectorAll('.boton.opcionBtn4');
rangoPreg4.forEach(opc => {
    opc.addEventListener('click', elegirRangoPreg4);
});
const rangoPreg5 = document.querySelectorAll('.boton.opcionBtn5');
rangoPreg5.forEach(opc => {
    opc.addEventListener('click', elegirRangoPreg5);
});

const rangoPreg6 = document.querySelectorAll('.boton.opcionBtn6');
rangoPreg6.forEach(opc => {
    opc.addEventListener('click', elegirRangoPreg6);
});

const Preg7 = document.querySelectorAll('.boton.opcionBtn7');
Preg7.forEach(opc => {
    opc.addEventListener('click', elegirPregunta7);
});

const finalizarBtn = document.querySelector('#finalizar');
finalizarBtn.addEventListener('click', validarRespuestas);

function elegirProvincia(e) {

    const boton = e.currentTarget; // Referencia al botón clickeado
        const opcionElegida = boton.value;
        tipo = opcionElegida;
        //Se guarda el dato para la bd
        provincia = tipo;
        // Añadir una clase al botón clickeado
        boton.classList.add('activo'); // Cambia 'clase-activa' por el nombre de la clase que desees

        // Si deseas eliminar la clase de los demás botones, puedes hacerlo así:
        opcionesProvincia.forEach(opc => {
            if (opc !== boton) {
                opc.classList.remove('activo'); // Elimina la clase de los demás botones
            }
        });

        cambiarImagenProvincia(tipo);
} 

function cambiarImagenProvincia(tipo) {
    if (tipo === 'San José') {
        const imagenMapa =  document.querySelector('.img-mapa');
        imagenMapa.setAttribute('src', 'build/img/SJ.svg');
    }
    if (tipo === 'Alajuela') {
        const imagenMapa =  document.querySelector('.img-mapa');
        imagenMapa.setAttribute('src', 'build/img/Alajuela.svg');
    }
    if (tipo === 'Heredia') {
        const imagenMapa =  document.querySelector('.img-mapa');
        imagenMapa.setAttribute('src', 'build/img/Heredia.svg');
    }
    if (tipo === 'Cartago') {
        const imagenMapa =  document.querySelector('.img-mapa');
        imagenMapa.setAttribute('src', 'build/img/cartago.svg');
    }
    if (tipo === 'Puntarenas') {
        const imagenMapa =  document.querySelector('.img-mapa');
        imagenMapa.setAttribute('src', 'build/img/Puntarenas.svg');
    }
    if (tipo === 'Guanacaste') {
        const imagenMapa =  document.querySelector('.img-mapa');
        imagenMapa.setAttribute('src', 'build/img/Guanacaste.svg');
    }
    if (tipo === 'Limón') {
        const imagenMapa =  document.querySelector('.img-mapa');
        imagenMapa.setAttribute('src', 'build/img/Limon.svg');
    }
}

function elegirOpcion(e) {
        //reiniciar el select
        document.querySelector('.select-edad').selectedIndex = 0;

        const boton = e.currentTarget; // Referencia al botón clickeado
        const opcionElegida = boton.id;
        tipo = opcionElegida;
        //Se guarda el dato para la bd
        genero = tipo;
        // Añadir una clase al botón clickeado
        boton.classList.add('activo'); // Cambia 'clase-activa' por el nombre de la clase que desees

        // Si deseas eliminar la clase de los demás botones, puedes hacerlo así:
        opcionesGenero.forEach(opc => {
            if (opc !== boton) {
                opc.classList.remove('activo'); // Elimina la clase de los demás botones
            }
        });

        //Se cambia la imagen según las selección
        elegirGenero(tipo);
}

function elegirGenero(tipo) {
    if (tipo === 'mujer') {
        const imagenPersona =  document.querySelector('.imagen-persona');
        imagenPersona.setAttribute('src', 'build/img/silueta_mujer.svg');
    }
    if (tipo === 'hombre') {
        const imagenPersona =  document.querySelector('.imagen-persona');
        imagenPersona.setAttribute('src', 'build/img/Sombra_de_hombre.svg');
    }
    if (tipo === 'otro') {
        const imagenPersona =  document.querySelector('.imagen-persona');
        imagenPersona.setAttribute('src', 'build/img/Silueta-persona.svg');
    }
}

function elegirEdad(e) {
    const valor = e.target.value;
    //Se almacena en la variable global rangoEdad para luego enviarla a la bd
    rangoEdad = valor;
    
    //Cambio de imagen
    if (valor === "20-29" && genero === "hombre") {
        const imagenPersona =  document.querySelector('.imagen-persona');
        imagenPersona.setAttribute('src', 'build/img/Hombre_20.svg');
    }

    if (valor === "30-39" && genero === "hombre") {
        const imagenPersona =  document.querySelector('.imagen-persona');
        imagenPersona.setAttribute('src', 'build/img/Hombre_30.svg');
    }

    if (valor === "40-49" && genero === "hombre") {
        const imagenPersona =  document.querySelector('.imagen-persona');
        imagenPersona.setAttribute('src', 'build/img/Hombre_40.svg');
    }

    if (valor === "50-59" && genero === "hombre") {
        const imagenPersona =  document.querySelector('.imagen-persona');
        imagenPersona.setAttribute('src', 'build/img/Hombre_50.svg');
    }
    if (valor === "60" && genero === "hombre") {
        const imagenPersona =  document.querySelector('.imagen-persona');
        imagenPersona.setAttribute('src', 'build/img/Hombre_60.svg');
    }
    if (valor === "20-29" && genero === "mujer") {
        const imagenPersona =  document.querySelector('.imagen-persona');
        imagenPersona.setAttribute('src', 'build/img/Mujer_20.svg');
    }
    if (valor === "30-39" && genero === "mujer") {
        const imagenPersona =  document.querySelector('.imagen-persona');
        imagenPersona.setAttribute('src', 'build/img/Mujer_30.svg');
    }
    if (valor === "40-49" && genero === "mujer") {
        const imagenPersona =  document.querySelector('.imagen-persona');
        imagenPersona.setAttribute('src', 'build/img/Mujer_40.svg');
    }
    if (valor === "50-59" && genero === "mujer") {
        const imagenPersona =  document.querySelector('.imagen-persona');
        imagenPersona.setAttribute('src', 'build/img/Mujer_50.svg');
    }
    if (valor === "60" && genero === "mujer") {
        const imagenPersona =  document.querySelector('.imagen-persona');
        imagenPersona.setAttribute('src', 'build/img/Mujer_60.svg');
    }
}

const generos = document.querySelector('.select-generos');
generos.addEventListener('change', alegirGeneros);

const hombresOMujeres = document.querySelector('#generos');
hombresOMujeres.addEventListener('change', alegirHombresOMujeres);

function alegirGeneros(e) {
    const valor = e.target.value;
    //Se almacena en la variable global rangoEdad para luego enviarla a la bd
    generoAbandonado = valor;
}
function alegirHombresOMujeres(e) {
    const valor = e.target.value;

    if (valor === 'hombres') {
        const imagenPersona =  document.querySelector('.personas');
        imagenPersona.setAttribute('src', 'build/img/Abuelo_1.svg');
    }
    if (valor === 'mujeres') {
        const imagenPersona =  document.querySelector('.personas');
        imagenPersona.setAttribute('src', 'build/img/Abuela.svg');
    }
}

function elegirRangoPreg4(e) {
    const boton = e.currentTarget; // Referencia al botón clickeado
    const opcionElegida = boton.value;
    tipo = opcionElegida;
    //Se guarda el dato para la bd
    rangoSoldedad = tipo;
    // Añadir una clase al botón clickeado
    boton.classList.add('activo'); // Cambia 'clase-activa' por el nombre de la clase que desees

    // Si deseas eliminar la clase de los demás botones, puedes hacerlo así:
    rangoPreg4.forEach(opc => {
        if (opc !== boton) {
            opc.classList.remove('activo'); // Elimina la clase de los demás botones
        }
    });
}

function elegirRangoPreg5(e) {
    const boton = e.currentTarget; // Referencia al botón clickeado
    const opcionElegida = boton.value;
    tipo = opcionElegida;
    //Se guarda el dato para la bd
    rangoCuidado = tipo;
    // Añadir una clase al botón clickeado
    boton.classList.add('activo'); // Cambia 'clase-activa' por el nombre de la clase que desees

    // Si deseas eliminar la clase de los demás botones, puedes hacerlo así:
    rangoPreg5.forEach(opc => {
        if (opc !== boton) {
            opc.classList.remove('activo'); // Elimina la clase de los demás botones
        }
    });
}

function elegirRangoPreg6(e) {
    const boton = e.currentTarget; // Referencia al botón clickeado
    const opcionElegida = boton.value;
    tipo = opcionElegida;
    //Se guarda el dato para la bd
    rangoPreparado = tipo;
    // Añadir una clase al botón clickeado
    boton.classList.add('activo'); // Cambia 'clase-activa' por el nombre de la clase que desees

    // Si deseas eliminar la clase de los demás botones, puedes hacerlo así:
    rangoPreg6.forEach(opc => {
        if (opc !== boton) {
            opc.classList.remove('activo'); // Elimina la clase de los demás botones
        }
    });
}

function elegirPregunta7(e) {
    const boton = e.currentTarget; // Referencia al botón clickeado
    const opcionElegida = boton.value;
    tipo = opcionElegida;
    //Se guarda el dato para la bd
    preparadoCuidar = tipo;
    // Añadir una clase al botón clickeado
    boton.classList.add('activo'); // Cambia 'clase-activa' por el nombre de la clase que desees

    // Si deseas eliminar la clase de los demás botones, puedes hacerlo así:
    Preg7.forEach(opc => {
        if (opc !== boton) {
            opc.classList.remove('activo'); // Elimina la clase de los demás botones
        }
    });
}

function resultadoEncuesta() {
   
    puntaje = Number(rangoSoldedad) + Number(rangoCuidado) + Number(rangoPreparado) + Number(preparadoCuidar);
    const porcentaje = Math.floor((puntaje / 12)*100);
    cargarResultado(porcentaje);
}

function cargarResultado(porcentaje) {
    const contenedorActual = document.querySelector('#c14');
    contenedorActual.classList.add('oculto');
    console.log('hola 1')
    const contenedor = document.querySelector('.contenedor');
    contenedor.classList.add('oculto');
    console.log('hola 2')
    const mensaje1 = 'Tu nivel de preparación para la vejez parece ser bajo. Es importante trabajar en aspectos como tus redes de apoyo, hábitos saludables y planificación económica para mejorar tu calidad de vida futura.'
    const mensaje2 = 'Estás en un nivel de preparación moderado para la vejez. Aunque tienes algunos aspectos bien cubiertos, hay otros que podrían fortalecerse.'
    const mensaje3 = '¡Felicidades! Estás bien preparado para enfrentar la vejez. Mantén tus hábitos saludables, redes de apoyo y planificación económica para asegurar una calidad de vida estable.'

    

    contenedorResultado = `
        <div class="container-final">
    <div class="resultado" style="height: 100vh;">
        <p class="intro">Tu nivel del preparación para la vejez es de un:</p>
        <p class="porcentaje">${porcentaje}%</p>
        <p class="mensaje-final">${porcentaje <= 50 ? mensaje1 : (porcentaje > 50 && porcentaje < 83 ? mensaje2 : mensaje3)}</p>
    </div>
    <div class="final">
        <div class="logo-final">
            <img class="logotipo" src="build/img/LOGOTIPO.svg" alt="Logo">
        </div>

        <h4>¡Increíble!</h4>
        <p>
            Acaba de descubrir un desafío que definirá su futuro, y eso refleja su gran fortaleza.
        </p>
        <p>Tiene en sus manos la oporunidad de actuar, comenzando por cuidar quienes más lo necesitan, sus mayores.</p>
        <p style="margin-bottom: 50px;"><span>Ahora es el momento de hacer algo al respecto</span></p>
        <div class="botones">
            <a style="width: 250px;" href="https://grimy-hide-jud.mnz.dom.my.id/" class="boton">Realice el cambio</a>
            <a style="width: 300px;"href="https://conapam.go.cr/" class="boton">Conoce más sobre nosotros</a>
            <div class="contenedor-facebook">
               <a href="https://facebook.com"> <img class="facebook" src="build/img/Icono_Facebook.svg" alt="Icono de Facebook"></a>
            </div>
        </div>
    </div>
</div>
    `
    const contenedorPrincipal = document.querySelector('body');
    contenedorPrincipal.innerHTML = contenedorResultado;

    eliminarFlechas();

    guardarEncuesta();
}

function eliminarFlechas() {
    flechaAntes = document.querySelector('.antes')
    flechaDespues = document.querySelector('.despues')
    if (flechaAntes !== null && flechaDespues != null) {
        flechaAntes.style.display = 'none';
        flechaDespues.style.display = 'none';
    }
}

function validarRespuestas() {
    if (provincia === "" || genero === "" || rangoEdad === "" || generoAbandonado === "" || rangoSoldedad === "" || rangoCuidado === "" || rangoPreparado === "" || preparadoCuidar === "") {
        Swal.fire({
            title: "Uups...",
            text: "Parece que no has completado todas las preguntas",
            icon: "error"
          });
    } else {
        resultadoEncuesta();
    }
}

async function guardarEncuesta() {
    const datos = new FormData();
    datos.append('provincia', provincia);
    datos.append('genero', genero);
    datos.append('rango_de_edad', rangoEdad);
    datos.append('genero_abandonado', generoAbandonado);
    datos.append('id_apoyo_familiar', rangoSoldedad);
    datos.append('id_habitos_saludables', rangoCuidado);
    datos.append('id_planes_economicos', rangoPreparado);
    datos.append('id_cuidado_familiar', preparadoCuidar);

    try {
        const url = `${location.origin}/metricas`;
        const respuesta = await fetch(url, {
            method: 'POST',
            body: datos
        });

        console.log(respuesta);

    } catch (error) {
        console.log(error);
    }
}