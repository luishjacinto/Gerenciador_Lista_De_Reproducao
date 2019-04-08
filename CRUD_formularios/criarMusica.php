<form action="../inserir/inserirMusica.php" method="POST" class="col s12">
    <div class="row">
        <div class="col s3"></div>

        <div class="col s6">
            <h5 class="titulo_criar">Preencha o formulário para inserir uma musica:</h5>

            <div class="input-field">
                <input type="text" id="nome" name="nome" data-length="40" required>
                <label for="nome">Nome</label>
            </div>
            <br>
            <div class="input-field">
                <input type="number" id="duracao" name="duracao" required>
                <label for="duracao">Duracao</label>
            </div>
            <br>
            <div class="input-field">
                <input type="text" id="autor" name="autor" data-length="40" required>
                <label for="autor">Nome</label>
            </div>
            <br>
            <div class="input-field">
                <input type="text" id="link" name="link" data-length="100" required>
                <label for="link">Link</label>
            </div>
            <br>

            <input class="btn waves-effect btn_criar" type="submit" id="btnSubmit" name="botao" value="salvar">
        </div>

        <div class="col s3"></div>
    </div>
</form>