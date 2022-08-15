<body>
    <center>
    <h1>hello, world.</h1>
    <p>vou aprender a manipular <strong>DOM</strong> agora</p>
    <div>uma dive isso aq!</div>
    <input id='input' type="text" name="p1" /></br>
    <input type="text" name="p2" /><br>
    <button type="submit" onClick="t()">button</button>
    <script>
        function t(e) {
            e.preventDefault();
            const variavel = document.getElementsByTagName('input')[0].value;
            document.write(variavel);
        }
    </script>
    </center>
</body>
