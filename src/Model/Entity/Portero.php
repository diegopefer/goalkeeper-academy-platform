<?php

// entidad = devolución de unica fila de la tabla. Facilita acceso y manipulación de los datos de las propiedades de esa fila
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Portero extends Entity{

  // fields that can be assigned using newEntity() or patchEntity().

  // contiene las propiedades de la fila y permite hacer asignamiento masivo. Aqui se definen las propiedades accessibles a los metodos anteriores.
  protected $_accessible = [

    '*' => true,
    'id' => false,
  ];
}
 ?>
