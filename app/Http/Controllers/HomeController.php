<?php

namespace App\Http\Controllers;

use App\User;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        $user = new User();
        $user->name = 'Ramesh M';
        return Inertia::render('Home', [
            'user' => $user,
        ]);
    }
}
