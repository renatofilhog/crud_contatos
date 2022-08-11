<?php
namespace src\controllers;

use \core\Controller;
use \src\controllers\BuscaController;
use \src\models\Tipo_endereco;
use \src\models\Pessoa;

class CadastroController extends Controller {

    public function pessoa() {
        $this->render('cad_pessoa');
    }

    /**
     * Actions
     */
    
    public function pessoaAction(){
        $nome = filter_input(INPUT_POST, 'nome');
        $cpf = filter_input(INPUT_POST, 'cpf');
        $telefone = filter_input(INPUT_POST, 'telefone');
        $tpEndereco = filter_input(INPUT_POST, 'tipo_endereco');
        $cep = filter_input(INPUT_POST, 'cep');
        $logradouro = filter_input(INPUT_POST, 'logradouro');
        $numero = filter_input(INPUT_POST, 'numero');
        $bairro = filter_input(INPUT_POST, 'bairro');
        $complemento = filter_input(INPUT_POST, 'complemento');
        $estado = filter_input(INPUT_POST, 'estado');

        // Checa duplicidade
        $data = Pessoa::select()->where('cpf', $cpf)->execute();
        if(count($data) == 0){
            Pessoa::insert([
                'cpf' => $cpf,
                'nome' => $nome,
                'telefone' => $telefone,
                'cep' => $cep,
                'logradouro' => $logradouro,
                'numero' => $numero,
                'bairro' => $bairro,
                'complemento' => $complemento,
                'estado' => $estado
            ])->execute();
            $this->render('sucessoCadastro');
        } else {
            $this->render('faliedCadastro');
        }
    }

    /**
     * Update
     */
    public function pessoaUpdate($args) {
        $item = Pessoa::select()->where('id',$args)->execute();
        $data = [
            'pessoa'=>[
                'cpf' => $item[0]['cpf'],
                'nome' => $item[0]['nome'],
                'telefone' => $item[0]['telefone'],
                'cep' => $item[0]['cep'],
                'logradouro' => $item[0]['logradouro'],
                'numero' => $item[0]['numero'],
                'bairro' => $item[0]['bairro'],
                'complemento' => $item[0]['complemento'],
                'estado' => $item[0]['estado'],
                'id' => $item[0]['id']
            ]
        ];
        $this->render('update_pessoa',$data);
    }

    public function pessoaUpdateAction(){
        $nome = filter_input(INPUT_POST, 'nome');
        $cpf = filter_input(INPUT_POST, 'cpf');
        $telefone = filter_input(INPUT_POST, 'telefone');
        $tpEndereco = filter_input(INPUT_POST, 'tipo_endereco');
        $cep = filter_input(INPUT_POST, 'cep');
        $logradouro = filter_input(INPUT_POST, 'logradouro');
        $numero = filter_input(INPUT_POST, 'numero');
        $bairro = filter_input(INPUT_POST, 'bairro');
        $complemento = filter_input(INPUT_POST, 'complemento');
        $estado = filter_input(INPUT_POST, 'estado');
        $id = filter_input(INPUT_POST, 'id');
        $data = [
                'cpf' => $cpf,
                'nome' => $nome,
                'telefone' => $telefone,
                'cep' => $cep,
                'logradouro' => $logradouro,
                'numero' => $numero,
                'bairro' => $bairro,
                'complemento' => $complemento,
                'estado' => $estado
        ];


        Pessoa::update()
            ->set('nome',$nome)
            ->set('cpf',$cpf)
            ->set('telefone',$telefone)
            ->set('cep',$cep)
            ->set('logradouro',$logradouro)
            ->set('numero',$numero)
            ->set('bairro',$bairro)
            ->set('complemento',$complemento)
            ->set('estado',$estado)
            ->where('id', $id)->execute();
        $obj = new BuscaController();
        $obj->pessoa();
    }

    /**
     * Delete
     */
    public function pessoaDelete($args) {
        Pessoa::delete()->where('id', $args)->execute();
        $obj = new BuscaController();
        $obj->pessoa();
    }

    public function pessoaDeleteAction(){

    }
}