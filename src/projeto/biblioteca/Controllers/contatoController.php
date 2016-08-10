<?php

namespace projeto\biblioteca\Controllers;

use Silex\Application;
use Silex\ControllerProviderInterface;
use projeto\biblioteca\Models\Pagina\Contato;

class frontController  implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];
        
        $controllers->get('/', function (Application $app) {
            return $app['twig']->render('conteudo/contato.twig');
        });
        
        $controllers->get('/Contato/{id}', function (Application $app, $id = 1) {
            $db = new Contato;
            $data = $db->getContatos($app, $id);
            
            if(count($data) > 0) {
                return $app->json($data, 200);
            }
            
            return $app->json(['result' => false], 404);
        });
        
        return $controllers;
    }
}