<?php
  namespace App\Model\Table;

  use Cake\ORM\Table;
  use Cake\ORM\RulesChecker;
  use Cake\Validation\Validator;

  use Cake\Event\Event;
  use Cake\Utility\Text;
  
  use ArrayObject;

  class EventosTable extends Table
  {
    public function initialize(array $config)
    {
        $this->getTable('eventos');
        //este metodo se utiliza para que un campo lo podemos definir para que pueda ser visualizdos en cualquier tabla relacionado o cualquier accion del controlador
        $this->setDisplayField('tituloE');
        $this->getPrimaryKey('id');

        //asociacion uno a muchos entre evento y noticias ( evento 0 a n noticias)
        $this->hasMany('Noticias');

        $this->addBehavior('Timestamp');//manejo de fechas

    }

    // antes de guardar los datos en la bd generamos el slug simple a través del titulo del evento
    public function beforeSave($event, $entity, $options){

      if ($entity->isNew() && !$entity->slug) {
          $sluggedTitulo = Text::slug($entity->tituloE);
          // trim slug to maximum length defined in schema
          $entity->slug = substr($sluggedTitulo, 0, 190);
      }
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->requirePresence('tituloE',true)
            ->allowEmptyString('tituloE', false ,'Rellene este campo')
            ->maxlength('tituloE', 190,'El campo título debe tener máximo 190 caracteres');

        $validator->requirePresence('descripcionE',true)
              ->allowEmptyString('descripcionE', false, 'Rellene este campo');


        $validator->requirePresence('fechaE',true)
                ->allowEmptyDate('fechaE',false,'Rellene este campo');

        $validator->requirePresence('horaE',true)
                  ->allowEmptyTime('horaE',false, 'Rellene este campo');


        $validator->allowEmptyString('enlace_localizacionE')
                  ->add('enlace_localizacionE', [
                      'validUrl' =>[
                          'rule' => ['url'],
                          'message' =>'El campo debe ser una URL válida.'

                        ]
                    ]);

        $validator
              ->requirePresence('fotoE', true)
              ->allowEmptyFile('fotoE', 'update','Rellene este campo')
              ->add('fotoE',[
                'validExtension'=>[  'rule' => ['extension',['jpg','jpeg','png','gif']],
                  'message'=> 'Solo están permitidas las extensiones: jpg, jpeg, png y gif.'

                ]

              ]);

        return $validator;
    }


  }

    ?>
