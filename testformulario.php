<?php
    //criando uma variavel que somara +1 a cada sintoma marcado
    $nsintomas = 0;

    for ($i = 1; $i<9;$i++)
    if (isset($_POST['sintoma'.$i]))
    {
        $nsintomas= $nsintomas+1;
    }
    else
    {
        $nsintomas= $nsintomas;
    }

    
    include_once('conexao.php');

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $tia = $_POST['tia'];
    $contato = $_POST['contato'];
    $dose = $_POST['dose'];
    $contraiu = $_POST['contraiu'];
    $sugestao = $_POST['sugestao'];

    $result = mysqli_query($conexao, "INSERT INTO sintomas(nome,sobrenome,tia,sintomas,contato,doses,contraiu,sugestao) 
    VALUES ('$nome','$sobrenome','$tia','$nsintomas','$contato','$dose','$contraiu','$sugestao')");

    header("Location: formulario.php");
?>