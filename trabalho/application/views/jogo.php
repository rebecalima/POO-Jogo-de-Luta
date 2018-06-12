<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Autour+One" rel="stylesheet">
    <script type="text/javascript" src="https://trabalho-garcia-rebecalima.c9users.io/trabalho/js/jquery.js"></script>
    
    <link href="https://trabalho-garcia-rebecalima.c9users.io/trabalho/css/jogo.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    

<?php

$informacoes = $this->session->userdata("jogador1")->getJogador();
$informacoes2 = $this->session->userdata("jogador2")->getJogador();
$jogador1 = $this->session->userdata("jogador1");
$jogador2 = $this->session->userdata("jogador2");
$combate = new Combate($jogador1, $jogador2);
?>
<h2><?= $informacoes["nome"] ?> </h2><button id="j1"></button>
<div id="tubo1"><div id="vida1"></div></div>

<h2><?= $informacoes2["nome"] ?> </h2><button id="j2"></button>
<div id="tubo2"><div id="vida2"></div></div>

<div id="tabuleiro">
    
<?php
echo $informacoes["elemento"];
echo $informacoes2["elemento"];
  $vlr = "float: left";
    $i = 0;
    $id = "";

    foreach($tabuleiro->getArrayCelulas() as $celula){
        foreach($celula as $c){
            if($i == $tabuleiro->getLimiteY()){
               $vlr = "clear: left; float: left"; 
               $i = 0;
            }
            $id = $c->getId();
?>
        <div class="celulas" id="<?= $id["x"] . $id["y"]; ?>" style='<?= $vlr ?>; background-color: <?= $c->getImg() ?>;'></div>
<?php 
            $vlr = "float: left";
            $i++;
        }
    }
?>
</div>

<section></section>
<script>

$("document").ready(function(){
    $("#j2").css("background-color", "gray");
    var player1 = "<?php echo $informacoes["posicao"]["x"].$informacoes["posicao"]["y"] ?>";
    var player2 = "<?php echo $informacoes2["posicao"]["x"].$informacoes2["posicao"]["y"] ?>";
    var posLeft = $("#"+player1).position().left;
    var posTop = $("#"+player1).position().top;
    
    $("#"+"<?= $informacoes["nome"] ?>").offset({top:posTop+20,left:posLeft+20});
    
    posLeft = $("#"+player2).position().left;
    posTop = $("#"+player2).position().top;
    
    $("#"+"<?= $informacoes2["nome"] ?>").offset({top:posTop+20,left:posLeft+20});


    $("body").keydown(function(e) {

        if($("#j1").css("background-color") == "rgb(0, 128, 0)"){
            
            if(e.keyCode == 65) {
                var player1 = "<?php echo $informacoes["posicao"]["x"].$informacoes["posicao"]["y"] ?>";
                var player2 = "<?php echo $informacoes2["posicao"]["x"].$informacoes2["posicao"]["y"] ?>";
                
                "<?php $pos['x'] = 1 ?>";
                "<?php $pos['y'] = 1 ?>";
                "<?php $jogador1->movimentar($pos, $tabuleiro->getObstaculoX(), $tabuleiro->getObstaculoY()) ?>";
                var posLeft = $("#"+"<?= $pos['x']. $pos['y'] ?>").position().left;
                var posTop = $("#"+"<?= $pos['x']. $pos['y'] ?>").position().top;
                
                //var posLeft = $("#"+player1).position().left;
                //var posTop = $("#"+player1).position().top;
                $("#"+"<?= $informacoes["nome"] ?>").offset({top:posTop+20,left:posLeft+20});
                
                "<?php $pos['x'] = 0 ?>";
                "<?php $pos['y'] = 1 ?>";
                "<?php $jogador2->movimentar($pos, $tabuleiro->getObstaculoX(), $tabuleiro->getObstaculoY()) ?>";
                posLeft = $("#"+"<?= $pos['x']. $pos['y'] ?>").position().left;
                posTop = $("#"+"<?= $pos['x']. $pos['y'] ?>").position().top;
                
                //posLeft = $("#"+player2).position().left;
                //posTop = $("#"+player2).position().top;
                $("#"+"<?= $informacoes2["nome"] ?>").offset({top:posTop+20,left:posLeft+20});
                
                $("section").text("Console: <?= $combate->atacar($jogador2, $jogador1); ?>");
                //$("section").text($("section").text() + "Vida da Defesa: " + " //$assassino->vida; ");
                
                var vidaAtual = "<?= $jogador1->vidaAtual; ?>";
                var vidaTotal = "<?= $jogador1->vidaTotal; ?>";
                var porcentagem = (vidaAtual*100)/vidaTotal;
                $("#vida1").css("width", porcentagem+"%");
            }
            
            if(e.keyCode == 37) {
                /*$.ajax({
                    url: ' //base_url(); ?>' + 'jogo/mover',
                    method: 'POST',
                    data: {jogador:"jogador1", movimento:"esquerda"},
                    success:function(msg){
                        //alert(msg);
                    }
                });*/
                

                
            }
            else if(e.keyCode == 39) { 


                
            }else if(e.keyCode == 38) {
                   
            }
            else if(e.keyCode == 40) { 
                alert("baixo j1");
            }
        }
        else{
            
            if(e.keyCode == 37) {

            }
            else if(e.keyCode == 39) { 
                alert("direita j2");
            }else if(e.keyCode == 38) {
                alert("cima j2");
            }
            else if(e.keyCode == 40) { 
                alert("baixo j2");
            }
            
            if(e.keyCode == 65) {
                var player1 = "<?php echo $informacoes["posicao"]["x"].$informacoes["posicao"]["y"] ?>";
                var player2 = "<?php echo $informacoes2["posicao"]["x"].$informacoes2["posicao"]["y"] ?>";
                
                "<?php $pos['x'] = 3 ?>";
                "<?php $pos['y'] = 3 ?>";
                "<?php $jogador1->movimentar($pos, $tabuleiro->getObstaculoX(), $tabuleiro->getObstaculoY()) ?>";
                var posLeft = $("#"+"<?= $pos['x']. $pos['y'] ?>").position().left;
                var posTop = $("#"+"<?= $pos['x']. $pos['y'] ?>").position().top;
                
                //var posLeft = $("#"+player1).position().left;
                //var posTop = $("#"+player1).position().top;
                $("#"+"<?= $informacoes["nome"] ?>").offset({top:posTop+20,left:posLeft+20});
                
                "<?php $pos['x'] = 2 ?>";
                "<?php $pos['y'] = 3 ?>";
                "<?php $jogador2->movimentar($pos, $tabuleiro->getObstaculoX(), $tabuleiro->getObstaculoY()) ?>";
                posLeft = $("#"+"<?= $pos['x']. $pos['y'] ?>").position().left;
                posTop = $("#"+"<?= $pos['x']. $pos['y'] ?>").position().top;
                
                //posLeft = $("#"+player2).position().left;
                //posTop = $("#"+player2).position().top;
                $("#"+"<?= $informacoes2["nome"] ?>").offset({top:posTop+20,left:posLeft+20});
                
                $("section").text("Console: <?= $combate->atacar($jogador1, $jogador2); ?>");
                //$("section").text($("section").text() + "Vida da Defesa: " + " //$assassino->vida; ");
                
                var vidaAtual = "<?= $jogador2->vidaAtual; ?>";
                var vidaTotal = "<?= $jogador2->vidaTotal; ?>";
                var porcentagem = (vidaAtual*100)/vidaTotal;
                $("#vida2").css("width", porcentagem+"%");
            }
        }
    })
        
        
    $("#j1").click(function(){
         if($(this).css("background-color") == "rgb(0, 128, 0)"){
            $("#j2").css("background-color", "green");
            $(this).css("background-color", "gray");
        }else{
            $("#j2").css("background-color", "gray");
            $(this).css("background-color", "green");
        }
       
    })
    
    $("#j2").click(function(){
         if($(this).css("background-color") == "rgb(0, 128, 0)"){
            $("#j1").css("background-color", "green");
            $(this).css("background-color", "gray");
        }else{
            $("#j1").css("background-color", "gray");
            $(this).css("background-color", "green");
        }
       
    })
    
    

})

</script>
</body>
</html>