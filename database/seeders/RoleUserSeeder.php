<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use App\Models\ClientProject;
use App\Models\ProjectAlert;
use App\Models\ProjectCommercialization;
use App\Models\ProjectDocument;
use App\Models\ProjectExpense;
use App\Models\ProjectParcel;
use App\Models\ProjectQualityCheck;
use App\Models\ProjectReport;
use App\Models\ProjectTask;
use App\Models\SupplyDelivery;
use App\Models\User;
use Illuminate\Database\Seeder;

class RoleUserSeeder extends Seeder
{
    public function run(): void
    {
        User::query()->updateOrCreate(
            ['email' => 'admin@justagrogroup.com'],
            [
                'name' => 'Admin Just Agro Group',
                'password' => 'password',
                'role' => UserRole::ADMIN,
                'email_verified_at' => now(),
            ]
        );

        User::query()->updateOrCreate(
            ['email' => 'editeur@justagrogroup.com'],
            [
                'name' => 'Éditeur JAG',
                'password' => 'password',
                'role' => UserRole::EDITEUR,
                'email_verified_at' => now(),
            ]
        );

        $investor = User::query()->updateOrCreate(
            ['email' => 'investisseur@justagrogroup.com'],
            [
                'name' => 'Client Investisseur',
                'password' => 'password',
                'role' => UserRole::INVESTISSEUR,
                'email_verified_at' => now(),
            ]
        );

        $industrial = User::query()->updateOrCreate(
            ['email' => 'industriel@justagrogroup.com'],
            [
                'name' => 'Client Industriel',
                'password' => 'password',
                'role' => UserRole::INDUSTRIEL,
                'email_verified_at' => now(),
            ]
        );

        $investorProject = ClientProject::query()->updateOrCreate(
            ['client_id' => $investor->id, 'pole' => 'pole_1', 'name' => 'Ferme pilote Koudougou'],
            [
                'location' => 'Koudougou',
                'surface_hectare' => 8,
                'cultures' => ['maïs', 'soja'],
                'cycle' => 'Campagne 2026',
                'status' => 'en_production',
                'summary' => 'Projet agricole sous Maîtrise d’Ouvrage Agricole avec reporting mensuel.',
                'objective' => 'Stabiliser la production et documenter les performances de campagne.',
                'budget_planned' => 4500000,
                'budget_spent' => 1850000,
                'just_control_live_enabled' => true,
            ]
        );

        ProjectParcel::query()->updateOrCreate(
            ['client_project_id' => $investorProject->id, 'name' => 'Parcelle 1'],
            ['surface_hectare' => 4, 'culture' => 'maïs', 'status' => 'Suivi végétatif', 'notes' => 'Développement régulier.']
        );

        ProjectReport::query()->updateOrCreate(
            ['client_project_id' => $investorProject->id, 'title' => 'Rapport mensuel'],
            ['period' => 'Avril 2026', 'summary' => 'Opérations culturales réalisées et suivi des dépenses.', 'published_at' => now()]
        );

        ProjectExpense::query()->updateOrCreate(
            ['client_project_id' => $investorProject->id, 'label' => 'Intrants de lancement'],
            ['category' => 'Intrants', 'amount' => 850000, 'spent_at' => now()->subDays(12)]
        );

        ProjectDocument::query()->updateOrCreate(
            ['client_project_id' => $investorProject->id, 'title' => 'Plan d’exploitation'],
            ['type' => 'Plan', 'issued_at' => now()]
        );

        ProjectAlert::query()->updateOrCreate(
            ['client_project_id' => $investorProject->id, 'title' => 'Surveillance irrigation'],
            ['severity' => 'info', 'message' => 'Point de contrôle prévu cette semaine.', 'recommendation' => 'Maintenir le suivi terrain.']
        );

        ProjectTask::query()->updateOrCreate(
            ['client_project_id' => $investorProject->id, 'title' => 'Contrôle irrigation'],
            ['status' => 'prevu', 'planned_at' => now()->addDays(4), 'notes' => 'Vérifier pression et distribution.']
        );

        ProjectCommercialization::query()->updateOrCreate(
            ['client_project_id' => $investorProject->id, 'harvest_status' => 'Pré-récolte'],
            ['outlet' => 'Débouchés en analyse', 'sales_amount' => null, 'cycle_balance' => 'Bilan disponible après récolte.']
        );

        $industrialProgram = ClientProject::query()->updateOrCreate(
            ['client_id' => $industrial->id, 'pole' => 'pole_2', 'name' => 'Approvisionnement maïs brasserie'],
            [
                'company' => 'Industrie partenaire',
                'location' => 'Centre-Ouest',
                'cultures' => ['maïs grain'],
                'cycle' => 'Programme 2026',
                'status' => 'contrat',
                'contracted_volume' => 500,
                'mobilized_volume' => 180,
                'delivered_volume' => 60,
                'delivery_window' => 'Juin - Septembre 2026',
                'quality_status' => 'Documents en conformité',
            ]
        );

        SupplyDelivery::query()->updateOrCreate(
            ['client_project_id' => $industrialProgram->id, 'lot_reference' => 'LOT-MAIS-001'],
            ['planned_at' => now()->addWeeks(3), 'volume' => 60, 'quality_status' => 'Contrôle prévu', 'reception_status' => 'Planifiée']
        );

        ProjectDocument::query()->updateOrCreate(
            ['client_project_id' => $industrialProgram->id, 'title' => 'Lettre d’intention'],
            ['type' => 'LOI', 'issued_at' => now()]
        );

        ProjectTask::query()->updateOrCreate(
            ['client_project_id' => $industrialProgram->id, 'title' => 'Consolidation bassin Centre-Ouest'],
            ['status' => 'en_cours', 'planned_at' => now()->addDays(10), 'notes' => 'Validation des producteurs encadrés.']
        );

        ProjectQualityCheck::query()->updateOrCreate(
            ['client_project_id' => $industrialProgram->id, 'lot_reference' => 'LOT-MAIS-001'],
            ['humidity' => 13.5, 'calibration' => 'Standard brasserie', 'impurity_rate' => 1.2, 'checked_at' => now(), 'notes' => 'Contrôle initial conforme.']
        );
    }
}
