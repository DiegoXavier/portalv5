<?php

namespace projeto\biblioteca\Models\Entities;

/**
 * 
 * @Entity
 * @Table(name="Contato")
 */
class Contato 
{
    /**
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer", name="Id")
     */
    public $id;
    
    /**
     * @Column(type="integer", nullable=true, name="email")
     */
    public $email;
    
    /**
     * @Column(type="string", nullable=true, name="nome")
     */
    public $nome;
    
    /**
     * @Column(type="integer", nullable=true, name="idade")
     */
    public $idade;
    

    public function getIDContato() 
    {
        return $this->id; 
    }
    
    public function getEmailContato()
    {
        return $this->titulo; 
    }
    
    public function getNomeContato()
    {
        return $this->nome; 
    }
    public function getIdadeContato($value='')
    {
        return $this->idade;
    }
}