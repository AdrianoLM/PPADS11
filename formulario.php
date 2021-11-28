<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type ="text/css" href="formulario.css" media="screen">
    <title>Cadastro</title>
</head>
<body>
    
    <div>
        <h1 id="titulo">Verificação de sintomas</h1>
        <p id="subtitulo">Complete suas informações</p>
        <br>
    </div>

    <form action="testformulario.php" method="POST">
        <fieldset class="grupo">
            <div class="campo">
                <label for="nome"><strong>Nome</strong></label>
                <input type="text" name="nome" id="nome" required>
            </div>

            <div class="campo">
                <label for="sobrenome"><strong>Sobrenome</strong></label>
                <input type="text" name="sobrenome" id="sobrenome" required>
            </div>
        </fieldset>

        <div class="campo">
            <label for="tia"><strong>TIA</strong></label>
            <input type="tia" name="tia" id="tia" required>
        </div>

        <fieldset class="grupo">
            <div class="check">
                <label><strong>Seleciona um ou mais sintomas que está sentindo</strong></label><br><br>
                <input type="checkbox" id="sintoma1" name="sintoma1" value="on" >
                <label for="sintoma1">Tosse</label><br><br>
                <input type="checkbox" id="sintoma2" name="sintoma2" value="on" >
                <label for="sintoma2">Febre</label><br><br>
                <input type="checkbox" id="sintoma3" name="sintoma3" value="on" >
                <label for="sintoma3">Coriza</label><br><br>
                <input type="checkbox" id="sintoma4" name="sintoma4" value="on" >
                <label for="sintoma4">Cansaço</label><br><br>
                <input type="checkbox" id="sintoma5" name="sintoma5" value="on" >
                <label for="sintoma5">Perda de paladar ou olfato</label><br><br>
                <input type="checkbox" id="sintoma6" name="sintoma6" value="on" >
                <label for="sintoma6">Falta de ar</label><br><br>
                <input type="checkbox" id="sintoma7" name="sintoma7" value="on" >
                <label for="sintoma7">Dores de garganta</label><br><br>
                <input type="checkbox" id="sintoma8" name="sintoma8" value="on" >
                <label for="sintoma8">Diarréia</label><br><br>
                <input type="checkbox" id="sintoma9" name="sintoma9" value="on" >
                <label for="sintoma9">N/A</label><br><br><br>
            </div>
        </fieldset>

        <div class="campo">
            <label><strong>Entrou em contato com alguém que apresentou os sintomas acima??</strong></label>
            <label>
                <input type="radio" name="contato" value="Sim" checked>Sim
            </label>
            <label>
                <input type="radio" name="contato" value="Não">Não 
            </label>
        </div>

        <div class="campo">
            <label><strong>Já tomou quantas doses da vacina?</strong></label>
            <label>
                <input type="radio" name="dose" value="nenhuma" checked>Nenhuma
            </label>
            <label>
                <input type="radio" name="dose" value="1dose">1ª Dose 
            </label>
            <label>
                <input type="radio" name="dose" value="2dose">2ª Dose 
            </label>
            <label>
                <input type="radio" name="dose" value="3dose">3ª Dose 
            </label>
        </div>

        <div class="campo">
            <label><strong>Já contraiu Covid-19?</strong></label>
            <label>
                <input type="radio" name="contraiu" value="Sim" checked>Sim
            </label>
            <label>
                <input type="radio" name="contraiu" value="Não">Não 
            </label>
        </div>

        <div class="campo">
            <br>
            <label><strong>Alguma sugestão para a volta as aulas presenciais? </strong>(Opcional)</label>
            <textarea row="6" style="width: 26em" id="sugestao" name="sugestao"></textarea>
        </div><br>

        <button type="submit" name="submit" id="submit" class="botao">Concluido</button>
    </form>
</body>
</html>