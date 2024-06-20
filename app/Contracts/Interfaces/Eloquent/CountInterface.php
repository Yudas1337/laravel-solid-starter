<?php

namespace App\Contracts\Interfaces\Eloquent;

interface CountInterface
{
    /**
     * Handle count all data event from models.
     *
     *
     * @return int
     */

    public function count(): int;
}
