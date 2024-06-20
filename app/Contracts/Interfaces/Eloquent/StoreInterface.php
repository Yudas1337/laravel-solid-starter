<?php

namespace App\Contracts\Interfaces\Eloquent;

interface StoreInterface
{
    /**
     * Handle store data event to models.
     *
     * @param array $data
     *
     * @return mixed
     */

    public function store(array $data): mixed;
}
