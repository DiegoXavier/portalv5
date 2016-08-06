<?php

namespace projeto\biblioteca\Models\Entities;

/**
 * 
 * @Entity
 * @Table(name="Pagina")
 */
class Pagina 
{
    /**
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer", name="id")
     */
    public $id;
    
    /**
     * @Column(type="string", nullable=false, name="titulo")
     */
    public $titulo;
    
    /**
     * @Column(type="text", nullable=false, name="corpo")
     */
    public $corpo;
    
    /**
     * @Column(type="interger", nullable=false, name="posicao")
     */
    public $posicao;
    
    /**
     * @Column(type="datetime", nullable=false, name="DataHoraUpdate")
     */
    public $dataHoraUpdate;
    
    public function getIDPagina() 
    {
        return $this->id; 
    }
    
    public function getTituloPagina()
    {
        return $this->titulo; 
    }
    
    public function getPosicaoPagina()
    {
        return $this->posicao; 
    }
    
    public function getDataHoraUpdate()
    {
        return $this->dataHoraUpdate;
    }
}