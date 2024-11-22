<i class="antes fa-solid fa-arrow-left"></i>
<div class="contenedor">
    <div id="1" class="contenido">
        <p>Pregunta 1: ¿Cuál es su provincia de residencia actualmente?</p>
        <p class="indicacion">***Por favor, seleccione su provincia</p>
        <div class="botones">
            <button id="sanJose" class="boton provincia" value="San José">San José</button>
            <button id="alajuela" class="boton provincia" value="Alajuela">Alajuela</button>
            <button id="heredia" class="boton provincia" value="Heredia">Heredia</button>
            <button id="cartago" class="boton provincia" value="Cartago">Cartago</button>
            <button id="puntarenas" class="boton provincia" value="Puntarenas">Puntarenas</button>
            <button id="guanacaste" class="boton provincia" value="Guanacaste">Guanacaste</button>
            <button id="limon" class="boton provincia" value="Limón">Limón</button>

        </div>
        <div class="mapa">
            <img class="img-mapa" src="build/img/mapa_sin_color.svg" alt="Imagen de mapa">
        </div>
    </div>
    <div id="2" class="contenido oculto">
        <div class="dato-informativo">
            <p>En Montes de Oca, el 13.9% de la población está compuesta por adultos mayores, lo
                que equivale a aproximadamente 8,749 personas viviendo su vejez. ¡Eso es más que la capacidad del Estadio Eladio Rosabal Cordero!</p>
            <p class="fuente">Fuente <a href="https://services.inec.go.cr/proyeccionpoblacion/frmproyec.aspx">Inec 2023</a></p>
        </div>
    </div>


    <div id="3" class="contenido oculto">
        <p>Pregunta 2: ¿Qué edad tiene y cómo se identifica en cuanto a género?</p>
        <p class="indicacion">***Por favor, seleccione su género y su edad</p>
        <div class="botones">
            <button id="mujer" class="boton genero">Mujer</button>
            <button id="hombre" class="boton genero">Hombre</button>
            <button id="otro" class="boton genero">Prefiero no decirlo</button>
        </div>
        <div class="contenedor-persona">
            <img class="imagen-persona" src="build/img/Silueta-persona.svg" alt="Imagen de hombre">
        </div>
        <div class="seccion seccion-edad">
            <select class="select select-edad" name="edad" id="edad">
                <option selected disabled>Edad</option>
                <option value="20-29">De 20 a 29 años</option>
                <option value="30-39">De 30 a 39 años</option>
                <option value="40-49">De 40 a 49 años</option>
                <option value="50-59">De 50 a 59 años</option>
                <option value="60">60 años o más</option>
            </select>
        </div>

    </div>
    <div id="4" class="contenido oculto">
        <div class="dato-informativo">
            <p>En Costa Rica, hay 576,017 adultos mayores, de los cuales el 53.01% son mujeres y el 47% hombres.
                Las mujeres superan la esperanza de vida en un 21.6%.</p>
            <p class="fuente">Fuente <a href="https://ageco.org/ageco-e-inec-brindaron-informacion-actualizada-en-materia-de-cuidados-de-personas-adultas-mayores-en-costa-rica/#:~:text=Seg%C3%BAn%20estad%C3%ADsticas%20del%20INEC%20en,13%2C3%25%20tienen%20empleo">Ageco e Inec </a></p>
        </div>
    </div>
    <div id="5" class="contenido oculto">
        <p>Pregunta 3: ¿Cuál género cree que está más afectado por el abandono de adultos mayores en Costa Rica?</p>
        <p class="indicacion">***Por favor, seleccione su respuesta</p>
        <div class="d-flex">
            <div class="seccion seccion-generos">
                <select class="select select-generos" name="generos" id="generos">
                    <option selected disabled>Género</option>
                    <option value="hombres">Hombres</option>
                    <option value="mujeres">Mujeres</option>
                </select>
            </div>
            <div class="signo" style="margin-right: 65px; margin-top: 50px;">
                <img class="personas img-signo" src="build/img/Abuelo_o_abuela.svg" alt="Signo de pregunta">
            </div>
        </div>

    </div>
    <div id="6" class="contenido oculto">
        <div class="dato-informativo">
            <p>En 2020, se registraron 8,000 denuncias de abandono, y en 2022, la CCSS (Caja Costarricense del Seguro Social)
                documentó 89 casos de negligencia por abandono, de los cuales el 71% eran hombres. </p>
            <p class="fuente">Fuente <a href="">CCSS, UCR y CONAPAM</a></p>
        </div>
    </div>
    <div id="7" class="contenido oculto">
        <p>Pregunta 4: ¿Cree que tiene personas de confianza que lo apoyarían en caso de necesidad en el futuro? </p>
        <p class="indicacion">***Por favor, seleccione una opción</p>
        <div class="soledad">
            <img class="familia" src="build/img/Familia.gif" alt="Familia Faltante">
        </div>

        <div class="botones">
            <button id="preg4-opc1" class="boton opcionBtn4" value="3">Bastante probable</button>
            <button id="preg4-opc2" class="boton opcionBtn4" value="2">Muy probable</button>
            <button id="preg4-opc3" class="boton opcionBtn4" value="1">Poco probable</button>
        </div>
    </div>
    <div id="8" class="contenido oculto">
        <div class="dato-informativo">
            <p>En Costa Rica, 109,884 personas adultas mayores viven solas, de las cuales 13,349
                tienen 85 años o más. Este es uno de los factores que más impacta la salud mental. </p>
            <p class="fuente">Fuente <a href="">UCR</a></p>
        </div>
    </div>

    <div id="9" class="contenido oculto">
        <p>Pregunta 5: ¿Cuáles son sus hábitos actuales de actividad física y alimentación? </p>
        <p class="indicacion">***Por favor, seleccione una opción</p>
        <div style="display: flex;">
            <div class="contenedor-manos">
                <img class="manos" src="build/img/Signo-de-preg.gif" alt="Manos">
            </div>
            <div class="botones" style="display: flex; flex-direction: column;">
                <div>
                    <button id="preg5-opc1" class="boton opcionBtn5" value="3">Hago ejercicio y como saludablemente.</button>
                </div>
                <div>
                    <button id="preg5-opc2" class="boton opcionBtn5" value="2">Hago algo de ejercicio y como moderadamente bien.</button>
                </div>
                <div>
                    <button id="preg5-opc3" class="boton opcionBtn5" value="1">No hago ejercicio y mi alimentación no es saludable.</button>
                </div>


            </div>
        </div>

    </div>

    <div id="10" class="contenido oculto">
        <div class="dato-informativo">
            <p>Aproximadamente 280,000 personas enfrentan dificultades para las actividades diarias y tienen tres veces más probabilidades de depender de otros.
                Se estima que, para 2050, el porcentaje aumentará al 62%. </p>
            <p class="fuente">Fuente <a href="">IMAS y ENADIS</a></p>
        </div>
    </div>

    <div id="11" class="contenido oculto">
        <p>Pregunta 6: ¿Cuenta con un plan económico para garantizar su cuidado después de los 65 años? </p>
        <p class="indicacion">***Por favor, seleccione una opción</p>
        <div class="botones">
            <button id="preg6-opc1" class="boton opcionBtn6" value="3">Sí, cuento con un seguro o pensión que cubra mis necesidades.</button>
            <button id="preg6-opc2" class="boton opcionBtn6" value="2">Tengo ahorros u otras fuentes de ingreso planificadas.</button>
            <button id="preg6-opc3" class="boton opcionBtn6" value="1">No tengo un plan económico específico.</button>
        </div>
        <div class="seccion-img-6">
            <img class="manos" src="build/img/abuelo_abriendo_y_cerrando_ojos.gif" alt="abuelo_abriendo_y_cerrando_ojos">
        </div>
    </div>
    <div id="12" class="contenido oculto">
        <div class="dato-informativo">
            <p>El 27% de las personas adultas mayores viven en pobreza, y la mayoría no estaban preparados económicamente para la vejez. Esta situación aumenta el riesgo debido a la falta de
                pensiones y la creciente carga sobre los sistemas de apoyo familiar.</p>
            <p class="fuente">Fuente <a href="">Defensoría de los habitantes</a></p>
        </div>
    </div>

    <div id="13" class="contenido oculto">
        <p>Pregunta 7: ¿Qué tan preparado/a se siente para cuidar de sus familiares mayores, en caso de que requieran atención o cuidados especiales? </p>
        <p class="indicacion">***Por favor, seleccione una opción</p>
        <div style="display: flex;">
            <div class="contenedor-corazon">
                <img class="corazon" src="build/img/Pregunta_7.gif" alt="Corazón latiendo">
            </div>
            <div style="display: flex; flex-direction: column;" class="botones">
                <div>
                    <button id="preg7-opc1" class="boton opcionBtn7" value="3">Muy Preparado</button>
                </div>
                <div>
                    <button id="preg7-opc2" class="boton opcionBtn7" value="2">Poco Preparado</button>
                </div>
                <div>
                    <button id="preg7-opc3" class="boton opcionBtn7" value="1">Nada Preparado</button>
                </div>

            </div>
        </div>
    </div>

    <div id="c14" class="contenido oculto">
        <div class="dato-informativo">
            <p>Los cuidadores de personas dependientes a menudo experimentan sobrecarga, en muchos casos porque
                carecen del conocimiento necesario para brindar este apoyo.</p>
            <p>Usted puede ayudar a los suyos para que en un futuro des el ejemplo y le ayuden a usted.</p>
            <button id="finalizar" class="btnFinalizar">Finalizar encuesta</button>
        </div>
    </div>



</div>

<i class="despues fa-solid fa-arrow-right"></i>