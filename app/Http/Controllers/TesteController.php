<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\View\View;

class TesteController extends Controller
{
    public function login(int $id): View
    {
        return view('login', [
            'id' => $id,
        ]);
    }

    public function add(): View
    {
        return view('teste/add');
    }
}