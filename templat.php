<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>minha primeira aula de js</title>
        <!--<link rel="stylesheet" href="index.css">-->
        <style>
            p {position: center;}
            body {background-color: gray;}
        </style>
    </head>

    <body>
        <center>
            <h1>hello, world.</h1>
            <p >vou aprender a manipular <strong>DOM</strong> agora</p>
            <div>uma dive isso aq!</div>
            <input id='input' type="text" name="p1"/></br>
            <input type="text" name="p2"/><br>
            <button onClick="t()">button</button></br>
            <script>
                function t(){
                    let input = document.getElementsByTagName("input")[0];
                    document.write(input.value);
                }
                let p = document.getElementsByTagName("p")[0];
                document.write(p.value);
            </script>
        </center>
    </body>
</html>
