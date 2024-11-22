<div class="contenedor" style="display: flex; justify-content:center; align-items:center; gap:100px;">
<div class="logo-login">
    <img class="logotipo" src="build/img/LOGOTIPO.svg" alt="Logo">
</div>
    <form method="POST" action="/login">
        <label for="correo">Correo Electrónico</label>
        <div class="campo">  
            <input type="email" name="correo" id="correo">
        </div>
        <label for="correo">Contraseña</label>
        <div class="campo">
            <input type="password" name="clave" id="clave">
        </div>
        <input class="boton" type="submit" value="Ingresar">
    </form>
</div>