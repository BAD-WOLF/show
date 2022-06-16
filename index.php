
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!--<link rel="stylesheet" href="index.css">-->
    </head>

    <body>
        <h1>Banco Silva</h1>
        <form action="" enctype="application/x-www-form-urlencoded" method="POST">
            <fieldset>
                <legend>tipo da conta</legend>
                <label>Nome do cliente: <input type="text" name="nome" placeholder="..." id="form1"/></label></br>
                <label>corrente: <input type="checkbox" name="p1" value="cc"/></label>
                <label>poupança: <input type="checkbox" name="p2" value="cp"/></label>
                <input type="submit"/>
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
                    public static function main(){
                        if((!empty($_POST["p1"]) || !empty($_POST["p2"])) && !empty($_POST["nome"])){
                            $nome=$_POST["nome"];
                            @$p1=$_POST["p1"];
                            @$p2=$_POST["p2"];
                            if(!empty($p1) && empty($p2)) 
                                parent::abrirConta("cc", $nome);
                            elseif(empty($p1) && !empty($p2))
                                parent::abrirConta("cp", $nome);
                            elseif(!empty($p1) && !empty($p2))
                                print "<p id='error'>marque apenas um!!</p>";
                            if(parent::getAttributes()["stts"])
                                print "<p id='200'>Conta criada com sucesso!!</p>"; 
                        }else{
                            ?>
                                <fieldset>
                                    <legend id='erro'>Sei nem que erro foi que deu</legend>
                                        <form action="" enctype="application/x-www-form-urlencoded" method="POST" id="form2">
                                            <input type="text" name="error" placeholder="..." form="form2"/>
                                            <input type="submit"/>
                                        </form>
                                </fieldset>
                            <?
                        }
                    }
                    #echo "<pre>";
                    #print_r(Banco::stts);
                }
                Output::main();
            ?>
        </form>
    </body>
</html>

