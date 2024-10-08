<?php

namespace App\Http\Controllers;

use App\Models\LoginHistory;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function loghistory(Request $requset, $user)
    {
        LoginHistory::create([
            'user_id' => $user->id,
            'login_at' => now(),
            'name' => $user->name,
        ]);
    }
}
