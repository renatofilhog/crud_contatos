<?php $render('header'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <h1>Devolver equipamento</h1>
        <hr>
        <form class="cadastro user" method="POST">
            <div class="form-group tpequip">
                <span>Selecione o equipamento: </span>
                <select id="selectEquipamento" name="equipamento" class="selectTpequip">
                    <?php 
                        foreach($equipamentos as $value):
                    ?>
                    <option value="<?= $value['id']?>"><?= $value['descricao']?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group tpequip">
                <span>Serial/Identificador: </span>
                <input type="text" class="selectTpequip"
                    id="serialEquip" disabled>
            </div>
            
            <input type="submit" class="btn btn-primary btn-user btn-block"
                value="Devolver equipamento">
            <hr>
        </form>
    </div>
    <!-- /.container-fluid -->
    
<script src='/allure-rent/src/views/assets/js/devolucao.js'></script>
<?php $render('footer'); ?>