<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $seu_email = "contato.matheuswesley@gmail.com"; // Substitua pelo seu endereço de e-mail
    $email = $_POST["email"];

    // Validar o e-mail
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Enviar e-mail para o seu endereço
        $assunto = "Novo E-mail da Newsletter";
        $mensagem = "Você recebeu um novo e-mail da newsletter:\n\nE-mail: $email";

        // Use a função mail para enviar o e-mail
        mail($seu_email, $assunto, $mensagem);

        // Redirecionar ou exibir uma mensagem de sucesso
        header("Location: sucesso.html"); // Redirecionar para uma página de sucesso
        exit();
    } else {
        // E-mail inválido, redirecionar ou exibir mensagem de erro
        header("Location: erro.html"); // Redirecionar para uma página de erro
        exit();
    }
}
?>

