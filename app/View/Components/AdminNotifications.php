<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;

class AdminNotifications extends Component
{
    public $notifications;
    public $count;

    public function __construct()
    {
        /** @var \App\Models\Admin $admin */
        $admin = Auth::guard('admin')->user();
        $this->notifications = $admin->unreadNotifications()->latest()->get();
        $this->count = $this->notifications->count();
    }

    public function render()
    {
        return view('components.admin-notifications');
    }
}
