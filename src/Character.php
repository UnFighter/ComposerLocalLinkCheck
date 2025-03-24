<?php

namespace Mashalov\RickAndMorty;
use GuzzleHttp\Exception\GuzzleException;
use IlluminateAgnostic\Arr\Support\Arr;
use Mashalov\RickAndMorty\API\CharacterClient;
use Mashalov\RickAndMorty\Modules\Result;

class Character
{
    private string $charactersName;
    private CharacterClient $client;
    public function __construct()
    {
        $this->client = new CharacterClient();
    }

    public function charactersName(string $characterName): Character
    {
        $this->charactersName = $characterName;
        return $this;
    }

    /**
     * @throws GuzzleException
     */
    public function get(): Result
    {
        $data = $this->client->request($this->charactersName);

        return (new Result())
            ->setCount(Arr::get($data, 'info.count', 0))
            ->setPages(Arr::get($data, 'info.pages', 0));
    }
}