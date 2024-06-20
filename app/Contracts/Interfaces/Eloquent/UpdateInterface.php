<?php

namespace App\Contracts\Interfaces\Eloquent;

interface UpdateInterface
{
    /**
     * Handle show method and update data instantly from models.
     *
     * @param mixed $id
     * @param array $data
     *
     * @return mixed
     */

    public function update(mixed $id, array $data): mixed;
}
