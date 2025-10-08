<?php
  namespace App\Model\Table;

  use Cake\ORM\Table;
  use Cake\ORM\RulesChecker;
  use Cake\Validation\Validator;
  use Cake\I18n\Time;

  use Cake\Event\Event;
  use Cake\Utility\Text;

  use ArrayObject;

  class NoticiasTable extends Table
  {
    public function initialize(array $config)
    {
        $this->getTable('noticias');
        //este metodo se utiliza para que un campo lo podemos definir para que pueda ser visualizdos en cualquier tabla relacionado o cualquier accion del controlador
        $this->setDisplayField('id');
        $this->getPrimaryKey('id');

        //asociacion muchos a uno entre evento y noticia (cada noticia puede relacionarse con 0 ó 1 evento)
        $this->belongsTo('Eventos');


        $this->addBehavior('Timestamp');//manejo de fechas

    }

      // antes de guardar los datos en la bd generamos el slug simple a través del titulo de la noticia
    public function beforeSave($event, $entity, $options){

      if ($entity->isNew() && !$entity->slug) {
        
          $sluggedTitulo = Text::slug($entity->tituloN);
          // trim slug to maximum length defined in schema
          $entity->slug = substr($sluggedTitulo, 0, 190);
      }
      

      // $fecha = $entity->fechaN;
      // $entity->fechaN = $fecha->format('d-m-Y H:i:s');

    }

    // public function beforeMarshal(Event $event, ArrayObject $data, ArrayObject $options)
    // {
    //     // if (isset($data['fechaN'])) {
    //         $data['fechaN'] = Time::parseDate($data['fechaN'], 'dd-MM-yyyy');
    //     // }
    // }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->requirePresence('tituloN',true)
            ->allowEmptyString('tituloN', false ,'Rellene este campo')
             ->maxlength('tituloN', 190,'El campo título debe tener máximo 190 caracteres');



        $validator->requirePresence('descripcionN',true)
              ->allowEmptyString('descripcionN', false, 'Rellene este campo');



      $validator->requirePresence('fechaN',true)
                ->allowEmptyDate('fechaN',false,'Rellene este campo');


      $validator
              ->requirePresence('fotoN', true)
              ->allowEmptyFile('fotoN', 'update','Rellene este campo')
              ->add('fotoP',[
                'validExtension'=>[  'rule' => ['extension',['jpg','jpeg','png','gif']],
                  'message'=> 'Solo están permitidas las extensiones: jpg, jpeg, png y gif.'

                ]

              ]);

        return $validator;
    }
}

?>
