<?php
$telefones = [
    "(11) 1234 - 5678",
    "(21) 9876 - 5432",
    "(31) 5555 - 1234",
    "(41) 4567 - 8901",
    "(51) 2345 - 6789",
    "(61) 7890 - 1234",
    "(71) 5432 - 1098",
    "(81) 2109 - 8765",
    "(91) 8765 - 4321",
    "(99) 4321 - 0987"
];

foreach ($telefones as $telefone){
    $telefoneValido = preg_match('/^\([0-9]{2}\) 9?[0-9]{4} - [0-9]{4}$/', $telefone, $correspondencia);

    var_dump($correspondencia);

    if($telefoneValido){
        echo 'Telefone válido' . PHP_EOL;
    }else{
        echo 'Telefone inválido' . PHP_EOL;
    }

    echo preg_replace(
        '/^\(([0-9]{2}\)) (9?[0-9]{4} - [0-9]{4})$/',
        '(xx) \2',
        $telefone
    );
}

