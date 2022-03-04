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
    $soma = $placarJ1 + $placarJ2;
    if($placarJ1 <= 20 && $placarJ2 <= 20){
        if($soma >= 0 && $soma < 5){
            return "Jogador 1";
        } else if($soma >= 5 && $soma < 10){
            return "Jogador 2";
        } else if($soma >= 10 && $soma < 15){
            return "Jogador 1";
        } else if($soma >= 15 && $soma < 20){
            return "Jogador 2";
        } else if($soma >= 20 && $soma < 25){
            return "Jogador 1";
        } else if($soma >= 25 && $soma < 30){
            return "Jogador 2";
        } else if($soma >= 30 && $soma < 35){
            return "Jogador 1";
        } else if($soma >= 35 && $soma < 40){
            return "Jogador 2";
        }
    }

    //Variaveis para realizar cálculo da Prorrogação
    $placarJ1UltimoDigito = $placarJ1 - 20;
    $placarJ2UltimoDigito = $placarJ2 - 20;
    $placarPosteriorJ1UltimoDigito = $placarJ1UltimoDigito + 1;
    $placarPosteriorJ2UltimoDigito = $placarJ2UltimoDigito + 1;

    //Se chegarem a 20 pontos iguais, inicia-se a prorrogação
    if($placarJ1 === 20 && $placarJ2 === 20){
        return "Jogador 1";
    }
    
    if($placarJ1 >= 20 && $placarJ2 >= 20 && ($placarJ1 - $placarJ2) < abs(2)){
        //Decidindo quem saca quando os placares na prorrogação forem iguais
        if($placarJ1 === $placarJ2 && $placarJ1UltimoDigito % 2 === 0){
            return "Jogador 1";
        } else if ($placarJ1 === $placarJ2 && $placarJ1UltimoDigito % 2 !== 0){
            return "Jogador 2";
        } 

        //Condições para jogador 2 sacar
        if($placarJ1 !== $placarJ2 && $placarJ2 % 2 !== 0 && $placarJ1 % 2 === 0 && $placarJ2 < $placarJ1 && $placarPosteriorJ2UltimoDigito % 2 === 0){
            return "Jogador 2";
        } else if ($placarJ1 !== $placarJ2 && $placarJ2 % 2 === 0 && $placarJ1 % 2 !== 0 && $placarJ2 > $placarJ1 && $placarPosteriorJ1UltimoDigito % 2 === 0){
            return "Jogador 2";
        }

        //Condições para jogador 1 sacar
        if($placarJ1 !== $placarJ2 && $placarJ2 % 2 !== 0 && $placarJ1 % 2 === 0 && $placarJ2 > $placarJ1 && $placarPosteriorJ1UltimoDigito % 2 !== 0){
            return "Jogador 1";
        } else if ($placarJ1 !== $placarJ2 && $placarJ2 % 2 === 0 && $placarJ1 % 2 !== 0 && $placarJ2 < $placarJ1 && $placarPosteriorJ2UltimoDigito % 2 !== 0){
            return "Jogador 1";
        }
    }

    //Condições para terminar o jogo na prorrogação, dois pontos de diferença se os dois chegarem a 20 pontos iguais
    if(($placarJ1 - $placarJ2) >= abs(2) && $placarJ1 >= 20 && $placarJ2 >= 20 && $placarJ1 > $placarJ2){
        return "Jogo Encerrado! Jogador 1 Venceu";
    }

    if(($placarJ2 - $placarJ1) >= abs(2) && $placarJ1 >= 20 && $placarJ2 >= 20 && $placarJ2 > $placarJ1){
        return "Jogo Encerrado! Jogador 2 Venceu";
    }

    //Encerrando o jogo quando um adversário chega a 21 pontos e possui diferença maior que 2
    if(($placarJ1 - $placarJ2) >= abs(2) && $placarJ1 === 21 || $placarJ2 === 21 && $placarJ1 > $placarJ2){
        return "Jogo Encerrado! Jogador 1 Venceu";
    }

    if(($placarJ1 - $placarJ2) >= abs(2) && $placarJ1 === 21 || $placarJ2 === 21 && $placarJ1 < $placarJ2){
        return "Jogo Encerrado! Jogador 2 Venceu";
    }
}

echo decideSaque("25:25");