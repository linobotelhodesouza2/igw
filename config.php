<?php
 $servidor = "localhost"; // localhost tambem é web
 $dbname = "igw"; // nome do banco
 $dbusuario = "#"; // usuário do banco
 $dbsenha = "#"; // senha usuário do banco
 $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
 if (!$conn) {
      die("Conexao falhou: " . mysqli_connect_error());
}
?>
