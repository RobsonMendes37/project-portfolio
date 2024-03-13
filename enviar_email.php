<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define os destinatários e outras informações do e-mail
    $to = "robsonqueirozmendes@alu.ufc.br"; // Substitua pelo seu endereço de e-mail
    $subject = "Contato do site";
    
    // Obtém os dados do formulário
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $email = $_POST["email"];
    $assunto = $_POST["assunto"];
    $mensagem = $_POST["mensagem"];
    
    // Monta o corpo do e-mail
    $corpo_email = "Nome: $nome $sobrenome\n";
    $corpo_email .= "Email: $email\n";
    $corpo_email .= "Assunto: $assunto\n";
    $corpo_email .= "Mensagem:\n$mensagem";
    
    // Envia o e-mail
    if (mail($to, $subject, $corpo_email)) {
        echo "<p>E-mail enviado com sucesso!</p>";
    } else {
        echo "<p>Ocorreu um erro ao enviar o e-mail. Por favor, tente novamente mais tarde.</p>";
    }
} else {
    echo "<p>Erro: Este script só pode ser acessado via método POST.</p>";
}
?>
