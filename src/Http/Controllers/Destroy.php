<?php

namespace LaravelLiberu\Teams\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelLiberu\Teams\Models\Team;

class Destroy extends Controller
{
    public function __invoke(Team $team)
    {
        $team->delete();

        return ['message' => __('The team was successfully deleted')];
    }
}
