<?php

namespace Mashalov\RickAndMorty\API;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class CharacterClient
{
    private const HOST = 'https://rickandmortyapi.com/api';
    private $client;
    public function __construct()
    {
        $this->client = new Client();
    }

    /**
     * @throws GuzzleException
     */
    public function request(string $query, string $endpoint = 'character') : array
    {
        $url = self::HOST . '/' . $endpoint;
        if ($query) {
            $url .= '/' . '?' . http_build_query(['name' => $query]) . '&status=alive';
        }
        $response = $this->client->get($url);

        return json_decode($response->getBody()->getContents(), true);
    }
}