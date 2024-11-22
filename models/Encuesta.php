<?php

namespace Model;

class Encuesta extends ActiveRecord {
    protected static $tabla = 'Encuesta';
    protected static $columnasDB = ['id', 'provincia',
                                     'genero',
                                     'rango_de_edad' ,
                                     'genero_abandonado',
                                     'id_apoyo_familiar',
                                     'id_habitos_saludables',
                                     'id_planes_economicos',
                                    'id_cuidado_familiar'];


public $id;
public $provincia;
public $genero;
public $rango_de_edad;
public $genero_abandonado;
public $id_apoyo_familiar;
public $id_habitos_saludables;
public $id_planes_economicos;
public $id_cuidado_familiar;

//variables para los join
public $Cuenta_con_apoyo_familiar;
public $Cuenta_con_habitos_saludables;
public $Cuenta_con_planes_economicos;
public $Preparado_para_cuidar;
public $Porcentaje;


function __construct($args = [])
{
    $this->id = $args['id'] ?? null;
    $this->provincia = $args['provincia'] ?? '';
    $this->genero = $args['genero'] ?? '';
    $this->rango_de_edad = $args['rango_de_edad'] ?? '';
    $this->genero_abandonado = $args['genero_abandonado'] ?? '';
    $this->id_apoyo_familiar = $args['id_apoyo_familiar'] ?? '';
    $this->id_habitos_saludables = $args['id_habitos_saludables'] ?? '';
    $this->id_planes_economicos = $args['id_planes_economicos'] ?? '';
    $this->id_cuidado_familiar = $args['id_cuidado_familiar'] ?? '';

    //Variables para los join
    $this->Cuenta_con_apoyo_familiar = $args['Cuenta_con_apoyo_familiar'] ?? '';
    $this->Cuenta_con_habitos_saludables = $args['Cuenta_con_habitos_saludables'] ?? '';
    $this->Cuenta_con_planes_economicos = $args['Cuenta_con_planes_economicos'] ?? '';
    $this->Preparado_para_cuidar = $args['Preparado_para_cuidar'] ?? '';
    $this->Porcentaje = $args['Porcentaje'] ?? '';
}



}