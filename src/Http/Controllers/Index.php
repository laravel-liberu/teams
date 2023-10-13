<?php

namespace LaravelLiberu\Teams\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelLiberu\Teams\Http\Resources\Team as Resource;
use LaravelLiberu\Teams\Models\Team;

class Index extends Controller
{
    public function __invoke()
    {
        return Resource::collection(
            Team::with(['users.person', 'users.avatar'])->latest()->get()
        );
    }
}
