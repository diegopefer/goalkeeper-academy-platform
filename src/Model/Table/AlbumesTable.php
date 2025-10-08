<?php
// src/Model/Table/AlbumesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\ORM\RulesChecker;
use Cake\Validation\Validator;
use Cake\I18n\Time;

use Cake\Event\Event;
use Cake\Utility\Text;

use ArrayObject;

class AlbumesTable extends Table
{
    public function initialize(array $config)
    {
    	$this->getTable('albumes');

    	$this->setDisplayField('tituloA');
        $this->getPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    // antes de guardar los datos en la bd generamos el slug simple a través del titulo del album
    public function beforeSave($event, $entity, $options){

      if ($entity->isNew() && !$entity->slug) {
          $sluggedTitulo = Text::slug($entity->tituloA);
          // trim slug to maximum length defined in schema
          $entity->slug = substr($sluggedTitulo, 0, 70);
      }
    }


    public function validationDefault(Validator $validator)
    {
        $validator
            ->requirePresence('tituloA',true)
            ->allowEmptyString('tituloA', false ,'Rellene este campo')
            ->maxlength('tituloA', 100,'El campo título debe tener máximo 100 caracteres');;


          $validator->requirePresence('fechaA',true)
                    ->allowEmptyDate('fechaA',false,'Rellene este campo');



        $validator->allowEmptyString('enlace_imagenA')
                ->allowEmptyString('enlace_imagenA', false ,'Rellene este campo')
                ->add('enlace_imagenA', [
                    'validUrl' =>[
                        'rule' => ['url'],
                        'message' =>'El campo debe ser una URL válida.'

                    ]
                ]);


         $validator->allowEmptyString('enlaceA')
            ->allowEmptyString('enlaceA', false ,'Rellene este campo')
            ->add('enlaceA', [
                'validUrl' =>[
                    'rule' => ['url'],
                    'message' =>'El campo debe ser una URL válida.'

                ]
            ]);




        return $validator;
    }
}