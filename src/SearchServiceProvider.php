<?php

namespace LaravelLiberu\Teams;

use LaravelLiberu\Searchable\SearchServiceProvider as ServiceProvider;
use LaravelLiberu\Teams\Models\Team;

class SearchServiceProvider extends ServiceProvider
{
    public $register = [
        Team::class => [
            'group' => 'Team',
            'attributes' => ['name'],
            'label' => 'name',
            'permissionGroup' => 'administration.teams',
        ],
    ];
}
