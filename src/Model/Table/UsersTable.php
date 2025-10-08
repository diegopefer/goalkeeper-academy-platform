<?php 
// src/Model/Table/UsersTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Event\Event;

use Cake\I18n\Time;

use Cake\Validation\Validator;
use Cake\ORM\RulesChecker;
use Cake\ORM\Rule\IsUnique;

use ArrayObject;

class UsersTable extends Table
{       
    public function initialize(array $config)
    {

        $this->addBehavior('Timestamp');
    }

     public function validationDefault(Validator $validator){
        $validator
            ->requirePresence('username', true)
            ->notEmptyString('username', 'El nombre de usuario es obligatorio', false)
            ->add('username', [
                    'unique' => [
                        'rule' => 'validateUnique',
                        'provider' => 'table',
                        'message' => 'El nombre de usuario ya existe'
                    ]
        ]);

        $validator
            ->allowEmptyString('password', 'La contraseña es obligatoria', false)
            ->add('password', [
                'length' => [
                    'rule' => ['minLength', 5],
                    'message' => 'La contraseña debe tener mínimo 5 caracteres',
                ]
        ]);
     

        return $validator;
    }

}
?>