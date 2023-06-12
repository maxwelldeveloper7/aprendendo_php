<?php
$notas = [
    10, 8, 9, 7, 6
];

rsort($notas);//ordena de forma inversa
var_dump($notas);

$notas = [ 'Ana' => 10, 'João' => 8, 'Maria' => 9, 'Roberto' => 7, 'Vinicius' => null, ];

asort($notas);//ordem crescente associativa
var_dump($notas);

arsort($notas);//ordem decrescente associativa
var_dump($notas);

ksort($notas);//ordem por chave crescente
var_dump($notas);

krsort($notas);//ordem por chave descrescente
var_dump($notas);

if(is_array($notas)){
    echo 'Sim é um array' . PHP_EOL;
}else{
    echo 'Não é um array' . PHP_EOL;
}

//var_dump(array_is_list($notas));

// foreach ($notas as $aluno => $nota){
//     if($aluno === 'Vinicius'){
//         echo true;
//         return true;
//     }
// }

/**
 * array_key_exists = verifica se a chaves existe
 * in_array = verifica se o valor existe
 * isset = verifica se a chaves existe e não é nula
 */
echo 'a chave Vinicius existe? ' . PHP_EOL;
var_dump(array_key_exists('Vinicius', $notas)) . PHP_EOL;// verifica se a chave deste array existe

echo 'Vinicius fez a prova? ' . PHP_EOL;
var_dump(isset($notas['Vinicius'])) . PHP_EOL;

echo 'Ana fez a prova? ' . PHP_EOL;
var_dump(isset($notas['Ana'])) . PHP_EOL;

echo 'Alguém tirou 10? ' . PHP_EOL;
var_dump(in_array(10, $notas));

/**
 * echo 'Alguém tirou 10? ' . PHP_EOL;
 *  var_dump(in_array(10, $notas, true)); adicionamos o parametro true para garantir que seja um 10 do timpo inteiro
 * 
 */

 echo 'Quem tirou 10?' . PHP_EOL;
 echo array_search(10, $notas) . PHP_EOL;
 var_dump(array_search(6, $notas));// não existe uma nota 6

 /**
 * echo 'Quem tirou 10?' . PHP_EOL;
 * echo array_search(10, $notas, true) . PHP_EOL; adicionamos o parametro true para garantir que seja um 10 do timpo inteiro
 * 
 */