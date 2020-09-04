<?php

$num1 = $_GET ['num1'];
$num2 = $_GET ['num2'];

if ($num2 < 0);
{
   $soma = $num1+$num2;
   echo ("Sua soma é de: $soma");
}{
   $sub = $num1-$num2;
   echo ("Sua subtração é de: $sub");
}{
   $divisao = $num1/$num2;
   echo ("Sua divisão é de: $divisao");
}{
   $multi = $num1*$num2;
   echo ("Sua multiplicação é de: $multi");
}


