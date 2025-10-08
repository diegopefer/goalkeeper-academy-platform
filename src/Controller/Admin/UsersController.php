<?php

// src/Controller/Admin/UsersController.php

namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Http\Exception\NotFoundException;
use Cake\Validation;




class UsersController extends AppController
{
     // variable para paginacion
    public $paginate = [
        'limit' => 4,
        'order' => ['Users.username' => 'desc']
    ];


    //listado de usuario
    public function listar(){
   
        $this->viewBuilder()->setLayout('privado');

        $this->paginate = [
          'limit' => 6,
          'order' => ['Users.username' => 'asc'],
        ];


        $usuarios = $this->paginate($this->Users->find());
        $this->set('usuarios', $usuarios);
    }

    // nuevo usuario
    public function add()
    {   
        $this->viewBuilder()->setLayout('privado');

        $usuario = $this->Users->newEntity();

        if ($this->request->is('post')) {

            $usuario = $this->Users->patchEntity($usuario, $this->request->getData());

            if ($this->Users->save($usuario)) {

                $this->Flash->success(__('El usuario ha sido creado correctamente.'));

                return $this->redirect(['controller' => 'Users', 'action' => 'listar']);
            }
            $this->Flash->error(__('El usuario no ha podido ser creado, inténtalo de nuevo.'));
        }
        $this->set('usuario', $usuario);
    }

    //eliminacion de usuario

    public function delete($id){

        $this->request->allowMethod(['post', 'delete']);

        $usuario = $this->Users->get($id);
        if ($this->Users->delete($usuario)) {
            $this->Flash->success(__('El usuario <strong> ' . $usuario['username'] . ' </strong> ha sido eliminado correctamente.'), ['escape' => false]);
            return $this->redirect(['action' => 'listar']);
        } else {
            $this->Flash->error(__('El usuario <strong> ' . $usuario['username'] . ' </strong> no ha podido ser eliminado,inténtalo de nuevo.'), ['escape' => false]);
        }
    }

    //acceso de usuario
    public function login(){ 

        $this->viewBuilder()->setLayout('publico');

        $this->request->getSession()->delete('Auth.redirect');

        if ($this->request->is('post')) {

            $usuario = $this->Auth->identify();
            // pr($this->Users->validator('default'));die();

            if ($usuario) {
                $this->Auth->setUser($usuario);
                // debug(\Cake\Routing\Router::fullBaseUrl());   // ej: http://localhost/edpap
                // debug($this->request->getAttribute('webroot')); // ej: /edpap/
                // debug($this->Auth->redirectUrl());
                // die;
                return $this->redirect(['prefix' => 'admin',    'controller' => 'Users',    'action' => 'admin']);
                $this->Flash->success(__('El administrador ha iniciado sesión correctamente.'), ['escape' => false]);
            }

            $this->Flash->error(__('Nombre de usuario o contraseña incorrectos.'));
        }
    }


    public function logout(){
        $this->viewBuilder()->setLayout('publico');
        
        $this->Flash->success(__('La sesión se ha cerrado correctamente.'));
        return $this->redirect($this->Auth->logout());
     }


      public function admin(){

      // carga del layout para la accion
      $this->viewBuilder()->setLayout('privado');

      // carga de modelos de otros controllers
      $this->loadModel('Eventos');
      $this->loadModel('Noticias');
      $this->loadModel('Albumes');
      $this->loadModel('Videos');
      $this->loadModel('Porteros');
      $this->loadModel('Users');

      // consultas para contar numero total de porteros eventos y noticias
      $total_usuarios = $this->Users->find()->count();
      $total_eventos = $this->Eventos->find()->count();
      $total_noticias = $this->Noticias->find()->count();
      $total_albumes = $this->Albumes->find()->count();
      $total_videos = $this->Videos->find()->count();
      $total_porteros = $this->Porteros->find()->count();

      // paso de variables a la vista correspondiente
      $this->set('total_usuarios', $total_usuarios);
      $this->set('total_eventos', $total_eventos);
      $this->set('total_noticias', $total_noticias);
      $this->set('total_albumes', $total_albumes);
      $this->set('total_videos', $total_videos);
      $this->set('total_porteros', $total_porteros);

    }


}



 ?>
