<?php
/*
 *	Classe responsavel pela conexão com o banco de dados
 */


class conexao {

	protected $endereco = "mysql.1freehosting.com";
	protected $usuario = "u491246764_dark";
	protected $senha = "horses";
	
	protected $con;
	
	public function criar() {
		$this->con = mysql_connect($this->endereco, $this->usuario, $this->senha) or die("Impossivel conectar");
		mysql_set_charset('utf8', $this->con);
	}
	
	public function executar($consulta) {
		mysql_query($consulta, $this->con);
	}
	
	public function fechar() {
		mysql_close($this->con);
	}
	
	public function selecionar($banco) {
		mysql_select_db($banco, $this->con);
	}
}
?>
