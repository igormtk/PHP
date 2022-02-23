<?php

function decideSaque($placar){

    //transformando input placar
    $arrayPlacar = explode(':', $placar);
    $placarJ1 = intval($arrayPlacar[0]);
    $placarJ2 = intval($arrayPlacar[1]);

    //Jogador 1 sempre começa sacando
    if($placarJ1 === 0 && $placarJ2 === 0){
        return "Jogador 1";
    }

    //Jogo normal
    if($placarJ1 <= 20 && $placarJ2 <= 20){
        return "Jogador 1";
    }

    //Prorrogação
    if($placarJ1 >= 20 && $placarJ2 >= 20 && ($placarJ1 - $placarJ2) < abs(2)){
        return "Jogador 2";
    }

    //Condições para terminar o jogo
    if($placarJ1 >= 20 && $placarJ2 >= 20 && ($placarJ1 - $placarJ2) > abs(2)){
        return "Jogo Encerrado!";
    }

    if($placarJ1 = 21 || $placarJ2 = 21 && ($placarJ1 - $placarJ2) >= abs(2)){
        return "Jogo Encerrado!";
    }
}

echo decideSaque("31:30");