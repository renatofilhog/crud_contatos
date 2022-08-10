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
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
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
