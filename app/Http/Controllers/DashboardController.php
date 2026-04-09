<?php

namespace App\Http\Controllers;

use App\Enums\UserRole;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke(Request $request): View
    {
        return match ($request->user()->role) {
            UserRole::ADMIN => view('dashboard.admin'),
            UserRole::INVESTISSEUR => view('dashboard.investisseur'),
            UserRole::INDUSTRIEL => view('dashboard.industriel'),
        };
    }
}