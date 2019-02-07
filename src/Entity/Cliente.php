<?php 
namespace App/Entity;

class Cliente {
	protected $id;
	protected $nome;
	protected $sexo;
	protected $email;
	protected $telefone;
	protected $senha;

	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function getNome() {
		return $this->nome;
	}

	public function setNome($nome) {
		$this->nome = $nome;
	}

	public function getSexo() {
		return $this->sexo;
	}

	public function setSexo($sexo) {
		$this->sexo = $sexo;
	}

	public function getEmail() {
		return $this->email;
	}

	public function setEmail($email) {
		$this->email = $email;
	}

	public function getTelefone() {
		return $this->telefone;
	}

	public function setTelefone($telefone) {
		$this->telefone = $telefone;
	}

	public function getSenha() {
		return $this->senha;
	}

	public function setSenha($senha) {
		$this->senha = $senha;
	}

	public function checkErros() {

	}
}

	
