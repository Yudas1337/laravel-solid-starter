<?php

namespace App\Contracts\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository
{
    /**
     * Handle model initialization.
     *
     * @var Model $model
     */

    public Model $model;
}
