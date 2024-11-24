
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

   $name = $_POST["name"];
   $email = $_POST["email"];
   $phone = $_POST["phone"];
   $message = $_POST["message"];

   $stmt = $conexao->query("INSERT INTO contactus(name,email,phone,message)VALUES('$name','$email','$phone','$message')" );

   if($stmt->execute()){
      echo "<script>alert('Cadastro realizado com sucesso')</script>";
      echo "<script>window.location.href='/cla/login.html';</script>";
   }

   else{
      echo "erro ao se cadastrar.";
   }


?>

