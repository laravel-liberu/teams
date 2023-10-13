<?php

namespace LaravelLiberu\Teams\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelLiberu\Teams\Http\Requests\ValidateTeam;
use LaravelLiberu\Teams\Http\Resources\Team as Resource;
use LaravelLiberu\Teams\Models\Team;

class Store extends Controller
{
    public function __invoke(ValidateTeam $request)
    {
        $team = Team::updateOrCreate(
            ['id' => $request->get('id')],
            ['name' => $request->get('name')]
        );

        $team->updateMembers($request->get('userIds'));

        return [
            'message' => __('The team was successfully saved'),
            'team' => new Resource($team->load(['users.person', 'users.avatar'])),
        ];
    }
}
