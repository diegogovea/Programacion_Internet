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
    <script src="jquery-3.3.1.min.js"></script>
    <script>
        function enviarAjax() {
            var numero = $('#numero').val();
            if (numero && numero >0) {
                //$('#mensaje').show();
                //$('#mensaje').html('Existe un numero y es un Numero mayor a cero');
                //setTimeout("$('#mensaje').html(''); $('#mensaje').hide();",5000);
                $.ajax({
                    url:'respuesta.php', 
                    type: 'post',
                    dataType: 'text',
                    data: 'numero='+numero,
                    success: function(res){
                        console.log(res);
                        $('#mensaje').show();
                        if(res==1){
                            $('#mensaje').html('Aprobaste');
                        }else{
                            $('#mensaje').html('Reprobaste');
                        }
                        setTimeout("$('#mensaje').html(''); $('#mensaje').hide();",5000);

                    },error:function(){
                        alert('Error archivo no encontrado...');
                    }
                });
            }else{
                $('#mensaje').show();
                $('#mensaje').html('Faltan campos por llenar');
                setTimeout("$('#mensaje').html(''); $('#mensaje').hide();",5000);
            }
        }

    </script>
</head>
<body>
    <input type="text" name="numero" id="numero" /><br>
    <a href="javascript:void(0);" onclick="enviarAjax();">
        Enviar con Ajax
    </a><br>
    <div id="mensaje"></div>
</body>
</html>
