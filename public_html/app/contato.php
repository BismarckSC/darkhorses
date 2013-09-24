<?php
/*
 * Classe que recebe e grava um contato
 */ 
 
include 'conexao.php';

class contato {
	public function exec() {
		$nome = $_POST["nome"];
		$email = $_POST["email"];
		$empresa = $_POST["empresa"];
		$site = $_POST["site"];
		$msg = $_POST["msg"];

		$con = new conexao;

		$con->criar();
		$con->selecionar("u491246764_darkh");
		$con->executar("insert into contato(nome,email,empresa,site,mensagem) values ('$nome','$email','$empresa','$site','$msg')");
		$con->fechar();
	}
}

$cont = new contato;
$cont->exec();

header("Location:../contato.html");
?>
