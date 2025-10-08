<?php
  namespace App\Model\Table;

  use Cake\ORM\Table;
  use Cake\ORM\RulesChecker;
  use Cake\Validation\Validator;

  use Cake\Event\Event;
  use Cake\Utility\Text;

  use ArrayObject;

  class PorterosTable extends Table
  {
    public function initialize(array $config)
    {
        $this->getTable('porteros');
        //este metodo se utiliza para que un campo lo podemos definir para que pueda ser visualizdos en cualquier tabla relacionado o cualquier accion del controlador
        $this->setDisplayField('id');
        $this->getPrimaryKey('id');

        $this->addBehavior('Timestamp');//manejo de fechas

    }


    // antes de guardar los datos en la bd generamos el slug simple a través del nombre + apellido del portero
    public function beforeSave($event, $entity, $options){

      if ($entity->isNew() && !$entity->slug) {
        
          $sluggedNombreCompleto = Text::slug($entity->nombre . " ". $entity->apellidos);
          // trim slug to maximum length defined in schema
          $entity->slug = substr($sluggedNombreCompleto, 0, 190);
      }
    }


    public function validationDefault(Validator $validator)
    {
        $validator
            ->requirePresence('nombre',true)
            ->allowEmptyString('nombre', false ,'Rellene este campo')
            ->add('nombre',[
                'length' => [
                    'rule' => ['minlength', 3 ],
                    'message' => 'El campo nombre debe tener mínimo 3 caracteres'
                ]
            ]);

        $validator
                ->requirePresence('apellidos',true)
                ->allowEmptyString('apellidos', false ,'Rellene este campo')
                ->add('apellidos',[
                    'length' => [
                        'rule' => ['minlength', 4 ],
                        'message' => 'El campo apellido debe tener mínimo 4 caracteres'
                    ]
                ]);

        $validator->requirePresence('apodo', true)
                  ->allowEmptyString('apodo')
                  ->add('apodo',[
                      'length' => [
                          'rule' => ['maxLength', 15 ],
                          'message' => 'El campo apodo puede tener como máximo 15 caracteres'
                      ]
                  ]);

      $validator->requirePresence('fecha_nacimiento',true)
                ->allowEmptyDate('fecha_nacimiento',false,'Rellene este campo');

      $validator
              ->requirePresence('categoria',true)
              ->allowEmptyString('categoria', false ,'Rellene este campo');

      $validator->requirePresence('equipo',true)
                ->allowEmptyString('equipo', false ,'Rellene este campo')
                ->add('apodo',[
                    'length' => [
                        'rule' => ['maxLength', 40 ],
                        'message' => 'El campo equipo puede tener máximo 40 caracteres'
                    ]
                ]);

    $validator->requirePresence('descripcion',true)
              ->allowEmptyString('descripcion',false,'Rellene este campo')
              ->add('descripcion',[
                    'length' => [
                        'rule' => ['maxLength', 220 ],
                        'message' => 'El campo descripción puede tener máximo 220 caracteres'
                    ]
                ]);

    $validator->requirePresence('slogan',true)
              ->allowEmptyString('slogan',false, 'Rellene este campo')
              ->add('slogan',[
                    'length' => [
                        'rule' => ['maxLength', 60 ],
                        'message' => 'El campo slogan puede tener máximo 60 caracteres'
                    ]
                ]);


    $validator
            ->requirePresence('pie_dominante', true)
            ->allowEmptyString('pie_dominante', false ,'Rellene este campo');

    $validator
              ->requirePresence('fotoP', true)
              ->allowEmptyFile('fotoP', 'update','Rellene este campo')
              ->add('fotoP',[
                'validExtension'=>[  'rule' => ['extension',['jpg','jpeg','png','gif']],
                  'message'=> 'Solo están permitidas las extensiones: jpg, jpeg, png y gif.'

                ]

              ]);

        return $validator;
    }



    // public function buildRules(RulesChecker $rules)
    // {
    //     $rules->add($rules->isUnique(['email', 'Ya existe un equipo con ese nombre']));

    //     return $rules;
    // }
  }
?>
