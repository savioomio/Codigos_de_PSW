<?php
//variaveis pegas do formulario de contato
    $nome = $_POST['nome'];  
    $sobrenome = $_POST['sobrenome']; 
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $idade = $_POST['idade'];
    $descricao = $_POST['descricao'];

//imprime as informações pegas do formulario de contato para o usuarii ver
    echo "Suas informações são: <br>";
    echo "Nome: $nome <br>";
    echo "Sobrenome: $sobrenome <br>";
    echo "Email: $email <br>";
    echo "Tel: $tel <br>";
    echo "Idade: $idade <br>";
    echo "Descrição: $descricao <br>";

  //Compo E-mail
  $arquivo = "
    <html>
      <p><b>Nome: </b>$nome</p>
      <p><b>E-mail: </b>$sobrenome</p>
      <p><b>E-mail: </b>$email</p>
      <p><b>E-mail: </b>$tel</p>
      <p><b>E-mail: </b>$idade</p>
      <p><b>Mensagem: </b>$descricao</p>
    </html>
  ";
  
  //Emails para quem será enviado o formulário
  $destino = "saviopessoaafonso@gmail.com";
  $assunto = "Formulario de contato em PHP";

  //Este sempre deverá existir para garantir a exibição correta dos caracteres
  $headers  = "MIME-Version: 1.0\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\n";
  $headers .= "From: $nome <$email>";

  //Enviar
  mail($destino, $assunto, $arquivo, $headers);
  
?>
