<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(request()->per_page);

        return response()->view('user', compact('users'));
    }

    public function create()
    {
        User::factory()->count(10)->create();

        return to_route('users.index');
    }
}
