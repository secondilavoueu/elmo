
<?php

//chamando os dados atraves do post

   $nome = $_POST['nome'];
    $email = $_POST['email'];
    $datanascimento = $_POST['datanascimento'];
    $genero = $_POST['genero'];
    $biografia = $_POST['biografia'];

//validando se todos os campos foram preenchidos
if (empty($nome) || empty($email) || empty($datanascimento) || empty($genero) || empty($biografia)) {
   echo "<script>alert('Todos os campos devem ser preenchidos corretamente.');</script>"; // exibindo um alerta com mensagem de erro caso algum campo esteja vazio
} else {
   echo "<script>alert('Dados cadastrados com sucesso!');</script>"; //alerta 
}
 //Validação adicional em PHP para verificar se o e-mail é válido 

if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo"Email inválido! Preencha corretamente";
}

 //validação para ver se o nome contém ao menos dois nomes.

 //a principio pensei me usar count ou strlen, mas o gpt me mostrou como fazer do jeito certo:

 $dividindoNome= explode (' ', trim($nome)); // primeiro divide o nome digitado em partes usando espaços para delimitar, o comando trim remove os espaços em branco no inicio e no fim

 $dividindoNome= array_filter($dividindoNome); // removo entradas vazias do array, caso o user tenha dado varios espaços

 if(!count($dividindoNome) >= 2){ // por fim uso o count para verificar de o campo foi preenchido com dois nomes
    echo"Preencha com pelo menos dois nomes!";
 }

 header("Location: surpresa.html"); // função que, após o processamento de dados redirecionara o usuario para a pagina de surpresa
 exit;


?>
