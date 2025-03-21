<?php

namespace Mashalov\Rickandmorty\API;

class CharacterClient
{
    private const HOST = 'https://rickandmortyapi.com/api/character';
    public function request(string $query)
    {
        $endpoint = self::HOST. http_build_query(['q' => $query]);

        dd($endpoint);
    }
}