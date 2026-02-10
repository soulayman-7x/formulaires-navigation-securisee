<?php
$phrase = "Hello PHP";
echo "Longueur : " . strlen($phrase) . "<br>";
echo "Majuscules : " . strtoupper($phrase) . "<br>";
echo "Minuscules : " . strtolower($phrase) . "<br>";


echo "Position de PHP : " . strpos($phrase, "PHP") . "<br>";
$nouvellePhrase = str_replace("PHP", "le monde", $phrase);
echo "Remplacé : " . $nouvellePhrase . "<br>";


$liste = "HTML,CSS,JavaScript,PHP";
$techs = explode(",", $liste);
echo "Technologies : " . implode(" | ", $techs);


$texte = "   Bonjour   ";
echo "Texte nettoyé : '" . trim($texte) . "'";


echo "<br>";
echo "<br>";

$title = " How to Learn PHP in 2026! ";
$slug = trim(strtolower($title));
$slug = str_replace('!', '', $slug);
$slug = str_replace(' ', '-', $slug);

echo $slug;