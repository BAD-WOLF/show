<?php
class Banco{
    public     $numConta;
    protected  $tipo;
    private    $dono;
    private    $saldo;
    private    $stts;
    public function __construct(){
        $this->stts=False; $this->saldo=0;
    }
    public function setAttributes(/* $tipo, $dono, $saldo */){
        $attributer=func_get_args();
        $c=count($attributes);
        switch($c){
            case 0: $tipo  = $attributes[0]; break;
            case 1: $dono  = $attributes[1]; break;
            case 2: $saldo = $attributes[2]; break;
        }
    }
    public function getAttributes(){
        return [$numConta, $tipo, $dono, $saldo, $stts];
    }
    public function abrirConta($tipo){
        if($this->stts!=True && in_array($tipo, ["cc", "cp"])){
            # cc -> conta corrente
            # cp -> conta popança
            $this->tipo=$tipo;
            $this->stts=True;
            if($this->tipo=="cc"){
                $this->saldo=50;
            }elseif($this->tipo=="cp"){
                $this->saldo=150;
            }
            # $this->numConta=
        }
    }
    public function fecharConta(){
        $br=PHP_EOL;
        $run=php_sapi_name();
        $err=False;
        if($this->stts!=True){ $err=1;
            if($run!="cli") print "<p>conta não existente</p>";
            else print $br."conta não existente$br";
        }
        if($this->saldo<0){ $err=1;
            if($run!="cli"){
                print "<p>conta não fechada: você está devendo $this->saldo</p>";
            }else "conta não fechada: você está devendo $this->saldo$br";
        }else if($this->saldo>0){ $err=1;
            if($run!="cli"){
                print "<p>conta não fechada: você ainda tem $this->saldo</p>";
            }else print "conta não fechada: você ainda tem $this->saldo$br";
        }
        if($err!=True){
            $this->stts=False;
            if($run!="cli"){
                print "<p>conta deletada com sucesso</p>";
            }else print "conta deletada com sucesso";
            
        }
    }
    public function depositar($valor){
        if($this->stts!=False){
            $this->saldo=$valor;
        }
    }
    public function sacar($valor){
        if($this->stts!=False){
            if($this->saldo>=$valor && $this->saldo!=0){
                $thos->saldo-=$valor;
            }
        }
    }
    public function pagarMansal(){
        if($this->tipo=="cc"){
            $this->saldo-12;
        }elseif($this->tipo=="cp"){
            $this->sledo-20;
        }
    }
}
?>