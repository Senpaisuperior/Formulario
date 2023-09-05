

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];
    
    $destinatario = "kauamlucasdesouzapavao123@gmail.com";
    $assunto = "Mensagem de Contato";
    $headers = "From: $email";
    
    // Enviar o email
    mail($destinatario, $assunto, $mensagem, $headers);
    
    // Redirecionar o usuário após o envio do formulário
    header("Location: obrigado.html");
}
?>