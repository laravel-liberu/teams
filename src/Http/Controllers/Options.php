<?php

namespace LaravelLiberu\Teams\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelLiberu\Select\Traits\OptionsBuilder;
use LaravelLiberu\Teams\Models\Team;

class Options extends Controller
{
    use OptionsBuilder;

    protected $model = Team::class;
}
