<?php
    include('conexao.php');

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $cel = $_POST['cel'];
    $end = $_POST['end'];
    $nro = $_POST['nro'];
    $comp = $_POST['comp'];
    $bairro = $_POST['bairro'];
    $city = $_POST['city'];
    $estado = $_POST['estado'];
    $estadoCivil = $_POST['estCivil'];
    $sexo = $_POST['sexo'];

   $sql = "INSERT INTO CLIENTE
                (nome, cpf, cel, end, nro, comp, bairro, city, estado, estadocivil, sexo)
           values 
            ('$nome','$cpf', '$cel', '$end', '$nro', '$comp', '$bairro', '$city', '$estado', '$estadoCivil', '$sexo')";

    if($conn->query($sql) === TRUE){
        header('Location: cadastro_sucesso.php');     
    } else {
         header('Location: cadastro_erro.php');
    }

   $conn->close();
?>