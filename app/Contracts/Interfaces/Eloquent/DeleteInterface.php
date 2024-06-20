<?php

namespace App\Contracts\Interfaces\Eloquent;

interface DeleteInterface
{
    /**
     * Handle show method and delete data instantly from models.
     *
     * @param mixed $id
     *
     * @return mixed
     */

    public function delete(mixed $id): mixed;
}
