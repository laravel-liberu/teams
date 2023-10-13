<?php

namespace LaravelLiberu\Teams\DynamicRelations;

use Closure;
use LaravelLiberu\DynamicMethods\Contracts\Method;
use LaravelLiberu\Teams\Models\Team;

class Teams implements Method
{
    public function name(): string
    {
        return 'teams';
    }

    public function closure(): Closure
    {
        return fn () => $this->belongsToMany(Team::class);
    }
}
