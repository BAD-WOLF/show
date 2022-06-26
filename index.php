
<!DOCTYPE html>

<html lang="en">
    <head
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="../../StdStyle/index.css"/>
    </head>

    <body>
        <h1 id="ok">Banco Silva</h1>
        <form action="" enctype="application/x-www-form-urlencoded" method="POST">
            <fieldset>
                <legend>tipo da conta</legend>
                <label>Nome do cliente: <input type="text" name="nome" placeholder="..." id="form1"/></label></br>
                <label>corrente: <input type="checkbox" name="p1" value="cc"/></label>
                <label>poupança: <input type="checkbox" name="p2" value="cp"/></label>
                <input type="submit" name="s"/>
            </fieldset>
        </form>
            <?php
                require_once __DIR__.DIRECTORY_SEPARATOR."model.php";
                class Output extends Banco {
                    public function is_true(){
                        $a=func_get_args();
                        $b=func_num_args();
                        for($i=0; $i<$b; $i++){
                            $array_true=!empty($a[$i]);
                        }
                        return count($array_true)==$b;
                    }
                    public function main(){
                        if((!empty($_POST["p1"]) || !empty($_POST["p2"])) && !empty($_POST["nome"])){
                            $nome=$_POST["nome"];
                            @$p1=$_POST["p1"];
                            @$p2=$_POST["p2"];
                            if(!empty($p1) && empty($p2))
                                parent::abrirConta("cc", $nome);
                            elseif(empty($p1) && !empty($p2))
                                parent::abrirConta("cp", $nome);
                            elseif(!empty($p1) && !empty($p2))
                                echo "<p id='err'>marque apenas um!!</p>";
                            if(parent::getAttributes()["stts"] == true)
                                echo "<p id='ok'>Conta criada com sucesso!!</p>";
                        }else if((empty($_POST["p1"]) && empty($_POST["p2"])) || (empty($_POST["p1"]) || empty($_POST["p2"]))){
                            if(!empty($_POST["s"])){
                                ?>
                                    <p id="err">algum parâmetro não foi passado!!</p>
                                <?
                            }
                        }else{
                            ?>
                                <fieldset>
                                    <legend id='err'>Sei nem que erro foi que deu</legend>
                                        <form action="" enctype="application/x-www-form-urlencoded" method="POST" id="form2">
                                            <input type="text" name="errr" placeholder="..." form="form2"/>
                                            <input type="submit"/>
                                        </form>
                                </fieldset>
                            <?
                        }
                    }
                }
                $obj1 = new Output();
                $obj1->main();
                echo "<pre>";
                $obj2 = new Banco();
                print_r($obj2);
            ?>
        </form>
    </body>
</html>

