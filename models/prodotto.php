<?php
class prodotto {

    public $nome;
    public $modello;
    public $segmento;

    function __construct($nome, $modello, $segmento )
    {
        $this->nome = $nome;
        $this->modello = $modello;
        $this->segmento = $segmento;
    }

}

?>