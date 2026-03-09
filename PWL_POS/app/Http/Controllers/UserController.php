<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $jumlah_user = UserModel::where('level_id', 2)->count();

        return view('user', ['jumlah_user' => $jumlah_user]);
    }
}
