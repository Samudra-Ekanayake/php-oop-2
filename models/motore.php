<?php

class Motore extends Prodotto {

    public $cilindrata;
    public $cavalli;
    public $potenza;

    public function __construct($nome, $modello, $segmento, $cilindrata, $cavalli, $potenza )
    {
        $this->nome = $nome;
        $this->modello = $modello;
        $this->segmento = $segmento;
        $this->cilindrata = $cilindrata;
        $this->cavalli = $cavalli;
        $this->potenza = $potenza;
    }
}



?>