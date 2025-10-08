<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

use Cake\I18n\Time;
use Cake\Database\Type;

// Time::$defaultLocale = 'es-ES';
// Time::setToStringFormat('dd/MM/yyyy');
// Type::build('datetime')->useLocaleParser();

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller{
    
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Csrf');
        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');

        $this ->loadComponent ('Paginator');

        $this->loadComponent('Auth',[
              'authenticate' => [
                  'Form' => [
                      'fields' => [
                            'username' => 'username', 
                            'password' => 'password'],
                    ],
              ],
        'loginAction' => [
        'prefix' => 'admin',
        'controller' => 'Users',
        'action' => 'login'
    ],
    'loginRedirect' => [
        'prefix' => 'admin',
        'controller' => 'Users',
        'action' => 'admin'
    ],
    'logoutRedirect' => [
        'controller' => 'Users',
        'action' => 'login'
    ],
    'unauthorizedRedirect' => $this->referer(),
                'authError' => 'No tienes autorización para acceder a esta ubicación'
                    ]);

        //$this->loadComponent('Security');
    }

    // no se requiere login para las siguientes acciones
     public function beforeFilter(Event $event){
        
        $this->Auth->allow(['login','index', 'ver', 'verTodas', 'nuestraEscuela', 'metodologia', 'objetivos', 'entrenamientos', 'equipoTrabajo', 'localizacion', 'horariosTarifas' ,'contacto']);

    }

    // para saber si el usuario tiene permisos para acceder 
    public function isAuthorized($user){

      // Admininistrador puede acceder a cualquier acción
      if (isset($user['username'])) {
          return true;
      }

     //denegado por defecto
      return false;
    }



    // FUNCIONES PRIVADAS PARA EVITAR DUPLICIDAD DE CODIGO

    // funcion para subir archivo al servidor
    public function subirArchivo($archivo,$ruta_archivo){

        // ruta temporal de origen
        $origen = $archivo['tmp_name'];
        // ruta de destino (ruta+nombre archivo)
        $destino = $ruta_archivo . $archivo['name'];

        //existencia o no de la carpeta que almacenará el archivo
        if(!file_exists($ruta_archivo)){

          // creacion de la ruta de manera recursiva
           mkdir($ruta_archivo, 0777, true);
           // movimiento del archivo de la ruta temporal a la ruta final donde se almacena
           move_uploaded_file($origen,$destino);

        }else{
            move_uploaded_file($origen,$destino);
        }

    }

    // funcion para modificar el archivo del servidor donde se aloja
    public function modificarArchivo($archivo, $ruta_archivo){

      // ruta temporal de origen
      $origen = $archivo['tmp_name'];
      // ruta de destino (ruta+nombre archivo)
      $destino = $ruta_archivo . $archivo['name'];

      // borrado de archivo almancenado en servidor
      //busqueda de todos los archivos que hay dentro de la carpeta. Como devuelve un array para unlinkear o borrar el archivo debemos acceder a la primera celda del array con [0]
       $archivo_servidor = glob($ruta_archivo . '*');
       unlink($archivo_servidor[0]);
       
       // movimiento del archivo de la ruta temporal a la ruta final donde se almacena
       move_uploaded_file($origen, $destino);

    }


    /*funcion para eliminar recursivamente carpetas, subcarpetas y archivos */
    public static function borrarDir($dirPath) {

      if (! is_dir($dirPath)) {
          throw new InvalidArgumentException("Debe ser un directorio");
      }

      if (substr($dirPath, strlen($dirPath) - 1, 1) != '\\') {
          $dirPath .= '\\';
      }
      $files = glob($dirPath . '*', GLOB_MARK);

      foreach ($files as $file) {

          if (is_dir($file)) {
              self::borrarDir($file);
          } else {
              unlink($file);
          }
      }
      rmdir($dirPath);
    }

}
