<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Pessoa;

class BuscaController extends Controller {
    
    public function pessoa(){
        $pessoas = Pessoa::select()->execute();
        $data = [];
        foreach($pessoas as $item){
            $data[] = [
                'cpf' => $item['cpf'],
                'nome' => $item['nome'],
                'telefone' => $item['telefone'],
                'cep' => $item['cep'],
                'bairro' => $item['bairro'],
                'estado' => $item['estado'],
                'id' => $item['id']
            ];
        }
        
        $this->render('pessoaView',['contatos' => $data]);
    }
}