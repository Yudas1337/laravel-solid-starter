<?php

namespace App\Base\Interfaces;

use Illuminate\Database\Eloquent\Relations\HasMany;

interface HasArticles
{
    /**
     * One-to-Many relationship with Article Model
     *
     * @return HasMany
     */

    public function articles(): HasMany;
}
