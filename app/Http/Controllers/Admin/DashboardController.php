<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\TravelPackage;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // Cara menghitung total data yg ada didalam db, dan berfungsi untuk membuat dashboard
        return view('pages.admin.dashboard', [
            'travel_package' => TravelPackage::count(),
            'transaction' => Transaction::count(),
            'transaction_pending' => Transaction::where('transaction_status', 'PENDING')->count(),
            'transaction_success' => Transaction::where('transaction_status', 'SUCCESS')->count(),
            'transaction_in_cart' => Transaction::where('transaction_status', 'IN_CART')->count(),
            'transaction_cancel' => Transaction::where('transaction_status', 'CANCEL')->count(),
            'transaction_failed' => Transaction::where('transaction_status', 'FAILED')->count(),

        ]);
    }
}
