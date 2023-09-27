<?php
  //Variáveis
  $nome = $_POST['firstname'];
  $email = $_POST['email'];
  $mensagem = $_POST['usuario_msg'];
  $numero = $_POST['number'];
  

  //Compo E-mail
  $arquivo = "
    <html>
      <p><b>Nome: </b>$nome</p>
      <p><b>E-mail: </b>$email</p>
      <p><b>Mensagem: </b>$mensagem</p>
      <p><b>numero: </b>$numero</p>

    </html>
  ";
  
  //Emails para quem será enviado o formulário
  $destino = "rafaelolivais09@gmail.com";
  $assunto = "Contato pelo Site";

  //Este sempre deverá existir para garantir a exibição correta dos caracteres
  $headers  = "MIME-Version: 1.0\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\n";
  $headers .= "From: $nome <$email>";

  //Enviar
  mail($destino, $assunto, $arquivo, $headers);
  
  echo "<meta http-equiv='refresh' content='10;URL=../index.html'>";
?>