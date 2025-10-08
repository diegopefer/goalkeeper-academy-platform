<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 */

use Cake\Http\Middleware\CsrfProtectionMiddleware;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {
    // Register scoped middleware for in scopes.
    $routes->registerMiddleware('csrf', new CsrfProtectionMiddleware([
        'httpOnly' => true
    ]));


    $routes->applyMiddleware('csrf');


    
    $routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);


    $routes->fallbacks(DashedRoute::class);
});


//***RUTAS CON PREFIX ADMIN***/


Router::prefix('admin', function (RouteBuilder $routes){
        

        // página principal del admin (dashboard)
        $routes->connect('/', ['controller' => 'Users', 'action' => 'admin']);

        // login en /admin/login
        $routes->connect('/login', ['controller' => 'Users', 'action' => 'login']);

        // CRUD personalizados
        $routes->connect('/usuarios', ['controller' => 'Users','action' => 'listar']);
        $routes->connect('/eventos', ['controller' => 'Eventos','action' => 'listar']);
        $routes->connect('/noticias', ['controller' => 'Noticias','action' => 'listar']);
        $routes->connect('/porteros', ['controller' => 'Porteros','action' => 'listar']);
        $routes->connect('/albumes', ['controller' => 'Albumes','action' => 'listar']);
        $routes->connect('/videos', ['controller' => 'Videos','action' => 'listar']);
        
        $routes->connect('/:controller/añadir', ['action' => 'add']);
        $routes->connect('/login', ['controller' => 'Users', 'action' => 'login']);
        $routes->connect('/:controller/eliminar/:id', ['controller' => 'Users', 'action' => 'delete'])
                ->setPatterns(['id' =>'\d+'])
                ->setPass(['id']);

        $routes->connect('/:controller/editar/:slug', ['action' => 'edit'])
                // ->setPatterns(['slug' =>'[0-9a-z\-]+'])
                ->setPass(['slug']);
        $routes->connect('/:controller/ver/:slug', ['action' => 'verPrivado'])
                ->setPass(['slug']);


        $routes->fallbacks(DashedRoute::class);
});


// RUTAS DE ALCANCE

Router::scope('/', function (RouteBuilder $routes){
    $routes->connect('/', ['controller' => 'Noticias', 'action' => 'index']);
    $routes->connect('/:controller', ['action' => 'index']);
    $routes->connect('/eventos/:slug', ['controller' => 'Eventos','action' => 'ver'])
            ->setPass(['slug']);


    $routes->connect('/noticias', ['controller' => 'Noticias','action' => 'verTodas']);
    $routes->connect('/noticias/:slug', ['controller' => 'Noticias','action' => 'ver'])
            ->setPass(['slug']);

    $routes->connect('/porteros/:slug', ['controller' => 'Porteros','action' => 'ver'])
            ->setPass(['slug']);

    $routes->connect('/galeria-fotografica', ['controller'=>'Albumes','action' => 'index']);
    $routes->connect('/videoteca', ['controller'=>'Videos','action' => 'index']);


    $routes->connect('/nuestra-escuela', ['controller' => 'Pages', 'action' => 'nuestraEscuela']);
    $routes->connect('/metodologia', ['controller' => 'Pages', 'action' => 'metodologia']);
    $routes->connect('/objetivos', ['controller' => 'Pages', 'action' => 'objetivos']);
    $routes->connect('/entrenamientos', ['controller' => 'Pages', 'action' => 'entrenamientos']);
    $routes->connect('/equipo-trabajo', ['controller' => 'Pages', 'action' => 'equipoTrabajo']);
    $routes->connect('/localizacion', ['controller' => 'Pages', 'action' => 'localizacion']);
    $routes->connect('/horarios-tarifas', ['controller' => 'Pages', 'action' => 'horariosTarifas']);
    $routes->connect('/contacto', ['controller' => 'Pages', 'action' => 'contacto']);

     $routes->fallbacks(DashedRoute::class);
});
