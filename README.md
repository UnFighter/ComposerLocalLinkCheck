# Пакет для проверки погоды в городах России

## Вот такие дела
Тут вот документация:
- [Russian](docs/ru.md)
- [English](docs/en.md)

# License
MIT

<?php

use Mashalov\ComposerLocalLinkCheck\Rick&Morty;

$c = new Rick&Morty($apiKey);

$c = $c->character(1)->get();

$c->status();