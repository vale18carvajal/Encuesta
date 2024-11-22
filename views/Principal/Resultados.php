
<div class="container">
<div class="logo-metricas">
    <img class="logotipo" src="build/img/LOGOTIPO.svg" alt="Logo">
    <a href="/logout" class="boton">Cerrar Sesión</a>
</div>
<div class="separador"></div>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No. de encuesta</th>
      <th scope="col">Provincia</th>
      <th scope="col">Genero</th>
      <th scope="col">Rango de edad</th>
      <th scope="col">Género que considera que hay más abandono</th>
      <th scope="col">Cuenta con apoyo familiar</th>
      <th scope="col">Nivel de hábitos saludables</th>
      <th scope="col">Nivel de planes económicos</th>
      <th scope="col">Se encuentra preparado para cuidar</th>
      <th scope="col">Porcentaje obtenido</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($encuestas as $encuesta){?>
    <tr>
      <th scope="row"><?php echo $encuesta->id?></th>
      <td><?php echo $encuesta->provincia?></td>
      <td><?php echo $encuesta->genero?></td>
      <td><?php echo $encuesta->rango_de_edad?></td>
      <td><?php echo $encuesta->genero_abandonado?></td>
      <td><?php echo $encuesta->Cuenta_con_apoyo_familiar?></td>
      <td><?php echo $encuesta->Cuenta_con_habitos_saludables?></td>
      <td><?php echo $encuesta->Cuenta_con_planes_economicos?></td>
      <td><?php echo $encuesta->Preparado_para_cuidar?></td>
      <td><?php echo $encuesta->Porcentaje?></td>
    </tr>
    <?php }?>
   
  
    
  </tbody>
</table>
</div>