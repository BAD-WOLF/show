<html>
<head>
<title>⚠️ PAINEL ADMINISTRATIVO DO SORTEIO ⚠️</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="./index.css">
</head>
<body>
<center>
<div id="div1">
<center>
<h1>PAINEL ADMIN</h1>
<form action="" enctype="application/x-www-form-urlencoded" method="POST" id="f1">
<input form="f1" type="number" name="p1" value="<?=@$_POST["p1"]?>" placeholder="quantidade ..."/></br>
<input type="submit" form="f1">
</form>
<form action="" enctype="application/x-www-form-urlencoded" method="POST" id="f2">
<?php
if(!empty($_POST["p1"])){
    $quant=$_POST["p1"];
    for($i=0; $i<$quant; ++$i){
?>
    <input type="text" name="i<?=$i?>" value="<?=@$_POST["i$i"]?>" form="f2"/></br>
<?
    }
    echo '<input type="submit" form="f2"/>';
?>
</form>
<?
    print_r($_POST);
    $array=[];
    for($j=0; $j<$i; ++$j){
        if(!empty($_POST["i$j"])){
            $array[]=$_POST["i$j"];
            print_r($_POST["i$j"]);
        }
    print_r($_POST);
    }
    $file=fopen("list.txt", "a+");
    foreach($array as $key => $iten){
        fwrite($file, $iten[$key]);
        print $iten[$key];
    }
    fclose($file);
    print_r($array);
}
?>
</center>
</div>
</center>
</body>
</html>
