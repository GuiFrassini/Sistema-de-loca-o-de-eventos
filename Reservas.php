<?php

class Reservas{
    private $id;
    private $nome;
    private $anuncio;
    private $agenda;
    private $valor;
    private $contrato;
    private $formaPagamento;
    private $status;

    public function __construct($id, $nome, $anuncio, $agenda, $valor, $contrato, $formaPagamento, $status){
        $this->id = $id;
        $this->nome = $nome;
        $this->anuncio = $anuncio;
        $this->agenda = $agenda;
        $this->valor = $valor;
        $this->contrato = $contrato;
        $this->formaPagamento = $formaPagamento;
        $this->status = $status;

    }

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getAnuncio(){
        return $this->anuncio;
    }
    public function setAnuncio($anuncio){
        $this->anuncio = $anuncio;
    }

    public function getValor(){
        return $this->valor;
    }
    public function setValor($valor){
        $this->valor = $valor;
    }

    public function getContrato(){
        return $this->contrato;
    }
    public function setContrato($contrato){
        $this->contrato = $contrato;
    }

    public function getFormaPagamento(){
        return $this->formaPagamento;
    }
    public function setFormaPagamento($formaPagamento){
        $this->formaPagamento = $formapagamento;
    }

    public function getStatus(){
        return $this->status;
    }
    public function setStatus($status){
        $this->status = $status;
    }
}
