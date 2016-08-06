<?php

namespace projeto\biblioteca\Models\Contato;

class Contato
{
    
    protected $table = 'Contato';
    
    public function getContatos($app, $id = 1)
    {        
        return $app['entityManager']->getRepository('projeto\biblioteca\Models\Entities\Contato')->findOneBy(array('Id' => $id));
    }
    
    public function setContato($app, $data = [])
    {
        return $app['db']->insert($this->table, $data);
    }
}