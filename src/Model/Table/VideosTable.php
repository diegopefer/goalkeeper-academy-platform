<?php
// src/Model/Table/VideosTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\ORM\RulesChecker;
use Cake\Validation\Validator;
use Cake\I18n\Time;

use Cake\Event\Event;
use Cake\Utility\Text;

use ArrayObject;

class VideosTable extends Table
{
    public function initialize(array $config)
    {
    	$this->getTable('videos');

    	$this->setDisplayField('tituloV');
        $this->getPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

     // antes de guardar los datos en la bd generamos el slug simple a través del titulo del video
    public function beforeSave($event, $entity, $options){

      if ($entity->isNew() && !$entity->slug) {
          $sluggedTitulo = Text::slug($entity->tituloV);
          // trim slug to maximum length defined in schema
          $entity->slug = substr($sluggedTitulo, 0, 70);
      }
    }


    public function validationDefault(Validator $validator)
    {
        $validator
            ->requirePresence('tituloV',true)
            ->allowEmptyString('tituloV', false ,'Rellene este campo')
            ->maxlength('tituloV', 100,'El campo título debe tener máximo 100 caracteres');


      $validator->requirePresence('fechaV',true)
                ->allowEmptyString('fechaV',false,'Rellene este campo');
                // ->add('fechaV', 'valid', ['rule' => ['date','dmy']]);



    $validator->allowEmptyString('enlaceV')
            ->allowEmptyString('enlaceV', false ,'Rellene este campo')
              ->add('enlaceV', [
                  'validUrl' =>[
                      'rule' => ['url'],
                      'message' =>'El campo debe ser una URL válida.'

                    ]
                ]);

        return $validator;
    }
}