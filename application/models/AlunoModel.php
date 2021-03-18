<?php
class AlunoModel extends CI_Model {

    public  function  __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function cadastrar($parametros){
        $this->db->insert('aluno', $parametros);
    }

    public function alterar($parametros, $condicao){
        $this->db->update('aluno', $parametros, $condicao);
    }

    public function deletar($condicao){
        $this->db->delete('aluno', $condicao);
    }

    public function listarTodosOsAlunos(){
        $this->db->select(array('id','nome','sobrenome'));
        return $this->db->get('aluno')->result_array();
    }
}