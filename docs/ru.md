# Пакет для получение информации о персонажах из API Rick&Morty

### Использование

```shell
 composer require mashalov/rick_and_morty
```

```php
<?php

use Mashalov\RickAndMorty\Character;

$character = new Character();

$character = $character 
    ->charactersName('rick')
    ->get();

echo "Количество персонажей: " . $character->getCount() . "\n";
echo "Количество страниц: " . $character->getPages() . "\n";
```
