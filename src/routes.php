<?php
use core\Router;
$router = new Router();
$router->get('/', 'HomeController@index');

/**
 * Rotas para Cadastro (view)
 */
//$router->get('/cadastro/tpend', 'CadastroController@tpend');
$router->get('/cadastro/pessoa', 'CadastroController@pessoa');
// ok
$router->get('/cadastro/pessoaUpdate/{id}', 'CadastroController@pessoaUpdate');
$router->post('/cadastro/pessoaUpdate', 'CadastroController@pessoaUpdateAction');

/**
 * Rotas para actions (Cadastro)
 */
$router->post('/cadastro/pessoa', 'CadastroController@pessoaAction');
// ok
$router->get('/cadastro/pessoaDelete/{id}', 'CadastroController@pessoaDelete');
$router->post('/cadastro/pessoaDelete', 'CadastroController@pessoaDeleteAction');

/**
 * Buscas / relatórios
 */
$router->get('/busca/pessoa', 'BuscaController@pessoa');



//$router->get('/busca/serialEquip/{id}', 'BuscaController@serialEquip');


/**
 * Rotas para views (Movimentações)
 */
$router->get('/movimento/aluguel', 'MovimentoController@aluguel');
$router->get('/movimento/devolucao', 'MovimentoController@devolucao');

/**
 * Rotas para Action (Movimentações)
 */
$router->post('/movimento/aluguel', 'MovimentoController@aluguelAction');
$router->post('/movimento/devolucao', 'MovimentoController@devolucaoAction');
