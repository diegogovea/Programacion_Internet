<html>
<head>
    <title>Ajax / Jquery</title>
    <style>
        #mensaje {
            color: #F00;
            font-size: 16px;
            background: #CCC;
            text-align: center;
            width: 200px;
            height: 25px;
            line-height: 25px;
            padding: 5px;
            margin-top: 10px;
            border-radius: 4px;
            display: none;
        }
    </style>
    <script></script>
</head>
<body>
    <input type="text" name="numero" id="numero" /><br>
    <a href="javascript:void(0);" onclick="enviarAjax();">
        Enviar con Ajax
    </a><br>
    <div id="mensaje"></div>
</body>
</html>
