<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="css/index.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <title>Ínicio</title>
    
    <link href="https://fonts.googleapis.com/css?family=Autour+One" rel="stylesheet">
    <link href="https://trabalho-garcia-rebecalima.c9users.io/trabalho/css/index.css" rel="stylesheet">

</head>
<body>
    <div id="entrar">
        <h1>INICIAR JOGO</h1>
        <form method="POST" action="https://trabalho-garcia-rebecalima.c9users.io/trabalho/index.php/iniciar">
            <label>
                Jogador 01 <input type="text" name="jogador1">
            </label>
            <select name='person1'>
                <option value="assassino">Assassino</option>
                <option value="warrior">Warrior</option>
                <option value="mago">Mago</option>
            </select>
            <label>
                Jogador 02 <input type="text" name="jogador2">
            </label>
            <select name='person2'>
                <option value="assassino">Assassino</option>
                <option value="warrior">Warrior</option>
                <option value="mago">Mago</option>
            </select>
            <input type="submit" value="entrar" id="btnEntrar">
        </form>
    </div>
</body>
</html>