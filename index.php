<?php
require 'vendor/autoload.php';

use Mashalov\RickAndMorty\Character;

$rickAndMorty = new Character();
$rickAndMorty = $rickAndMorty
    ->charactersName('rick')
    ->get()
    //->getCount();
    ->getPages();

dd($rickAndMorty);

/*foreach ($characters as $character) {
    echo $character['name'] . "\n";
    echo $character['status'] . "\n";
    echo $character['species'] . "\n";
    echo $character['type'] . "\n";
    echo $character['gender'] . "\n";
    echo "\n";
}*/