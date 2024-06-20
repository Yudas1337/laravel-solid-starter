<?php

namespace App\Contracts\Interfaces\Eloquent;

interface ShowInterface
{
    /**
     * Handle get the specified data by id from models.
     *
     * @param mixed $id
     *
     * @return mixed
     */

    public function show(mixed $id): mixed;
}
