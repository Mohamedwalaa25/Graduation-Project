<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function markAll()
    {
        /** @var \App\Models\Admin $admin */
        $admin = Auth::guard('admin')->user();
        $admin?->unreadNotifications->markAsRead();

        notyf()
            ->position('x', 'center')
            ->position('y', 'top')
            ->success('Sucessfully: Notification Mark As Read ');
        return redirect()->back();
    }
}
