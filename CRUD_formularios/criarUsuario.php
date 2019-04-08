<form action="../inserir/inserirMusica.php" method="POST" class="col s12">
    <div class="row">
        <div class="col s3"></div>

        <div class="col s6">
            <h5 class="titulo_criar">Preencha o formulário para inserir um usuario:</h5>

            <div class="input-field">
                <input type="text" id="nome" name="nome" data-length="40" required>
                <label for="nome">Nome</label>
            </div>
            <br>
            <div class="input-field">
                <input type="text" id="nickname" name="nickname" data-length="40" required>
                <label for="nickname">Nickname</label>
            </div>
            <br>
            <div class="input-field">
                <input type="text" id="email" name="email" data-length="40" required>
                <label for="email">Email</label>
            </div>
            <br>
            <div class="input-field">
                <input type="text" id="senha" name="senha" data-length="20" required>
                <label for="senha">Senha</label>
            </div>
            <br>

            <input class="btn waves-effect waves-light btn_criar" type="submit" id="btnSubmit" name="botao" value="salvar">
        </div>

        <div class="col s3"></div>
    </div>
</form>