<?php $render('header'); ?>
<div class="container-fluid">
        <!-- Begin Page Content -->
        
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Consulta de contatos</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>CPF</th>
                                <th>Nome</th>
                                <th>Telefone</th>
                                <th>CEP</th>
                                <th>Bairro</th>
                                <th>Estado</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>CPF</th>
                                <th>Nome</th>
                                <th>Telefone</th>
                                <th>CEP</th>
                                <th>Bairro</th>
                                <th>Estado</th>
                                <th>Ações</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php foreach($contatos as $contato):?>
                                <tr>
                                    <td><?=$contato['cpf']?></td>
                                    <td><?=$contato['nome']?></td>
                                    <td><?=$contato['telefone']?></td>
                                    <td><?=$contato['cep']?></td>
                                    <td><?=$contato['bairro']?></td>    
                                    <td><?=$contato['estado']?></td>
                                    <td>
                                        <a href="<?=$base;?>/cadastro/pessoaUpdate/<?= $contato['id'] ?>">Editar</a> 
                                        <a href="<?=$base;?>/cadastro/pessoaDelete/<?= $contato['id'] ?>">Excluir</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
    
<?php $render('footer'); ?>