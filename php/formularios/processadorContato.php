<?php
    
    //Tabela contato
    $nomeContato = $_POST["senderName"];
    $telefoneContato = $_POST["phone"];
    $empresaContato = $_POST["company"];
    $comentarios = $_POST["comment"];
    $email = $_POST["senderEmail"];

    //Enviando para o banco
    $conexao = new PDO('mysql:host=localhost;dbname=bcbr_bcsql', "bcbr_admin", "Filipe15");
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conexao->prepare("INSERT INTO `contato` (`nome_contato`,`email_contato`,`telefone_contato`,`empresa_contato`,`comentarios`) VALUES (:nome,:email,:telefone,:empresa,:comentarios);");

    $stmt->bindParam(":nome",$nomeContato);
    $stmt->bindParam(":email",$email);
    $stmt->bindParam(":telefone",$telefoneContato);
    $stmt->bindParam(":empresa",$empresaContato);
    $stmt->bindParam(":comentarios",$comentarios);

    $stmt->execute();

    $conexao = NULL;
    $stmt = NULL;
    //Fim da gravação no banco

    //Enviando e-mail
    $assunto = "CONTATO DE " . strtoupper($nomeContato);

    $conteudo = "Nome: " . $nomeContato .
                "<br>Email: " . $email .
                "<br>Empresa: " . $empresaContato .
                "<br>Telefone: " . $telefoneContato .
                "<br>Cometário: " . $comentarios;

    mail("contato@bcagencia.com.br",$assunto,$conteudo);

    //Fim da parte de envio do e-mail

    //Redirecionando à página
    $pagina = "../../contato.html";
	
    header("location:$pagina");
?>