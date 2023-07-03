<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;


class HomepageController extends Controller
{
    public function index(Request $request): Factory|View|Application
    {
        return view('homepage');
    }
}
