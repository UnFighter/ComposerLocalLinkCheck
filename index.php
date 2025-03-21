<?php

require './vendor/autoload.php';

use Mashalov\Rickandmorty\Character;

$character = new Character('1');

$character->id ('1')->get();