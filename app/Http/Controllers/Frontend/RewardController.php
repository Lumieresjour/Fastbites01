<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RewardController extends Controller
{
    public function index()
    {
        $data = [];
        if (auth()->check()) {
            $data['user_point'] = auth()->user()->point;
        }
        return view('frontend.reward.index', compact('data'));
    }
}
