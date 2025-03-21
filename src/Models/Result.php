<?php

namespace Mashalov\Weather\Models;

class Result
{
    private int|float $id;

    public function setId(float|int $id): void
    {
        $this->id = $id;
    }

    public function getId(): float|int
    {
        return $this->id;
    }
}