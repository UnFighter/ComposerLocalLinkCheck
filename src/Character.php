<?php

namespace Mashalov\Rickandmorty;

use Mashalov\Rickandmorty\API\CharacterClient;

class Character
{
    private string $id;
    private CharacterClient $client;

    public function __construct()
    {
        $this->client = new CharacterClient();
    }

    public function id(string $id): Character
    {
        $this->id = $id;
        return $this;
    }

    public function get()
    {
        $r = $this->client->request($this->id);
    }
}