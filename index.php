<!DOCTYPE html>
<html>
<head>
    <?php include("head.php"); ?>
</head>
<body>
    <div id="header">
 	    <?php include("header.php"); ?>
    </div>
    <br>
    <div class="row">
        <div class="col s4">
            <div class="menu">
                <span class="tituloMenu">Usuários</span>
                <br>
                <br>
                <a id="btnCadastroUsuario" style="color:black;" href="/CRUD_paginas/cadastrarUsuario.php "><button class="btn waves-effect bttMenu">Cadastrar</button></a>
                <br>
                <button class="btn waves-effect bttMenu">Gerenciar</button>
                <br>
                <br>
                <br>
                <br>
                <span>Usuários cadastrados:</span>
                <span id="contadorUsuarios">0</span>
            </div>
        </div>
        
        <div class="col s4">
            <div class="menu">
                <span class="tituloMenu">Musicas</span>
                <br>
                <br>
                <a id="btnCadastroMusica" style="color:black;" href="/CRUD_paginas/cadastrarMusica.php "><button class="btn waves-effect bttMenu">Cadastrar</button></a>
                <br>
                <button class="btn waves-effect bttMenu">Gerenciar</button>
                <br>
                <br>
                <br>
                <br>
                <span>Musicas cadastradas:</span>
                <span id="contadorMusicas">0</span>
            </div>
        </div>

        <div class="col s4">
            <div class="menu">
                <span class="tituloMenu">Listas de Reprodução</span>
                <br>
                <br>
                <button class="btn waves-effect bttMenu">Cadastrar</button>
                <br>
                <button class="btn waves-effect bttMenu">Gerenciar</button>
                <br>
                <br>
                <br>
                <br>
                <span>Listas de reprodução cadastradas:</span>
                <span id="contadorListas">0</span>
            </div>
        </div>
    </div>
</body>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>-->
<script src="functions.js"></script>
</html>