<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\Transaction;
use Illuminate\Http\Request;

class UserPackagesManagementController extends Controller
{
    public function index()
    {

        $packages = Package::all();
        $colors = [
            "#be185d",
            "#047857",
            "#7c3aed",
            "#b45309",
            "#0ea5e9",
            "#dc2626",
            "#15803d",
            "#a21caf",
            "#d97706",
            "#1d4ed8"
        ];

        $transactions = Transaction::where('status', 'success')
            ->with(['user', 'package'])
            ->get()
            ->map(function ($transaction, $index) use ($colors) {
                $packageName = $transaction->package->name;
                $userPoints = $transaction->user->points ?? 0;
                $totalCoins = $transaction->coins;
                $usedCoins = $userPoints;
                $remainingCoins = $totalCoins - $usedCoins;
                $usedPercentage = $totalCoins > 0 ? round(($usedCoins / $totalCoins) * 100) : 0;


                $packageData = match ($packageName) {
                    '10 Coins Package' => ['label' => '10 Coins Package', 'style' => 'background: #d1fae5; color: #065f46; border-color: #34d399;'],
                    '20 Coins Package' => ['label' => '20 Coins Package', 'style' => 'background: #e0f2fe; color: #0369a1; border-color: #7dd3fc;'],
                    '30 Coins Package' => ['label' => '30 Coins Package', 'style' => 'background: #fef3c7; color: #d97706; border-color: #fcd34d;'],
                    '50 Coins Package' => ['label' => '50 Coins Package', 'style' => 'background: #fae8ff; color: #a21caf; border-color: #f0abfc;'],
                    default => ['label' => 'Unknown', 'style' => 'background: #e5e7eb; color: #374151; border-color: #d1d5db;']
                };

                $transaction->avatarColor = $colors[$index % count($colors)];
                $transaction->package_label = $packageData['label'];
                $transaction->package_style = $packageData['style'];
                $transaction->used_coins = $usedCoins;
                $transaction->remaining_coins = $remainingCoins;
                $transaction->used_percentage = $usedPercentage;

                return $transaction;
            });
        $data = [
            'packages' => $packages,
            'transactions' => $transactions
        ];

        return view('Dashboard.pages.UserPackagesManagement.index', $data);
    }
}
