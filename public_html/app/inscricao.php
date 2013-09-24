<?php
/*
 * Classe que recebe e grava uma inscricao de email
 */ 
 
include 'conexao.php';

class inscricao {
	public function exec() {
		$email = $_POST["email"];

		$con = new conexao;

		$con->criar();
		$con->selecionar("u491246764_darkh");
		$con->executar("insert into insc(email) values ('$email')");
		$con->fechar();
	}
}

$insc = new inscricao;
$insc->exec();

header("Location:../inscricao.html");
?>
