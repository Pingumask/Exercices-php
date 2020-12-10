<p>Grâce à la fonction rand(), remplir un tableau et vérifier si le chiffre 13 est présent et afficher un message en conséquence.</p>
<?php
for ($i = 0; $i < 20; $i++) {
  $array[] = rand(0, 20);
}
var_dump($array);
echo "Ce tableau ";
echo in_array(13, $array) ? "contient" : "ne contient pas";
echo " le nombre 13";
?>