<?php
//odpalamy w konsoli
$aplications = readline("Do jakiej aplikacji wygenerować hasło: ");
$lenght = readline("Jakiej długości hasło wygenerować : "); //zapytanie uzytkowanika o dane
$pass = "";
for($i= 0 ; $i < $lenght ; $i++)
{
  $pass .= chr(rand(34,126));
     // chr(rand(34,126));  //chr zmienia reprezentację liczbową na odpowiadający jej znak
}
echo"---------------".PHP_EOL;
file_put_contents("password-generate.txt","utworzono".PHP_EOL . date("Y-m-d").PHP_EOL."$aplications"." $pass ",FILE_APPEND);
echo "Twoje hasło do ".$aplications ." to :".$pass.PHP_EOL;
echo "hasło wraz z przeznaczeniem zostało wygenerowane do pliku password-generate.txt ".PHP_EOL;
echo "-----------------" ;
echo PHP_EOL;

