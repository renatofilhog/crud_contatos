<?php $render('header'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <h1>Realizar aluguel</h1>
        <hr>
        <form class="cadastro user" method="POST">
            <div class="form-group tpequip">
                <span>Equipamento: </span>
                <select name="equipamento" class="selectTpequip">
                    <?php 
                        foreach($equipamentos as $value):
                    ?>
                    <option value="<?= $value['id']?>"><?= $value['descricao']?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group tpequip">
                <span>Pessoa: </span>
                <select name="pessoa" class="selectTpequip">
                    <?php 
                        foreach($pessoas as $value):
                    ?>
                    <option value="<?= $value['id']?>"><?= $value['nome']?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group datesDevolucao">
                <span>Data Devolução</span>
                <input required name="data_limite" type="date" class="form-control form-control-user"
                    placeholder="Insira a data de devolução">
                <span style="margin-left:20px">Hora Devolução</span>
                <input required name="hora_limite" type="time" class="form-control form-control-user"
                    placeholder="Hora da devolução (MAX)">
            </div>
            <input type="submit" class="btn btn-primary btn-user btn-block"
                value="Alugar equipamento">
            <hr>
        </form>
    </div>
    <!-- /.container-fluid -->
<?php $render('footer'); ?>
