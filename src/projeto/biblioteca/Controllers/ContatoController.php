<?php
namespace projeto\biblioteca\Controllers;

use Silex\Application;

class ContatoController 
{
    private $app;
    public function __construct(Application $app) {
        $this->app=$app;
    }
    
    public function getContato()
    {        
        return $this->app['twig']->render('conteudo/contato.twig');
    }
    public function setContato($dados)
    {        
        print_r( $dados->get('nomePessoas') );
        die;
    }
}