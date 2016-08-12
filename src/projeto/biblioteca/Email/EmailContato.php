<?php
namespace projeto\biblioteca\Email;
use projeto\biblioteca\Email\EmailInterface\InterfaceEmail;
use projeto\biblioteca\Email\EmailContato;

class EmailContato extends Email implements InterfaceEmail
{
    private $app;
    function __construct(Aplication $app)
    {
    $this->app=$app;     
    }
    public function enviarEmail(Aplication  $app, $dados){
     $enviar= New EmailContato;
     $this->app['mail']['swiftmailer.options']=$this->config;       
 /*    ver no site
  * http://silex.sensiolabs.org/doc/providers/swiftmailer.html
  
     $this->app['mail']->(\Swift_Message::newInstance()->setSubject('contato'.$dados->get('nome') )->setFrom(array('noreply@yoursite.com'))->setTo(array($dados->get('email')))->setBody($dados->get('msg')) );
 */    
     return $enviar->enviarEmail($dados);  
    }
}
