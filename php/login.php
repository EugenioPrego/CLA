

<?php

try {
    $conexao = new PDO("mysql:dbname=cadastrarcla; host=localhost", "root", "");
    
 }
  catch (PDOEXCEPECTION $e) {
  echo "Erro com o banco de dados:" .$e->getMessage();
 }

 catch (EXCEPECTION $e) {
    echo "Erro genérico:" .$e->getMessage();
   }

   $email = $_POST["email"];
   $senha = $_POST["senha"];
  

   $stmt = $conexao->query("INSERT INTO login(email,senha)VALUES('$email','$senha')" );

   if($stmt->execute()){
      echo "<script>alert('Login feito com sucesso')</script>";
      echo "<script>window.location.href='/cla/index.html';</script>";
   }

   else{
      echo "erro ao iniciar sessao";
   }


?>