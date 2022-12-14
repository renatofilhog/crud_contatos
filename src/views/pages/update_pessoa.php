<?php $render('header'); ?>
    <!-- Begin Page Content -->

    <div class="container-fluid">
        <h1>Update de Pessoa</h1>
        <hr>
        <form class="cadastro user" method="POST" action="<?=$base;?>/cadastro/pessoaUpdate">
            <div class="form-group">
                <input required name="nome" type="text" class="form-control form-control-user"
                    placeholder="Insira o nome" value="<?=$pessoa['nome']?>" required>
            </div>

            <div class="form-group">
                <input required name="cpf" id="cpf-cadPessoa" type="text" class="form-control form-control-user"
                    placeholder="Insira o CPF" value="<?=$pessoa['cpf']?>" required>
            </div>

            <div class="form-group">
                <input required name="telefone" id="telefone-cadPessoa" type="text" class="form-control form-control-user"
                    placeholder="Insira o telefone" value="<?=$pessoa['telefone']?>" required>
            </div>

            <div class="form-group">
                <input required name="cep" id="cep-cadPessoa" type="text" class="form-control form-control-user"
                    placeholder="Insira o CEP" value="<?=$pessoa['cep']?>" required>
            </div>
            <div class="form-group">
                <input required name="logradouro" type="text" class="form-control form-control-user"
                    placeholder="Insira o Logradouro" value="<?=$pessoa['logradouro']?>" required>
            </div>
            <div class="form-group">
                <input required name="numero" size='4' type="text" class="form-control form-control-user"
                    placeholder="Insira o numero da residencia" value="<?=$pessoa['numero']?>" required>
            </div>
            <div class="form-group">
                <input required name="bairro" type="text" class="form-control form-control-user"
                    placeholder="Insira o bairro" value="<?=$pessoa['bairro']?>" required>
            </div>
            <div class="form-group">
                <input required name="complemento" type="text" class="form-control form-control-user"
                    placeholder="Insira o complemento" value="<?=$pessoa['complemento']?>" required>
            </div>
            <input id="estadoUpdate" type="text" value="<?= $pessoa['estado']?>" hidden>
            <input name='id' type="text" value="<?= $pessoa['id']?>" hidden>
            <div class="form-group setor">
                <span>Estado: </span>
                <select name="estado" class="selectSetor">
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amap??</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Cear??</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Esp??rito Santo</option>
                    <option value="GO">Goi??s</option>
                    <option value="MA">Maranh??o</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Par??</option>
                    <option value="PB">Para??ba</option>
                    <option value="PR">Paran??</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piau??</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rond??nia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">S??o Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                    <option value="EX">Estrangeiro</option>
                </select>
            </div>                     
            <input type="submit" class="btn btn-primary btn-user btn-block"
                value="Atualizar" />
            <hr>
        </form>
    </div>
    <!-- /.container-fluid -->
    <script>
        let valueEstado = document.querySelector("#estadoUpdate").value;
        document.querySelector(`option[value=${valueEstado}]`).selected = true;
    </script>
<?php $render('footer'); ?>
