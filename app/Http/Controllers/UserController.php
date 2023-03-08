<?php

namespace App\Http\Controllers;


use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return UserResource::collection($users);
    }


    public function store(UserRequest $request)
    {
        $data = $request->validated();
        $user = User::create($data);
        return UserResource::make($user);
    }


    public function show($id)
    {
        $user = User::find($id);
        return UserResource::make($user);
    }

    public function update(UserRequest $request, User $user)
    {
        $data = $request->validated();
        $user->update($data);
        return UserResource::make($user);
    }

    public function destroy($id)
    {
        User::destroy($id);
        return response()->json([], 200);
    }
}
