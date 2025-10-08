<?php
// src/Model/Entity/Evento.php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Evento extends Entity
{
    protected $_accessible = [
        '*' => true,
        'id' => false,
        'slug' => false,
    ];
}