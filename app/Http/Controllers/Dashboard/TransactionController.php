<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::paginate(10);

        return view('Dashboard.pages.transaction.index' ,compact('transactions'));
    }

}
