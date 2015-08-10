<?php

    $email = $_GET["nlEmail"];
    
    $assunto = "NEWSLETTER PARA " . strtoupper($email);
    
    //Envio do email
        //$headers .= "From: $email " . "\n" . ""; 
        //$headers .= "Return-Path: $email " . "\n" . ""; 

        //mail("teste@bcagencia.com.br",$assunto,$mensagem, $headers, "-r".$email); 

    //Salvando no banco
        $conexao = new PDO('mysql:host=localhost;dbname=bcbr_bcsql', "bcbr_admin", "Filipe15");
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conexao->prepare("INSERT INTO `newsletter` (`email`) VALUES (:email);");

        $stmt->bindParam(":email",$email);

        $stmt->execute();

        $conexao = NULL;
        $stmt = NULL;

    //Redirecionando à página
    $pagina = "servicos.html";
    header('location: ../../servicos.html');
?>