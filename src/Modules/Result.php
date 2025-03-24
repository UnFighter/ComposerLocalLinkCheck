<?php

namespace Mashalov\RickAndMorty\Modules;

class Result
{
    private float|int $count;
    private float|int $pages;

    public function setCount(float|int $count): Result
    {
        $this->count = $count;
        return $this;
    }

    public function getCount(): float|int
    {
        return $this->count;
    }

    public function setPages(float|int $pages): Result
    {
        $this->pages = $pages;
        return $this;
    }

    public function getPages(): float|int
    {
        return $this->pages;
    }


}