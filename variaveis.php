<?php
echo 'hello world <br>';
echo '<hr>';
print 'hello world';
echo '<hr>';
echo '<p style="font-family: Cambria, sans-serif; color= black; "> o estranho mundo de kacj</p>';
echo '<hr>';

$nome = 'iweub';
$sobrenome = 'fgfgff';
$nomeCompleto = $nome . ' ' . $sobrenome;
echo ($nomeCompleto);
echo '<hr>';
$cpf = '1234567890';
var_dump($cpf);
echo '<hr>';

if ($cpf == '14715887644') {
    echo 'Esse cpf ta esquisito';
}else{
    echo 'Com esse cpf mais R$20000000000 voçê entra no cinema!!!';
}
echo '<hr>';
function soma($peso, $altura)
{
    $imc = $peso / ($altura * $altura);
    echo 'seu imc é' . $imc . '. ';

    if ($imc < 18) {
        return 'abaixo do peso';
    }elseif ($imc > 18 && $imc <= 65) {
        return 'peso normal';
    }elseif ($imc > 65 && $imc <= 90) {
        return 'sobrepeso';
    }elseif ($imc > 90 && $imc <= 100) {
        return 'obesidade';
    }
}

echo "meu imc é " . soma(55, 1.70);