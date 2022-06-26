<?php
session_start(["value" => 1]);
class Banco{
    public     int     $numConta;
    protected  string  $tipo;
    private    string  $dono;
    private    int     $saldo;
    private    int     $stts;
    public function __construct(){
    }
    public function setAttributes(/* $tipo, $dono, $saldo */){
        $attributes=func_get_args();
        $c=func_num_args();
        switch($c){
            case 0: $this->tipo  = $attributes[0]; break;
            case 1: $this->dono  = $attributes[1]; break;
            case 2: $this->saldo = $attributes[2]; break;
        }
    }
    public function getAttributes(){
        return [
            "numConta" => $this->numConta,
            "tipo" => $this->tipo,
            "dono" => $this->dono,
            "saldo" => $this->saldo,
            "stts" => $this->stts
        ];
    }
    public function abrirConta($tipo, $dono){
        if($this->stts!=True && in_array($tipo, ["cc", "cp"])){
            # cc -> conta corrente
            # cp -> conta popança
            $this->dono=$dono;
            $this->tipo=$tipo;
            $this->stts=True;
            $this->numConta=$_SESSION["valor"]++;
            if($this->tipo=="cc")
                $this->saldo=50;
            elseif($this->tipo=="cp")
                $this->salido=150;
        }
    }
    public function fecharConta(){
        $br=PHP_EOL;
        $run=php_sapi_name();
        $err=False;
        if($this->stts!=True){ $err=True;
            if($run!="cli") print "<p id='err'>conta não existente</p>";
            else print $br."conta não existente$br";
        }
        if($this->saldo<0){ $err=True;
            if($run!="cli"){
                print "<p id='err'>conta não fechada: você está devendo $this->saldo</p>";
            }else "conta não fechada: você está devendo $this->saldo$br";
        }else if($this->saldo>0){ $err=True;
            if($run!="cli"){
                print "<p id='err'>conta não fechada: você ainda tem $this->saldo</p>";
            }else print "conta não fechada: você ainda tem $this->saldo$br";
        }
        if($err){
            $this->stts=False;
            if($run!="cli"){
                print "<p id='err'>conta deletada com sucesso</p>";
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
                $this->saldo-=$valor;
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
