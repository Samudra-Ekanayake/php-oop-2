<?php
class Prodotto
{

    public $nome;
    public $modello;
    public $segmento;

    public function __construct($nome, $modello, $segmento)
    {
        $this->nome = $nome;
        $this->modello = $modello;
        $this->segmento = $segmento;
    }

    /* public function __toString() {
        return $this->nome . "nome" . $this->modello . " (Segmento: " . $this->segmento . ")";
    } */

    public function getDescrizione()
    {
        return "Marca: $this->nome " . "Modello:  $this->modello " . "segmento:  $this->segmento";
    }
}
