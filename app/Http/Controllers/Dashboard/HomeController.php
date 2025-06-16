<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
class HomeController extends Controller
{

    public function index()
    {

        $usersCount = User::count();
        $money = Transaction::where('status', 'success')->sum('amount');
        $ordersCount = Transaction::where('status', 'success')->count();
        $articlesCount = Article::count();


        $currentYear = Carbon::now()->year;

        $usersByMonth = User::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->whereYear('created_at', $currentYear)
            ->groupBy('month')
            ->pluck('count', 'month');

        $ordersByMonth = Transaction::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->where('status', 'success')
            ->whereYear('created_at', $currentYear)
            ->groupBy('month')
            ->pluck('count', 'month');

        $moneyByMonth = Transaction::selectRaw('MONTH(created_at) as month, SUM(amount) as total')
            ->where('status', 'success')
            ->whereYear('created_at', $currentYear)
            ->groupBy('month')
            ->pluck('total', 'month');

        $monthlyUsers = [];
        $monthlyOrders = [];
        $monthlyMoney = [];

        for ($i = 1; $i <= 12; $i++) {
            $monthlyUsers[] = $usersByMonth[$i] ?? 0;
            $monthlyOrders[] = $ordersByMonth[$i] ?? 0;
            $monthlyMoney[] = $moneyByMonth[$i] ?? 0;
        }

        $data = [

            'usersCount' => $usersCount,
            'money' => $money,
            'ordersCount' => $ordersCount,
            'articlesCount' => $articlesCount,
            'monthlyUsers' => $monthlyUsers,
            'monthlyOrders' => $monthlyOrders,
            'monthlyMoney' => $monthlyMoney,
        ];


        return view('Dashboard.index', $data);
    }
}
