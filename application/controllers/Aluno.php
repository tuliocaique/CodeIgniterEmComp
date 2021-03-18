<?php

class Aluno extends CI_Controller {

    public  function  __construct()
    {
        parent::__construct();
        $this->load->model('AlunoModel', 'aluno');
    }

    //  meusite.com.br/aluno
    public function index(){
        echo "ola mundo";
    }


    //  meusite.com.br/aluno/inserir
    public  function inserir(){
        $dados = array(
            'id' => 1,
            'nome' => 'João',
            'sobrenome' => 'Henrique'
        );
        $this->aluno->cadastrar($dados);
        echo "Os dados foram inseridos";
    }

    //  meusite.com.br/aluno/alterar
    public function alterar(){
        $dados = array(
            'nome' => 'Maria',
            'sobrenome' => 'Souza'
        );
        $condicao = array('id' => 1);

        $this->aluno->alterar($dados, $condicao);
        echo 'Os dados foram alterados';
    }

    //  meusite.com.br/aluno/deletar
    public function deletar(){
        $condicao = array('id' => 1);

        $this->aluno->deletar($condicao);
        echo "O aluno foi deletado";
    }

    //  meusite.com.br/aluno/listar
    public function listar(){
        $data['resultados'] = $this->aluno->listarTodosOsAlunos();

        $this->load->view('listar_alunos', $data); //enviando o array $data para view listar_alunos
    }
}