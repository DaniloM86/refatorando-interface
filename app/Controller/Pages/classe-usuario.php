<?php 

	class Usuario{
		private $pdo;

		public function conexão($dbname,$servidor,$usuario,$senha)
		{
			global $pdo;
		try
		 {
			$pdo = new PDO("mysql:dbname=".$dbname.";host=".$servidor,$usuario,$senha);
		}
		 catch (PDOException $e) {
			echo "Erro de conexão".$e->getMenssage();
		}
	}
		public function cadastro($nome,$email,$senha)
		{
		global $pdo;
			$sql = $pdo->prepare("SELECT id_usuarios FROM tb_login WHERE email=:email");
			$sql->bindValue(":email",$email);
			$sql->execute();

		if ($sql->rowCount() > 0) {
				return false;
			}
			else
			{
				$sql = $pdo->prepare("INSERT INTO tb_login(nome,email,senha) VALUES (:nome,:email,:senha)");
				$sql->bindValue(":nome",$nome);
				$sql->bindValue(":email",$email);
				$sql->bindValue(":senha",md5($senha));
				$sql->execute();
				return true;
			}
		}

		public function login($email,$senha)
		{
		global $pdo;
			$sql = $pdo->prepare("SELECT id_usuarios FROM tb_login WHERE email=:email AND senha=:senha");
			$sql->bindValue(":email",$email);
			$sql->bindValue(":senha",md5($senha));
			$sql->execute();

			if ($sql->rowCount() > 0 ) {
				$dados = $sql->fetch();
				session_start();
				$_SESSION['id_usuarios'] = $dados['id_usuarios'];
				return true;
			}
			else
			{
				return false;
			}
		}
	}


 ?>