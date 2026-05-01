<?php

namespace App\Http\Controllers;

use App\Enums\UserRole;
use App\Models\ClientProject;
use App\Models\ProjectAlert;
use App\Models\ProjectDocument;
use App\Models\ProjectReport;
use App\Models\SupplyDelivery;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke(Request $request): View
    {
        $user = $request->user();

        return match ($request->user()->role) {
            UserRole::ADMIN => view('dashboard.admin', [
                'usersCount' => User::query()->count(),
                'activeProjectsCount' => ClientProject::query()->active()->count(),
                'pendingAlertsCount' => ProjectAlert::query()->open()->count(),
                'recentProjects' => ClientProject::query()->with('client')->latest()->limit(5)->get(),
            ]),
            UserRole::EDITEUR => view('dashboard.editor'),
            UserRole::INVESTISSEUR => view('dashboard.investisseur', [
                'project' => $user->clientProjects()->forPole('pole_1')->with(['parcels', 'reports', 'documents', 'expenses', 'alerts', 'tasks', 'commercializations'])->latest()->first(),
            ]),
            UserRole::INDUSTRIEL => view('dashboard.industriel', [
                'program' => $user->clientProjects()->forPole('pole_2')->with(['documents', 'alerts', 'deliveries', 'qualityChecks', 'tasks'])->latest()->first(),
            ]),
        };
    }
}
