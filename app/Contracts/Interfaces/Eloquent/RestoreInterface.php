<?php

namespace App\Contracts\Interfaces\Eloquent;

interface RestoreInterface
{
    /**
     * Handle restore data instantly from models.
     *
     * @param mixed $id
     *
     * @return mixed
     */

    public function restore(mixed $id): mixed;
}
