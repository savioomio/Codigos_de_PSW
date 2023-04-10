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

  
?>
