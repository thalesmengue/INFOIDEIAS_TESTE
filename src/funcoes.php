<?php

namespace SRC;

class Funcoes
{
    /*

    Desenvolva uma função que receba como parâmetro o ano e retorne o século ao qual este ano faz parte. O primeiro século começa no ano 1 e termina no ano 100, o segundo século começa no ano 101 e termina no 200.

	Exemplos para teste:

	Ano 1905 = século 20
	Ano 1700 = século 17

     * */
    public function SeculoAno(int $ano): int
    {
        echo "Ano inserido: " . $ano . PHP_EOL;
        return ceil($ano / 100);
    }

    /*

    Desenvolva uma função que receba como parâmetro um número inteiro e retorne o numero primo imediatamente anterior ao número recebido

    Exemplo para teste:

    Numero = 10 resposta = 7
    Número = 29 resposta = 23

     * */
    public function PrimoAnterior(int $numero): int
    {
        for ($i = 1; $i <= $numero; $i++) {

            $contador = 0;
            for ($j = 1; $j <= $i; $j++) {

                if ($i % $j == 0) {
                    $contador++;
                }
            }

            if ($contador == 2) {
                $primo = $i;
            }
        }

        return $primo;
    }

    /*

    Desenvolva uma função que receba como parâmetro um array multidimensional de números inteiros e retorne como resposta o segundo maior número.

    Exemplo para teste:

	Array multidimensional = array (
	array(25,22,18),
	array(10,15,13),
	array(24,5,2),
	array(80,17,15)
	);

	resposta = 25

     * */
    public function SegundoMaior(array $arr): int
    {
        $array = [];

        foreach ($arr as $valor) {
            $array = array_merge($array, $valor);
        }

        rsort($array);

        return $array[1];
    }


    /*
   Desenvolva uma função que receba como parâmetro um array de números inteiros e responda com TRUE or FALSE se é possível obter uma sequencia crescente removendo apenas um elemento do array.

	Exemplos para teste 

	Obs.:-  É Importante  realizar todos os testes abaixo para garantir o funcionamento correto.
         -  Sequencias com apenas um elemento são consideradas crescentes

    [1, 3, 2, 1]  false
    [1, 3, 2]  true
    [1, 2, 1, 2]  false
    [3, 6, 5, 8, 10, 20, 15] false
    [1, 1, 2, 3, 4, 4] false
    [1, 4, 10, 4, 2] false
    [10, 1, 2, 3, 4, 5] true
    [1, 1, 1, 2, 3] false
    [0, -2, 5, 6] true
    [1, 2, 3, 4, 5, 3, 5, 6] false
    [40, 50, 60, 10, 20, 30] false
    [1, 1] true
    [1, 2, 5, 3, 5] true
    [1, 2, 5, 5, 5] false
    [10, 1, 2, 3, 4, 5, 6, 1] false
    [1, 2, 3, 4, 3, 6] true
    [1, 2, 3, 4, 99, 5, 6] true
    [123, -17, -5, 1, 2, 3, 12, 43, 45] true
    [3, 5, 67, 98, 3] true

     * */

    public function SequenciaCrescente(array $arr): bool
    {
        $state = true;

        if (count($arr) > 2) {
            $diff = 0;
            for ($i = 1; $i < count($arr); $i++) {
                $anterior = $arr[$i - 1];
                $valor_atual = $arr[$i];
                if ($valor_atual < $anterior)
                    $diff++;
            }
            if ($diff > 1)
                $state = FALSE;
        }
        return $state;
    }
}


$function1 = new funcoes;
echo "Século correspondente: " . $function1->SeculoAno(1701) . PHP_EOL . PHP_EOL;

$function2 = new funcoes;
echo "O número primo anterior ao informado é: " . $function2->PrimoAnterior(29) . PHP_EOL . PHP_EOL;

$multidimensional = array(
    array(25, 22, 18),
    array(10, 15, 13),
    array(24, 5, 2),
    array(80, 17, 15)
);
$function3 = new funcoes;
echo "O segundo maior número é: " . $function3->SegundoMaior($multidimensional) . PHP_EOL . PHP_EOL;

$function4 = new funcoes;
$array = [10, 1, 2, 3, 4, 5, 6, 1];
var_dump($function4->SequenciaCrescente($array));
