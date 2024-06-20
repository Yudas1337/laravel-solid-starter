<?php

namespace App\Contracts\Interfaces\Eloquent;

interface SumInterface
{
    /**
     * Handle sum data event from models.
     *
     * @return int
     */

    public function sum(): int;
}
